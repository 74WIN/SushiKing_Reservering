<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//if(isset($_POST['submit'])) {
// Load Composer's autoloader
require 'vendor/autoload.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   // Enable SMTP authentication
    $mail->Username = 'testsubject214274';                     // SMTP username
    $mail->Password = 'cmgt12345678';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('no-reply@sushiking.org', 'Sushi King');
    $mail->addAddress($_POST['updEmail'], $_POST['updNaam']);     // Add a recipient
    //$mail->addAddress('justinforwinxd@gmail.com');
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    /*
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    */

    $body = '<p>Bedankt voor uw reservering bij Sushi King.</br> 
                Om ' . $_POST['updTijd'] . ' op ' . $_POST['updDatum'] . ' onder de naam ' . $_POST['updNaam'] . '.</br> Voor vragen kunt u telefonisch contact opnemen op 
                0180-418 414. </br>Adres: </br> van Prinstererweg 19-21 <br> Ridderkerk</p>';

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Reservering bevestiging';
    $mail->Body = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    header("Location: bevestiging.php");
} catch (Exception $e) {
    echo "Mail Error. Uw reservering kon niet naar uw mail verstuurd worden: {$mail->ErrorInfo}";
}
/* This will give an error. Note the output
* above, which is before the header() call */

//header('bevestiging.php');
//exit;
//}

