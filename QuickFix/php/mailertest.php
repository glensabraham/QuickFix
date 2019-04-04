<?php
require 'PHPMailerAutoload.php';
require 'credential.php';
include_once "PHPMailer/PHPMailer.php";

$mail = new PHPMailer;
$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host = 'danwin1210.me';
$mail->SMTPAuth = true;
$mail->Username = 'user@danwin1210.me';
$mail->Password = '';
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->setFrom( 'Security');
$mail->addAddress('psword666@gmail.com');
$mail->Subject = "Please verify email!";
$mail->isHTML(true);
$mail->Body = "Your email verification:Please click this link to activate your account:
http://www.yourwebsite.com/verify.php?email=email&verified='.1 ";

if ($mail->send())
{


  echo "success";

}
else

    echo 'Error';

?>
