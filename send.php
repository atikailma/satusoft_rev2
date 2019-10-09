<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
//Load composer's autoloader
//require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    //$mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'satu1soft@gmail.com';                 // SMTP username
    $mail->Password = 'mmksalkkqoihpnzk';                  // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS
   $mail->SMTPAutoTLS = false;
    $mail->Port = 587;                                    // TCP port to connect to

    $name = $_POST['name'];
    $email = $_POST['email'];
    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('satu1soft@gmail.com','satusoft');     // Add a recipient
   // $mail->addAddress('address@example.com');               // Name is optional
   //$mail->addReplyTo('address@example.com', 'example');
   // $mail->addCC('cc@example.com');
  //  $mail->addBCC('bcc@example.com');
  $subject = $_POST['subject'];
  $subject2 = $subject." from ".$name. " from email " .$email;
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject2;
    $mail->Body = $_POST['message'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
      echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
<h4><i class="icon fa fa-check"></i>Message has been sent</h4>
</div>';
} catch (Exception $e) {
    echo 'Message could not be sent.';
   
}