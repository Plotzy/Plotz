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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO myContacts (firstName, lastName, addrLine1, addrLine2, city, `state`, country, homePhone, mobilePhone, email) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['txtFirstName'], "text"),
                       GetSQLValueString($_POST['txtLastName'], "text"),
                       GetSQLValueString($_POST['txtAddrLine1'], "text"),
                       GetSQLValueString($_POST['txtAddrLine2'], "text"),
                       GetSQLValueString($_POST['txtCity'], "text"),
                       GetSQLValueString($_POST['txtState'], "text"),
                       GetSQLValueString($_POST['txtCountry'], "text"),
                       GetSQLValueString($_POST['txtHomePhone'], "text"),
                       GetSQLValueString($_POST['txtMobilePhone'], "text"),
                       GetSQLValueString($_POST['txtEmail'], "text"));

  mysql_select_db($database_myConnection, $myConnection);
  $Result1 = mysql_query($insertSQL, $myConnection) or die(mysql_error());

  $insertGoTo = "add.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Customers</title>
</head>

<body>
<body background="PHP.jpg">
<style> a:link { color: white;}
a:visited {color: Red;} </style>
<font color="white"> 
<div style="background-color: #000000; width: 500px">
<form method="POST" action="<?php echo $editFormAction; ?>" name="form">
  <p>Add Customers</p>
  <p>
    <input type="text" name="txtFirstName" id="txtFirstName">
    <label for="txtFirstName">First Name </label>
    <br /><br />
    
     <input type="text" name="txtLastName" id="txtLastName">
    <label for="txtLastName">Last Name </label>
    <br /><br />
    
     <input type="text" name="txtAddrLine1" id="txtAddrLine1">
    <label for="txtAddrLine1">Address Line 1 </label>
    <br /><br />
    
     <input type="text" name="txtAddrLine2" id="txtAddrLine2">
    <label for="txtAddrLine2">Address Line 2 </label>
    <br /><br />
    
     <input type="text" name="txtCity" id="txtCity">
    <label for="txtCity">City </label>
    <br /><br />
    
     <input type="text" name="txtState" id="txtState">
    <label for="txtState">State </label>
    <br /><br />
    
     <input type="text" name="txtCountry" id="txtCountry">
    <label for="txtCountry">Country </label>
    <br /><br />
    
     <input type="text" name="txtHomePhone" id="txtHomePhone">
    <label for="txtHomePhone">Home Phone </label>
    <br /><br />
    
     <input type="text" name="txtMobilePhone" id="txtMobilePhone">
    <label for="txtMobilePhone">Mobile Phone </label>
    <br /><br />
    
     <input type="text" name="txtEmail" id="txtEmail">
    <label for="txtEmail">Email </label>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Insert Record">
    <br />
    
  </p>
  <p><a href="form.php">Display Customer List</a></p>
  <p>&nbsp;</p>
  <input type="hidden" name="MM_insert" value="form">
</font>
</form>
</body>
</html>