<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once('PHPMailer/PHPMailer.php');
require_once('PHPMailer/SMTP.php');
require_once('PHPMailer/Exception.php');

$mail = new PHPMailer();
$mail -> isSMTP();
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'ssl';
$mail ->Host = 'smtp.gmail.com';
$mail ->Port = '465';
//email settings
$mail ->isHTML();
$mail ->Username = 'testsubject214274@gmail.com';
$mail ->Password = 'cmgt12345678';
$mail ->Setfrom = 'no-reply@sushiking.org';
$mail ->Subject = 'Hewwo';
$mail ->Body = 'Dit is een test';
$mail ->AddAddress = 'justinforwinxd@gmail.com';

$mail ->Send();
?>
