<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'sushiking/Php/PHPMailer/Exception.php';
require 'sushiking/Php/PHPMailer/PHPMailer.php';
require 'sushiking/Php/PHPMailer/SMTP.php';

$body = file_get_contents('./templates/contact-mail.html');
$body = str_replace('{firstName}', $_POST['firstName'], $body);
$body = str_replace('{message}', $_POST['message'], $body);

$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'testsubject214274@gmail.com';
    $mail->Password = 'cmgt12345678';
    $mail->SMTPSecure = PHPmailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('testsubject214274@gmail.com');
    $mail->addAddress($_POST['email'], $_POST['firstName'] . ' ' . $_POST ['lastName']);
    $mail->addReplyTo('testsubject214274@gmail.com');
    $mail->addCC('testsubject214274@gmail.com');
    $mail->addBCC('testsubject214274@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Reservering Sushi King';
    $mail->Body = 'Bedankt voor het reserveren';
    $mail->AltBody = 'Zonder';

    $mail->send();
    echo'Bericht is verzonden';
} catch (Exception $exception) {
    echo "Error" . $mail->ErrorInfo;
}
?>
