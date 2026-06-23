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
$fields = ['full_name', 'email', 'mail', 'number_people', 'date', 'time_start', 'date_alt', 'time_start_alt', 'fromWhere', 'interest', 'sonstiges', 'spam_protection'];

$i18n = [
    "de" => [
        "full_name" => "Name",
        "email" => "E-mail",
        "number_people" => "Anzahl der Personen",
        "date" => "Datum",
        "time_start" => "Uhrzeit",
        "date_alt" => "Alternatives Datum",
        "time_start_alt" => "Alternative Uhrzeit",
        "fromWhere" => "Woher Sie das CA kennen",
        "interest" => "Weshalb Sie Interesse an der Führung haben",
        "sonstiges" => "Zusätzliche Informationen",
        "registration" => "Anfrage Führung durchs CA",
        "registration-sent" => "anmeldung-verschickt",
	    "spam-protection" => "spamschutz",
        "mail-message" => "Vielen Dank für Ihre Anfrage für eine Führung!\nWir freuen uns, dass Sie Interesse haben. Mit dieser Nachricht bestätigen wir, dass Ihre Anfrage für eine Führung bei uns eingegangen ist. Wir versuchen uns möglichst bald bei Ihnen zu melden. Da wir im CA alle ehrenamtlich arbeiten, kann es zu kleinen Verzögerungen kommen, wir bitten diese zu entschuldigen. \nTreffpunkt der Führungen ist vor dem ehemaligen Pförtnerhäuschen auf dem Mendelejewplatz gegenüber der Tram-Haltestelle Ortenauer Straße. Eine genaue Wegbeschreibung finden Sie unter https://collegiumacademicum.de/anfahrt/. \n Falls Sie noch weitere Bemerkungen zu Ihrer Anfrage haben oder sich wieder abmelden wollen, können Sie einfach auf diese E-Mail antworten.",
        "with-data" => "Wir haben folgende Daten empfangen:",
        "privacy-notice" => "Wir behalten diese Daten nur bis zum Tag der Führung. Danach werden sie gelöscht. Auf https://collegiumacademicum.de/datenschutz/ finden Sie weitere Informationen zu unserer Datenschutzerklärung.",
        "dear" => "Liebe*r",
        "regards" => "Herzliche Grüße\n\nDas Collegium Academicum",
    ],
    "en" => [
        "full_name" => "Name",
        "email" => "E-mail",
        "number_people" => "Number of People",
        "date" => "Date",
        "time_start" => "Time",
        "date_alt" => "Alternative date",
        "time_start_alt" => "Alternative time",
        "fromWhere" => "From where you know the CA",
        "interest" => "Why you are interested in the tour",
        "sonstiges" => "Additional Information",
        "registration" => "Tour request through the CA",
        "registration-sent" => "en/registration-sent",
	    "spam-protection" => "en/spam-protection",
        "mail-message" => "Thank you for requesting a guided tour!\nWe are happy that you are interested. With this message we confirm that we have received your request. We will try to contact you as soon as possible. Since we are all volunteers at the CA, there might be slight delays. We apologize for any inconvenience.\nThe meeting point for the tours is in front of the former gatehouse on Mendelejewplatz opposite the Ortenauer Straße tram stop. You can find detailed directions at https://collegiumacademicum.de/en/map/.\nIf you have any additional information or would like to cancel your request, simply reply to this e-mail.",
        "with-data" => "We received the following data:",
        "privacy-notice" => "We only keep this data until the day of the tour. After that, it will be deleted. You can find more information about our privacy policy at https://collegiumacademicum.de/datenschutz/.",
        "dear" => "Dear",
        "regards" => "Best regards\n\nThe Collegium Academicum",
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
            $body .= "\n\n{$i18n[$lang]["regards"]}";
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
