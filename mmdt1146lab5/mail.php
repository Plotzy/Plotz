<?php
//Program: Mail sending script
//Author : Jonathan Plotz
//Date: 26 Sep 2016

//Session starts must be the first code in the script
session_start();

//Turn on the maximum error reporting.
error_reporting(E_ALL);

//Re-captcha test
$userIP = $_SERVER["REMOTE_ADDR"];
$recaptchaResponse = $_POST['g-recaptcha-response'];
$secretKey = "6LfLKwgUAAAAAL8bxQfEbSwX0AWracLYHa7ohHnh";
$request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIP}");

if(!strstr($request, "true")) {
	// What happens when the catpcha was used incorrectly
	
	header("Location: badcode.htm");
	exit;
}
//This line may have fixed the intermittant sending problem.
//It sets the return path in the email header.
ini_set('sendmail_from', 'orders@jonathanplotz.info');

$txtEmail = $_POST ['txtEmail'];
if(empty($txtEmail))
{
	//This has to be a relative URL for session ID appending to work.
	header("Location: error.php");
	exit;
}

// Had problems if various form controls are not filled in, then the variables
// may not exist. This is solved by checking for the existance of everything and 
// setting everything to a known state.

if(!empty($_POST['txtFullName'])){
	$txtFullName = $_POST['txtFullName'];
} else {
	$txtFullName="null";
}

if(!empty($_POST['txtPhone'])){
	$txtPhone = $_POST['txtPhone'];
} else {
	$txtPhone="It's not working jon, get it right! Second Attempt";
}

if(!empty($_POST['txtComments'])){
	$txtComments = $_POST['txtComments'];
} else {
	$txtComments ="It's not working jon, get it right! Third Attempt";
}

$price = 40.00;

if(!empty($_POST['chkPriorityShipping'])) {
	$chkPriorityShipping = "Hey this is Priority shipping";
	$price += 5.99; //$price = $price +5.99
} else {
	$chkPriorityShipping = "Hey this is Standard Shipping";
}

if(!empty($_POST['chkGiftReceipt'])) {
	$chkGiftReceipt = "Hey this is Gift Receipt requested";
	$price += 0.99; //$price = $price +5.99
} else {
	$chkGiftReceipt = "Hey this is Standard Shipping";
}

$body = 
$txtFullName .      " - Your full name.
" . $txtEmail .      " - Email address we can contact you at.
" . $txtPhone  .     " - Your telephone number we can contact you at.

" . $_POST['javScript'] .      " - Javascript Color.
" . $_POST['PHP'] .    " - PHP Color.
" . $_POST['HTML/CSS'] .    " - HTML/CSS Color.
" . $_POST['txtPrint'] .        " - Is the name engraved.

" . $chkPriorityShipping . "
" . $chkGiftReceipt . "
Your order price is : $" . $price . "

" . $txtComments .     " - Additional comments for our future surveys.";

$body = strip_tags($body);
$_SESSION['body'] = $body;

//compose a confirmation message.
$bodyconfirm = "Thank you for submitting an order.
Here is a summary of the information that you provided:

"
. $body .
"

Someone will be in contact with you shortly.

Plotz Books Inc.
585 Main Street
P.O. Box 12345
Lake Lillian, MN 56253
Phone: 320-224-5555";
//End of the confirmation message.

//send the email with the date to the company email account.

mail('orders@jonathanplotz.info', '*** Order from website Plotz Books Inc. ***' , $body, 
     "From: \"$txtFullName\" <$txtEmail>\r\n" .
	 "Reply-To: \"$txtFullName\" <$txtEmail>\r\n" .
	 "X-Mailer:PHP/" . phpversion());
	 
	 //send the confirmation email to the customer.

mail($txtEmail, 'Cofirmation email - Plotz Book Inc.' , $bodyconfirm, 
     "From: \"Plotz Books Inc.\" <oerders@jonathanplotz.info>\r\n" .
	 "Reply-To: \"Plotz Books Inc.\" <orders@jonathanplotz.info>\r\n" .
	 "X-Mailer:PHP/" . phpversion());
	 
	 
	 
	 //This has to be a relative URL for session ID appending to work.
	 //Remember to send the session ID with the URL.
	 header("Location: thanx.php?" . SID);
	 ?>

