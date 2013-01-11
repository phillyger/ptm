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

include 'sendgrid-php/SendGrid_loader.php';

// Get email address
require_once 'config.php';

$sgusername = 'panoramatoastmasters';
$sgpassword = 'Watermark4';
// $sgusername = 'brilliantage';
// $sgpassword = 'ZAUgngXF';
$sendgrid = new SendGrid($sgusername, $sgpassword);
date_default_timezone_set('America/New_York');

// Ensures no one loads page and does simple spam check
if( isset($_POST['name']) && empty($_POST['spam-check']) ) {
  
  // Declare our $errors variable we will be using later to store any errors
  $error = '';
  

  // Now check to see if there are any errors 
  if( !$error ) {
    $mail = new SendGrid\Mail();
    $mail->addTo($your_email_address)->
           setFrom($email)->
           setSubject($subject)->
           setText($message)->
           setHtml($message);
    
    // No errors, send mail using conditional to ensure it was sent
    //mail($your_email_address, $subject, $message, "From: $input_email")
    if($sendgrid->smtp->send($mail)) {
      echo '<p class="success">Your email has been sent!</p>';
    } else {
      echo '<p class="error">There was a problem sending your email!</p>';
    }
    
  } else {
    
    // Errors were found, output all errors to the user
    $response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
    $response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
    $response .= (isset($error['message'])) ? $error['message'] . "<br /> \n" : null;

    echo "<p class='error'>$response</p>";
    
  }
  
} else {

  die('Direct access to this page is not allowed.');

}
?>