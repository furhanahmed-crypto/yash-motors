<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'php-mailer/PHPMailer.php';
require 'php-mailer/SMTP.php';
require 'php-mailer/Exception.php';
require_once __DIR__ . '/config/app.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . site_url('contact.php'));
    exit;
}

$name    = isset($_POST['name']) ? trim($_POST['name']) : '';
$phone   = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$email   = isset($_POST['email']) ? trim($_POST['email']) : '';
$reason  = isset($_POST['reason']) ? trim($_POST['reason']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if (empty($name) || empty($phone) || empty($reason) || empty($message)) {
    $error = urlencode('Please fill in all required fields.');
    header('Location: ' . site_url('contact.php?error=' . $error));
    exit;
}

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host       = 'smtp.gmail.com';
    $mail->Port       = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Username   = 'yashcomputer971@gmail.com';
    $mail->Password   = 'frun xkag sgzt yoxw'; // Gmail App Password

    // Recipients
    $mail->setFrom('yashcomputer971@gmail.com', 'Yash Motors Website');
    $mail->addAddress('f4rh4n6710@gmail.com');
    $mail->addAddress('yashcomputer971@gmail.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Enquiry: ' . $reason;
    
    $body  = '<h2>New Contact Form Submission</h2>';
    $body .= '<p>You have received a new enquiry from the Yash Motors website contact form.</p>';
    $body .= '<table border="0" cellpadding="6" cellspacing="0" style="border-collapse: collapse; font-family: sans-serif; font-size: 14px;">';
    $body .= '<tr><td style="font-weight: bold; width: 120px; border-bottom: 1px solid #eee; padding: 8px 0;">Name:</td><td style="border-bottom: 1px solid #eee; padding: 8px 0;">' . htmlspecialchars($name) . '</td></tr>';
    $body .= '<tr><td style="font-weight: bold; border-bottom: 1px solid #eee; padding: 8px 0;">Phone:</td><td style="border-bottom: 1px solid #eee; padding: 8px 0;">' . htmlspecialchars($phone) . '</td></tr>';
    $body .= '<tr><td style="font-weight: bold; border-bottom: 1px solid #eee; padding: 8px 0;">Email:</td><td style="border-bottom: 1px solid #eee; padding: 8px 0;">' . htmlspecialchars(!empty($email) ? $email : 'Not provided') . '</td></tr>';
    $body .= '<tr><td style="font-weight: bold; border-bottom: 1px solid #eee; padding: 8px 0;">Reason:</td><td style="border-bottom: 1px solid #eee; padding: 8px 0;">' . htmlspecialchars($reason) . '</td></tr>';
    $body .= '<tr><td style="font-weight: bold; valign: top; padding: 8px 0;">Message:</td><td style="padding: 8px 0;">' . nl2br(htmlspecialchars($message)) . '</td></tr>';
    $body .= '</table>';

    $mail->Body = $body;

    $mail->send();
    header('Location: ' . site_url('contact.php?success=1'));
    exit;
} catch (Exception $e) {
    $error = urlencode('Failed to send email. Mailer Error: ' . $mail->ErrorInfo);
    header('Location: ' . site_url('contact.php?error=' . $error));
    exit;
}
