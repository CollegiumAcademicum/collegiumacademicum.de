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

$fields = ['full_name', 'email', 'phone', 'event', 'date',
'number_guests', 'freetext'];

$i18n = [
    "de" => [
        "full_name" => "Name",
        "email" => "E-mail",
        "phone" => "Telefonnummer",
        "event" => "Veranstaltung",
        "date" => "Datum der Veranstaltung",
        "number_guests" => "Ungefähre Personenanzahl",
        "request-sent" => "raumanfrage-verschickt",
        "freetext" => "Freies Kontaktfeld",
        "dear" => "Liebe*r",
        "mail-message" => "Vielen Dank für deine Raumanfrage!\nMit dieser Nachricht bestätigen wir, dass wir deine Anfrage erhalten haben. Wir werden uns in Kürze bei dir melden.",
        "with-data" => "Wir haben folgende Daten empfangen:",
    ]];

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

        $mail->Subject = "{$i18n[$lang]['Request']} {$data['full_name']} Veranstaltung";
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

        # if ($with_message) {
        #     $body .= $i18n[$lang]["privacy-notice"];
        # }

        $mail->Body = $body;
        $mail->send();
    } catch (Exception $e) {
        echo "Message from {$from[0]} to {$to[0]} could not be sent.\nMailer Error: {$mail->ErrorInfo}.\nPlease, contact m_frank@collegiumacademicum.de";
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
    if (!in_array($lang, ['de'])) {
        header('Location:./');
    }
    // log ip address
    $ip_address = get_ip_addr();
    $logs = read_logs($log_file);
    $logs = update_logs($logs, $ip_address);
    write_logs($logs, $log_file);

    // spam protection
    $spam = check_for_spam($logs, $ip_address);

    if (! $spam ) {
        $data = ["email" => $form->post('email','Email','valid_email')];
    	foreach ($fields as $field) {
        	$_dat = $form->post($field);
        	// just a sanity check, shouldnt happen but if somebody does shenanigans this will cut it down
        	if (mb_strlen($_dat, 'utf8') > 2500) {
            	   $_dat = mb_substr($_dat, 0, 2500, 'utf8');
        	}	   
        $data[$field] = $_dat;
    	}

    	$applicant = array($data["email"], $data['full_name']);

    	$contact = array("aula@collegiumacademicum.de", "Collegium Academicum");

    	// Send the mail to the applicant as a confirmation
    	send_mail($contact, $applicant, $data, $lang, True);

    	// Send the mail to us @ posteo
    	send_mail($applicant, $contact, $data, $lang, False);

    	header("Location:/{$i18n[$lang]["request-sent"]}");
    } else {
       header("Location:/{$i18n[$lang]["spam-protection"]}");
    }
} else {
    header("Location:./");
}
?>