<?php

require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "dtcpackers.org";

$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "dtc@dtcpackers.org";
$mail->Password = "india$1234";

$mail->From = "dtc@dtcpackers.org";
$mail->FromName = "Test from Info";
$mail->AddAddress("coolgovind.tiwari@gmail.com");
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = "Test message from server";
$mail->Body = "Test Mail<b>in bold!</b>";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "Message has been sent";

?>