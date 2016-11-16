<?php session_start() ; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thank You</title>
</head>

<body>
Thank you for submitting your order. <br /> 
Here is a summary of the information that you provided: <br /> <br /> 

<?php 
print(nl2br($_SESSION['body']));
unset($_SESSION);
session_destroy();
?>

<br /> <br />
A confirmation email has been set to the email adress you have provided. <br />
Someone will be in contact with you shortly.
</body>
</html>