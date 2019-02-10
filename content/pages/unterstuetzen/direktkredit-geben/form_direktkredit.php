<?php
function redirect_fail(){
    header("Location: https://collegiumacademicum.de/");
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') redirect_fail();

$email_address = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if(!$email_address) redirect_fail();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

$treuhand_check = filter_input(INPUT_POST, 'treuhand_check', FILTER_VALIDATE_BOOLEAN);
if($treuhand_check){
    $treuhand_value = filter_input(INPUT_POST, 'treuhand_value', FILTER_VALIDATE_INT);
    if(!$treuhand_value) redirect_fail();
}

$sofort_check = filter_input(INPUT_POST, 'sofort_check', FILTER_VALIDATE_BOOLEAN);
if($sofort_check){
    $sofort_value = filter_input(INPUT_POST, 'sofort_value', FILTER_VALIDATE_INT);
    if(!$sofort_value) redirect_fail();
}

$gdpr_check = filter_input(INPUT_POST, 'gdpr', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
if(!$gdpr_check) redirect_fail();

require('../lib/mail.php');

date_default_timezone_set('Europe/Berlin');

$subject = "FORM: Direktkredit";
$sender = "Collegium Academicum e.V.";
$sender_email = "collegiumacademicum@posteo.de";
$to = "direktkredit@collegiumacademicum.de";
$message = "Eingegangen ist:\r\n"
         . "----------------\r\n"
         . "Name: " . $name . "\r\n"
         . "E-Mail: " . $email_address . "\r\n"
         . "Treuhand: " . ($treuhand_check ? "ja" : "nein") . "\r\n"
         . "Treuhand-Betrag: " . $treuhand_value . "\r\n"
         . "Sofort: " . ($sofort_check ? "ja" : "nein") . "\r\n"
         . "Sofort-Betrag: " . $sofort_value . "\r\n"
         . "Verarbeitungs-OK: " . ($gdpr_check ? "zustimmung" : "keine zustimmung") . "\r\n"
         . "----------------\r\n\r\n"
         . "Eingang-Daten: " . date("Y-m-d H:i:s") . "\r\n"
         . "\r\n\r\n";

send_mail_without_attachments($to, $subject, $message, $sender, $sender_email);

header("Location: https://collegiumacademicum.de/danke-direktkredit/"); // Browser umleiten
?>
