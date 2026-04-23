<?php

function log_form_event(string $event, array $context = []): void
{
    $line = '[direktkredit-form] ' . $event;
    if (!empty($context)) {
        $line .= ' | ' . json_encode($context, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    error_log($line);
}

function redirect_fail(string $reason = 'unknown'): void
{
    log_form_event('redirect_fail', ['reason' => $reason]);
    header('Location: https://collegiumacademicum.de/');
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    redirect_fail('not_post');
}

$email_address = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if (!$email_address) {
    redirect_fail('invalid_email');
}

// FILTER_SANITIZE_STRING is deprecated; trim + strip_tags instead
$name = trim((string)filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW));
$name = strip_tags($name);

$amount = trim((string)filter_input(INPUT_POST, 'amount', FILTER_UNSAFE_RAW));
$spam_protection = filter_input(INPUT_POST, 'spam', FILTER_VALIDATE_INT);

$gdpr_check = filter_input(INPUT_POST, 'gdpr', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
if ($gdpr_check !== true) {
    redirect_fail('gdpr_not_accepted');
}

// Safe absolute include path
$mail_lib = __DIR__ . '/../lib/mail.php';
if (!is_readable($mail_lib)) {
    log_form_event('mail_lib_not_readable', ['path' => $mail_lib]);
    redirect_fail('mail_lib_missing');
}
require_once $mail_lib;

if (!function_exists('send_mail_without_attachments')) {
    log_form_event('mail_function_missing', ['path' => $mail_lib]);
    redirect_fail('mail_function_missing');
}

date_default_timezone_set('Europe/Berlin');

$subject = 'FORM: Direktkredit';
$sender = 'Collegium Academicum e.V.';
$sender_email = 'collegiumacademicum@posteo.de';
$to = 'direktkredit@collegiumacademicum.de';

$message = "Eingegangen ist:\r\n"
         . "----------------\r\n"
         . "Name: " . $name . "\r\n"
         . "E-Mail: " . $email_address . "\r\n"
         . "Betrag: " . $amount . "\r\n"
         . "Verarbeitungs-OK: " . ($gdpr_check ? 'zustimmung' : 'keine zustimmung') . "\r\n"
         . "----------------\r\n\r\n"
         . "Eingang-Daten: " . date('Y-m-d H:i:s') . "\r\n\r\n";

if ($spam_protection === 8) {
    try {
        $result = send_mail_without_attachments($to, $subject, $message, $sender, $sender_email);
        log_form_event('mail_send_called', [
            'result' => $result,
            'to' => $to,
            'email' => $email_address,
        ]);
        header('Location: https://collegiumacademicum.de/danke-direktkredit/');
        exit;
    } catch (\Throwable $e) {
        log_form_event('mail_send_exception', [
            'message' => $e->getMessage(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
        ]);
        redirect_fail('mail_send_exception');
    }
} else {
    log_form_event('spam_check_failed', ['spam_value' => $spam_protection]);

    $fallback = 'https://collegiumacademicum.de/unterstuetzen/direktkredit-geben/';
    $referer = $_SERVER['HTTP_REFERER'] ?? $fallback;
    header('Location: ' . $referer);
    exit;
}
