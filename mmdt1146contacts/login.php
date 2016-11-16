<?php require_once('../Connections/myConnection.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_myConnection, $myConnection);
$query_loginRecordSet = "SELECT * FROM loginaccess";
$loginRecordSet = mysql_query($query_loginRecordSet, $myConnection) or die(mysql_error());
$row_loginRecordSet = mysql_fetch_assoc($loginRecordSet);
$totalRows_loginRecordSet = mysql_num_rows($loginRecordSet);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['txtUsername'])) {
  $loginUsername=$_POST['txtUsername'];
  $password=$_POST['txtPassword'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "form.php";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_myConnection, $myConnection);
  
  $LoginRS__query=sprintf("SELECT username, password FROM loginaccess WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $myConnection) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>
<body background="PHP.jpg">
<font color="white"> 
<style> a:link { color: white;}
a:visited {color: Red;} </style>

<div style="background-color: #000000; width: 500px">

<?php
session_start();
if (isset($_POST['btnLogin'])) {
	//It mush have been a failed login attempt.
	echo "Invalid username / password";
} else {
	echo "Post request didn't work";
}
?>
<form ACTION="<?php echo $loginFormAction; ?>" id="form1" name="form1" METHOD="POST">
  	<p>&nbsp;</p>
    
  	<p>
    	<label for="txtUsername">&nbsp;Username:</label>
    	<input type="text" name="txtUsername" id="txtUsername">
  	</p>
  <p>
    	<label for="txtPassword">&nbsp;Password:</label>
    	<input type="password" name="txtPassword" id="txtPassword">
  	</p>
 	 <p>
    	&nbsp;<input type="submit" name="btnLogin" id="btnLogin" value="Login">
 	 </p>
</form>
<p><a href="forgotpassword.php">Forgot Password</a></p>
<br />
Version 1.00.05
</body>
</html>
<?php
mysql_free_result($loginRecordSet);
?>
