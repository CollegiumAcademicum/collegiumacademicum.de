<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../php_libs/PHPMailer/src/Exception.php';
require '../../php_libs/PHPMailer/src/PHPMailer.php';
require '../../php_libs/PHPMailer/src/SMTP.php';

require_once '../../php_libs/formr/class.formr.php';

require '../../php_libs/IPLogger/ip-logging.php';
$log_file = 'spam-protection.log';

// NOTE:The field mail is a fake field for spam protection
$fields = ['full_name', 'email', 'mail', 'fromWhere', 'interest', 'spam_protection'];

$i18n = [
    "de" => [
        "full_name" => "Name",
        "email" => "E-mail",
        "fromWhere" => "Woher?",
        "interest" => "Interesse",
        "registration" => "Anmeldung Führung durchs CA",
        "registration-sent" => "anmeldung-verschickt",
	    "spam-protection" => "spamschutz",
        "mail-message" => "Vielen Dank für Ihre Anmeldung zur Führung!\nWir freuen uns, dass Sie teilnehmen möchten. Mit dieser Nachricht bestätigen wir, dass Sie zur Führung angemeldet sind.\nTreffpunkt ist vor dem ehemaligen Pförtnerhäuschen auf dem Mendelejewplatz gegenüber der Tram-Haltestelle Ortenauer Straße. Eine genaue Wegbeschreibung finden Sie unter https://collegiumacademicum.de/anfahrt/.\nFalls Sie Fragen zu der Führung haben oder sich wieder abmelden wollen, können Sie einfach auf diese E-Mail antworten.",
        "with-data" => "Wir haben folgende Daten empfangen:",
        "privacy-notice" => "Wir behalten diese Daten nur bis zum Tag der Führung. Danach werden sie gelöscht. Auf https://collegiumacademicum.de/datenschutz/ finden Sie weitere Informationen zu unserer Datenschutzerklärung.",
        "dear" => "Liebe*r",
    ],
    "en" => [
        "full_name" => "Name",
        "email" => "E-mail",
        "fromWhere" => "From where?",
        "interest" => "Interest",
        "registration" => "Anmeldung Führung durchs CA",
        "registration-sent" => "en/registration-sent",
	    "spam-protection" => "en/spam-protection",
        "mail-message" => "Thank you for registering for the tour!\nWe are happy that you would like to participate. With this message we confirm that you are registered for the guided tour.\nThe meeting point is in front of the former gatehouse on Mendelejewplatz opposite the Ortenauer Straße tram stop. You can find detailed directions at https://collegiumacademicum.de/en/map/.\nIf you have any questions about the tour or would like to cancel your registration, simply reply to this e-mail.",
        "with-data" => "We received the following data:",
        "privacy-notice" => "We only keep this data until the day of the tour. After that, it will be deleted. You can find more information about our privacy policy at https://collegiumacademicum.de/datenschutz/.",
        "dear" => "Dear",
    ],];

// Creates the form: command inserts the html form tag
$form = new Formr();

function send_mail($from, $to, $data, $lang, $with_message) {
    global $i18n;
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $hr = "\n\n" . str_repeat("-", 45) . "\n\n";

    try {
        call_user_func_array(array($mail, "setFrom"), $from);
        call_user_func_array(array($mail, "addAddress"), $to);
        call_user_func_array(array($mail, "addReplyTo"), $from);

        $mail->Subject = "{$i18n[$lang]['registration']} {$data['full_name']}";
        $body = "";

        if ($with_message) {
            $body .= "{$i18n[$lang]['dear']} {$data['full_name']},";
            $body .= "\n\n{$i18n[$lang]['mail-message']}";
        }

        $body .= $hr;
        $body .= "{$i18n[$lang]['with-data']}\n\n";
        foreach ($data as $key => $value) {
            $_val = wordwrap(str_replace("\n", "\n\t", $value), 60, "\n\t");
            $body .= "{$i18n[$lang][$key]}:\n";
            $body .= "\t{$_val}\n";
        }
        $body .= $hr;

        if ($with_message) {
            $body .= $i18n[$lang]["privacy-notice"];
        }

        $mail->Body = $body;
        $mail->send();
    } catch (Exception $e) {
        echo "Message from {$from[0]} to {$to[0]} could not be sent.\nMailer Error: {$mail->ErrorInfo}.\nPlease, contact kontakt@collegiumacademicum.de";
    }
}

// check in the ip logs for computer who try to sent more than three times
function check_for_spam($logs, $ip_address) {
    $hashed_ip = hash('sha256', $ip_address);
    foreach ($logs as $log) {
        if($log['ip'] == $hashed_ip and $log['tries'] > 3) {
            return true;
        }
    }
    return false;
}
    

if($form->submit()){
    $lang = $form->post("language");
    if (!in_array($lang, ['de', 'en'])) {
        header('Location:./');
    }
    // log ip address
    $ip_address = get_ip_addr();
    $logs = read_logs($log_file);
    $logs = update_logs($logs, $ip_address);
    write_logs($logs, $log_file);

    // spam protection
    $spam = check_for_spam($logs, $ip_address);
    $spam_protection = $form->post("spam_protection");
    $fake_mail_field = $form->post("mail");
    if ($spam_protection == 9 and $fake_mail_field == "" and ! $spam ) {
        $data = ["email" => $form->post('email','Email','valid_email')];
    	foreach ($fields as $field) {
            // Skip if the field is "mail" or "spam_protection"
            if ($field === 'mail' || $field === 'spam_protection') {
                continue;
            }
        	$_dat = $form->post($field);
        	// just a sanity check, shouldnt happen but if somebody does shenanigans this will cut it down
        	if (mb_strlen($_dat, 'utf8') > 2500) {
            	   $_dat = mb_substr($_dat, 0, 2500, 'utf8');
        	}	   
        $data[$field] = $_dat;
    	}

    	$applicant = array($data["email"], $data['full_name']);

    	// The id of the auswahl team this email goes to
    	// $rid = rand(1,$number_of_inboxes);
    	$contact = array("collegiumacademicum@posteo.de", "Collegium Academicum");

    	// Send the mail to the applicant as a confirmation
    	send_mail($contact, $applicant, $data, $lang, True);

    	// Send the mail to us @ posteo
    	send_mail($applicant, $contact, $data, $lang, False);

    	header("Location:/{$i18n[$lang]["registration-sent"]}");
    } else {
       header("Location:/{$i18n[$lang]["spam-protection"]}");
    }
} else {
    header("Location:./");
}
?>
