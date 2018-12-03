<?php
function redirect_fail(){
    header("Location: https://collegiumacademicum.de/");
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') redirect_fail();

$receiver_email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
if(!$receiver_email) redirect_fail();

require('mail.php');

$subject = "Collegium Academicum: Informationspaket";
$sender = "Collegium Academicum e.V.";
$sender_email = "collegiumacademicum@posteo.de";
$reply_email = "kontakt@collegiumacademicum.de";

$files = array("../docs/ca_broschuere.pdf","../docs/ca_flyer_direktkredite.pdf","../docs/ca_finanzierung.pdf");

$infopackage_text = file_get_contents("infopackage.txt");

send_mail_with_attachments($receiver_email, $subject, $infopackage_text, $sender, $sender_email, $reply_email, $files);

header("Location: https://collegiumacademicum.de/danke/"); // Browser umleiten
?>
