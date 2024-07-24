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
$fields = ['full_name', 'email', 'phone', 'age', 'about_you', 'why_ca', 'occupation', 'pronouns', 'diversity', 'children', 'contacts', 'roomsize', 'move-in', 'how_long', 'language_application_day', 'anything_else', 'mail', 'spam_protection'];

$i18n = [
    "de" => [
        "full_name" => "Rufname",
        "email" => "E-Mail",
	"phone" => "Telefonnummer",
        "age" => "Geburtsdatum",
	"about_you" => "Möchtest du uns etwas über dich erzählen?",
	"why_ca" => "Warum möchtest du einziehen (und Teil des Projekts werden)?",
        "occupation" => "Was ist deine hauptsächliche offizielle Tätigkeit?",
        "pronouns" => "Mit welchen Pronomen möchtest du angesprochen werden?",
        "diversity" => "Gibt es Diversitäts- oder Marginalisierungsmerkmale, die du mit uns teilen möchtest?",
        "children" => "Hast du Kinder, die mit dir einziehen würden?",
	"contacts" => "Kennst du bereits andere Leute, mit denen du zusammenziehen möchtest?",
	"roomsize" => "Hast du bereits Wünsche für eine Zimmergröße? Könntest du dir vorstellen, mit einer anderen Person in ein Doppelzimmer zu ziehen?",
	"move-in" => "Wann möchtest du einziehen?",
	"how_long" => "Wie lange würdest du voraussichtlich gerne im CA wohnen?",
	"language_application_day" => "Könntest du auch auf Englisch gut am Auswahltag teilnehmen?",
	"anything_else" => "Möchtest du uns noch etwas mitteilen?",
        "application" => "Bewerbung",
        "application-sent" => "bewerbung-verschickt-zwischenmiete",
	    "spam-protection" => "spamschutz",
        "mail-message" => "Vielen Dank für deine Bewerbung beim CA!\nWir freuen uns, dass du bei uns einziehen möchtest. Mit dieser Nachricht bestätigen wir, dass wir deine Bewerbung erhalten haben. Falls du Fragen zu deiner Bewerbung hast, kannst du einfach auf diese E-Mail antworten.",
        "with-data" => "Wir haben folgende Daten empfangen:",
        "privacy-notice" => "Wir behalten diese Daten nur für die Dauer deiner Bewerbung. Danach werden sie gelöscht. Auf https://collegiumacademicum.de/datenschutz/ findest du weitere Informationen zu unserer Datenschutzerklärung.",
        "dear" => "Liebe*r",
    ],
    "en" => [
        "full_name" => "Name",
        "email" => "E-mail address",
	"phone" => "Phone number",
        "age" => "Date of birth",
	"about_you" => "Would you like to tell us something about yourself?",
	"why_ca" => "Why do you want to move in (and why do you want to be a part of this project)?",
        "occupation" => "What is your official main activity?",
        "pronouns" => "Which pronouns would you like to be addressed with?",
        "diversity" => "Are there any diversity or marginalization characteristics you would like to share?",
        "children" => "Do you have children moving in with you?",
	"contacts" => "Do you already know people you would like to move in with?",
	"roomsize" => "Do you have a preferred room size? Do you want to move into a double room with another person?",
	"move-in" => "When do you want to move in?",
	"how_long" => "How long do you want to live in the CA?",
	"language_application_day" => "Would you prefer having the get-to-know-you day in German or English?",
	"anything_else" => "Is there anything else you would like to tell us?",
        "application" => "Application",
        "application-sent" => "en/application-sent-interim-rent",
	    "spam-protection" => "en/spam_protection",
        "mail-message" => "Thank you for your application to the CA!\nWe are happy that you are interested in moving into our housing project. With this message we confirm that we have received your application. If you have any questions about your application, you can reply to this email.",
        "with-data" => "We received the following data:",
        "privacy-notice" => "We are keeping this data only for the duration of your application, after which it will be deleted. Please see https://collegiumacademicum.de/datenschutz/ for further information about our privacy policy.",
        "dear" => "Dear",
    ]];
// $number_of_inboxes = 4;

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

        $mail->Subject = "{$i18n[$lang]['application']} {$data['full_name']} Collegium Academicum";
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
    if ($spam_protection == 8 and $fake_mail_field == "" and ! $spam ) {
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

    	$contact = array("einziehen.altbau@collegiumacademicum.de", "Collegium Academicum");

    	// Send the mail to the applicant as a confirmation
    	send_mail($contact, $applicant, $data, $lang, True);

    	// Send the mail to us @ posteo
    	send_mail($applicant, $contact, $data, $lang, False);

    	header("Location:/{$i18n[$lang]["application-sent"]}");
    } else {
       header("Location:/{$i18n[$lang]["spam-protection"]}");
    }
} else {
    header("Location:./");
}
?>
