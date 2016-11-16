<?php require_once('../Connections/myConnection.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "login.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
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
$query_rsDelete = "SELECT * FROM myContacts";
$rsDelete = mysql_query($query_rsDelete, $myConnection) or die(mysql_error());
$row_rsDelete = mysql_fetch_assoc($rsDelete);
$totalRows_rsDelete = mysql_num_rows($rsDelete);
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Customer</title>
</head>

<body>
  <p>Delete Customer
</p>
  <body background="PHP.jpg">
<font color="white"> 
<style> a:link { color: white;}
a:visited {color: Red;} </style>

<div style="background-color: #000000; width: 500px">

<form method="POST" action="delete.php" name="form">
  <p>Delete Customer</p>
  <input name="txtID" type="text" id="txtID" value="<?php echo $row_rsDelete['ID']; ?>" readonly>
  <label for="txtID">Function </label>
    <br /><br />
  <input name="txtFirstName" type="text" id="txtFirstName" value="<?php echo $row_rsDelete['firstName']; ?>" readonly>
  <label for="txtFirstName">First Name </label>
    <br /><br />
    
  <input name="txtLastName" type="text" id="txtLastName" value="<?php echo $row_rsDelete['lastName']; ?>" readonly>
  <label for="txtLastName">Last Name </label>
    <br /><br />
    
  <input name="txtAddrLine1" type="text" id="txtAddrLine1" value="<?php echo $row_rsDelete['addrLine1']; ?>" readonly>
  <label for="txtAddrLine1">Address Line 1 </label>
    <br /><br />
    
  <input name="txtAddrLine2" type="text" id="txtAddrLine2" value="<?php echo $row_rsDelete['addrLine2']; ?>" readonly>
  <label for="txtAddrLine2">Address Line 2 </label>
    <br /><br />
    
  <input name="txtCity" type="text" id="txtCity" value="<?php echo $row_rsDelete['city']; ?>" readonly>
  <label for="txtCity">City </label>
    <br /><br />
    
  <input name="txtState" type="text" id="txtState" value="<?php echo $row_rsDelete['state']; ?>" readonly>
  <label for="txtState">State </label>
    <br /><br />
    
  <input name="txtCountry" type="text" id="txtCountry" value="<?php echo $row_rsDelete['country']; ?>" readonly>
  <label for="txtCountry">Country </label>
    <br /><br />
    
  <input name="txtHomePhone" type="text" id="txtHomePhone" value="<?php echo $row_rsDelete['homePhone']; ?>" readonly>
  <label for="txtHomePhone">Home Phone </label>
    <br /><br />
    
  <input name="txtMobilePhone" type="text" id="txtMobilePhone" value="<?php echo $row_rsDelete['mobilePhone']; ?>" readonly>
  <label for="txtMobilePhone">Mobile Phone </label>
    <br /><br />
    
  <input name="txtEmail" type="text" id="txtEmail" value="<?php echo $row_rsDelete['email']; ?>" readonly>
  <label for="txtEmail">Email </label>
  <p>
  </p>
  <p>Are you sure you want to delete this Customer?  &nbsp;&nbsp;<a href="delete.php?ID=&OK=Yes"> Yes</a>&nbsp;&nbsp; <a href="form.php">No</a><br />
    
  </p>
  <p><a href="form.php">Display Customer List</a></p>
</form>
</body>
</html>
<?php
mysql_free_result($rsDelete);
?>
