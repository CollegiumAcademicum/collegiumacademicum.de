<?php
function redirect_fail(){
    header("Location: https://collegiumacademicum.de/");
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') redirect_fail();

$email_address = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if(!$email_address) redirect_fail();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

$amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_INT);

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
         . "Betrag: " . $amount . "\r\n"
         . "Verarbeitungs-OK: " . ($gdpr_check ? "zustimmung" : "keine zustimmung") . "\r\n"
         . "----------------\r\n\r\n"
         . "Eingang-Daten: " . date("Y-m-d H:i:s") . "\r\n"
         . "\r\n\r\n";

send_mail_without_attachments($to, $subject, $message, $sender, $sender_email);

header("Location: https://collegiumacademicum.de/danke-direktkredit/"); // Browser umleiten
?>
