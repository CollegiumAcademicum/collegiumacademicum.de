<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../php_libs/PHPMailer/src/Exception.php';
require '../../php_libs/PHPMailer/src/PHPMailer.php';
require '../../php_libs/PHPMailer/src/SMTP.php';

require_once '../../php_libs/formr/class.formr.php';

$fields = ['full_name', 'email', 'age', 'leitbild', 'selbstverwaltung',
'sonstiges', 'occupation', 'occupation_subject', 'nationality', 'gender',
'barrier_free', 'children', 'contacts', 'spam_protection'];
$i18n = [
    "de" => [
        "full_name" => "Name",
        "email" => "E-mail",
        "age" => "Geburtstag",
        "leitbild" => "Leitbild",
        "selbstverwaltung" => "Selbstverwaltung",
        "sonstiges" => "Über dich",
        "occupation" => "offizielle Tätigkeit",
        "occupation_subject" => "Fach/Beruf",
        "nationality" => "Staatszugehörigkeit",
        "gender" => "Geschlecht",
        "barrier_free" => "Barrierefreiheit",
        "children" => "Kinder",
        "contacts" => "MitbewohnerInnen-Wunsch",
        "application" => "Bewerbung",
        "application-sent" => "bewerbung-verschickt",
        "mail-message" => "Vielen Dank für Deine Bewerbung für das Collegium Academicum!\nWir freuen uns, dass Du bei uns einziehen möchtest. Mit dieser Nachricht bestätigen wir, dass wir Deine Bewerbung erhalten haben. Wir werden uns in den kommenden zwei Wochen bei Dir zurückmelden. Solltest Du irgendwelche Fragen zu Deiner Bewerbung haben, kannst Du auf diese Nachricht antworten und sie wird die Person erreichen die Deine Bewerbung bearbeitet. Bitte sieh innerhalb der nächsten zwei Wochen davon ab, uns Rückfragen zum Stand deiner Bewerbung zu schicken, weil wir die Zeit brauchen, um die Bewerbungen zu sichten.",
        "with-data" => "Wir haben folgende Daten empfangen:",
        "privacy-notice" => "Wir behalten diese Daten nur für die Dauer Deiner Bewerbung. Danach werden sie gelöscht. Auf https://collegiumacademicum.de/datenschutz/ findest Du weitere Informationen zu unserer Datenschutzerklärung.",
        "dear" => "Liebe*r",
        "check_education_status" => "Hat die Richtlinien über den Ausbildungsstatus wahrgenommen",
    ],
    "en" => [
        "full_name" => "Name",
        "email" => "E-mail",
        "age" => "Birthday",
        "leitbild" => "Our Vision",
        "selbstverwaltung" => "Self-management",
        "sonstiges" => "About you",
        "occupation" => "Occupation",
        "occupation_subject" => "Subject/Job",
        "nationality" => "Nationality",
        "gender" => "Gender",
        "barrier_free" => "Accessibility",
        "children" => "Children",
        "contacts" => "Roommate wish",
        "application" => "Application",
        "application-sent" => "en/application-sent",
        "mail-message" => "Thank you for your application to the Collegium Academicum!\nWe are happy that you are interested in moving in with us. With this message we are confirming, that we received your application. We will come back to you in the following two weeks. If you have any questions in the meantime, you can reply to this e-mail and you will reach the person that is responsible for yor application. Please avoid inquiring about the state of your application for the first two weeks, as we need some time to review the applications.",
        "with-data" => "We received the following data:",
        "privacy-notice" => "We are keeping this data only for the duration of your application, after which it will be deleted. Please see https://collegiumacademicum.de/datenschutz/ for further information about our privacy policy.",
        "dear" => "Dear",
        "check_education_status" => "Checked for educational status for moving in",
    ]];
$number_of_inboxes = 4;

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
        echo "Message could from {$from[0]} to {$to[0]} not be sent.\nMailer Error: {$mail->ErrorInfo}.\nPlease, contact m_frank@collegiumacademicum.de";
    }
}


if($form->submit()){
    $lang = $form->post("language");
    if (!in_array($lang, ['de', 'en'])) {
        header('Location:./');
    }
    // spam protection
    $spam_protection = $form->post("spam_protection");
    if ($spam_protection == 8) {
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

    	// The id of the auswahl team this email goes to
    	$rid = rand(1,$number_of_inboxes);
    	$contact = array("bewerbung{$rid}@collegiumacademicum.de", "Collegium Academicum");

    	// Send the mail to the applicant as a confirmation
    	send_mail($contact, $applicant, $data, $lang, True);

    	// Send the mail to us @ posteo
    	send_mail($applicant, $contact, $data, $lang, False);

    	header("Location:/{$i18n[$lang]["application-sent"]}");
    } else {
       header('Location:./');
    }
} else {
    header("Location:./");
}
?>
