<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$from = "formget.dev@gmail.com"; //sender's username
$pwd = "formgetmb"; //sender's password
//---------------------------SEND eMail------------------------------------------------
if (isset($_POST['mailto'])) {
try {
$mail = new PHPMailer(true); //New instance,exceptions enabled with true
$to = $_POST['mailto'];
$subject = $_POST['subject'];
$id = rand(111, 999);
$id.=rand(111, 999);
$body = "This is the fixed message of test email to get notify when it is read.....";
//Below is the image tag with src to our tracknoline.php script page.........
$body .= "<img border='0' src='http://blogapp.loc/trackonline.php?email=$to&id=$id&subject=$subject' width='1' height='1' alt='image for email' >";
$mail->IsSMTP(); // tell the class to use SMTP
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Port = 587; // set the SMTP server port
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->Username = "showsuite.com@gmail.com"; // SMTP server username
$mail->Password = "zbellwoogpqjobjt"; // SMTP server password
$mail->From = "nauman.y@showsuite.com";
$mail->FromName = "TESTUSER";
$mail->AddAddress($to);
$mail->Subject = $subject;
$mail->AltBody = "Please return read receipt to me."; // optional, comment out and test
$mail->WordWrap = 80; // set word wrap
$mail->MsgHTML($body);
$mail->IsHTML(true); // send as HTML
$mail->Send();

//return foll
echo '<input id="id1" name="id" type="hidden" value="' . $id . '">'
. '<input id="email1" name="email" type="hidden" value="' . $to . '">'
. '<label id="label1">Mail sent to <b>' . $to . '<b></label>';
} catch (phpmailerException $e) {
echo $e->errorMessage();
}
}
////--------------------------READ email.txt------------------------------------------

if (!empty($_POST['id'])) {

$id = $_POST['id'];
$to = $_POST['email'];
$checkid = "Id:" . $id;
$fh = fopen("email.txt", "r");
//$fh =fopen("img/file.txt","r");
$read = false; // init as false
while (($buffer = fgets($fh)) !== false) {
if (strpos($buffer, $checkid) !== false) {
$a = explode("%",$buffer);
$read = true;
break; // Once you find the string, you should break out the loop.
}
}
fclose($fh);

if ($read == true) {
//$string = $email . " seen the mail on subject: '" . $sub . "' from ip: " . $ipAddress . " on " . $date . " and Id:" . $id . "n";
echo "<img id='closed-image' src='img/envelope-open.png' alt='email not opened'/><br><p id='closed-para'>"
. "Mail sent from <b>" . $from . "</b><br> To <b>" . $to
. "</b><br>has been<div id='color-read'> opened on <b>".$a[1]."</b></div></p>"
. "<input id='id1' name='id' type='hidden' value='" . $id . "'>"; //appended hidden input to keep previous data on the page.

} else {
echo "<img id='closed-image' src='img/envelope-closed.png' alt='email not opened'/><br><p id='closed-para'>"
. "Mail sent from <b>" . $from . "</b><br> To <b>" . $to
. "</b><br><div id='color-not-read'> Not yet opened......</div></p>"
. "<input id='id1' name='id' type='hidden' value='" . $id . "'>"; //appended hidden input to keep previous data on the page.
}
}