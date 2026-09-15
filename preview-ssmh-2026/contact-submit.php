<?php
declare(strict_types=1);
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: ./#contact'); exit; }
if (!hash_equals($_SESSION['csrf'] ?? '', (string)($_POST['csrf'] ?? ''))) { header('Location: ./?error=csrf#contact'); exit; }
if (!empty($_POST['website'])) { header('Location: ./?sent=1#contact'); exit; }

$last = (int)($_SESSION['last_enquiry'] ?? 0);
if (time() - $last < 30) { header('Location: ./?error=rate#contact'); exit; }

$name = trim((string)($_POST['name'] ?? ''));
$phone = preg_replace('/[^0-9+ -]/', '', (string)($_POST['phone'] ?? ''));
$service = trim((string)($_POST['service'] ?? 'General enquiry'));
$message = trim((string)($_POST['message'] ?? ''));
if ($name === '' || strlen($name) > 80 || strlen($phone) < 10 || strlen($phone) > 15 || strlen($message) > 800) { header('Location: ./?error=validation#contact'); exit; }

$body = "Website enquiry\n\nName: {$name}\nPhone: {$phone}\nService: {$service}\nMessage: {$message}\n";
$headers = [
    'From: Shri Sai Hospital Website <website@shrisaihospitals.co.in>',
    'Content-Type: text/plain; charset=UTF-8',
];
$sent = mail('ssmhbhandara@gmail.com', 'New website enquiry', $body, implode("\r\n", $headers));
if ($sent) { $_SESSION['last_enquiry'] = time(); unset($_SESSION['csrf']); header('Location: ./?sent=1#contact'); } else { header('Location: ./?error=mail#contact'); }
exit;
