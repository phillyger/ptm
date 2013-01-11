<?php
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
	$name = stripslashes(strip_tags($_POST['name']));
} else {$name = 'No name entered';}
if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {
	$email = stripslashes(strip_tags($_POST['email']));
} else {$email = 'No email entered';}
if ((isset($_POST['subject'])) && (strlen(trim($_POST['subject'])) > 0)) {
	$subject = stripslashes(strip_tags($_POST['subject']));
} else {$subject = 'No subject entered';}
if ((isset($_POST['message'])) && (strlen(trim($_POST['message'])) > 0)) {
  $message= stripslashes(strip_tags($_POST['message']));
} else {$message = 'No message entered';}
ob_start();
?>
<html>
<head>
<style type="text/css">
</style>
</head>
<body>
<table width="550" border="1" cellspacing="2" cellpadding="2">
  <tr bgcolor="#eeffee">
    <td>Name</td>
    <td><?php echo $name;?></td>
  </tr>
  <tr bgcolor="#eeeeff">
    <td>Email</td>
    <td><?php echo $email;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>Subject</td>
    <td><?php echo $subject;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>Message</td>
    <td><?php echo $message;?></td>
  </tr>
</table>
</body>
</html>
<?php
$body = ob_get_contents();


// example on using PHPMailer with GMAIL

include("class.phpmailer.php");
#include("class.smtp.php"); // note, this is optional - gets called from main class if not already loaded

$mail             = new PHPMailer();

// $body             = file_get_contents('contents.html');

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port

$mail->Username   = "phillyger@gmail.com";  // GMAIL username
$mail->Password   = "carisma22";            // GMAIL password

$mail->From       = $email;
$mail->FromName   = "Webmaster";
$mail->Subject    = "This is the subject";
$mail->AltBody    = "This is the body when user views in plain text format"; //Text Body
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);
$mail->AddAddress("gosulliv@verizon.net","Ger O'Sullivan");
$mail->AddReplyTo("gosulliv@verizon.net","Ger O'Sullivan");

// $mail->AddAttachment("/path/to/file.zip");             // attachment
// $mail->AddAttachment("/path/to/image.jpg", "new.jpg"); // attachment



$mail->IsHTML(true); // send as HTML



if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent";
}

?>