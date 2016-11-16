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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form")) {
  $updateSQL = sprintf("UPDATE myContacts SET firstName=%s, lastName=%s, addrLine1=%s, addrLine2=%s, city=%s, `state`=%s, country=%s, homePhone=%s, mobilePhone=%s, email=%s WHERE ID=%s",
                       GetSQLValueString($_POST['txtFirstName'], "text"),
                       GetSQLValueString($_POST['txtLastName'], "text"),
                       GetSQLValueString($_POST['txtAddrLine1'], "text"),
                       GetSQLValueString($_POST['txtAddrLine2'], "text"),
                       GetSQLValueString($_POST['txtCity'], "text"),
                       GetSQLValueString($_POST['txtState'], "text"),
                       GetSQLValueString($_POST['txtCountry'], "text"),
                       GetSQLValueString($_POST['txtHomePhone'], "text"),
                       GetSQLValueString($_POST['txtMobilePhone'], "text"),
                       GetSQLValueString($_POST['txtEmail'], "text"),
                       GetSQLValueString($_POST['txtID'], "int"));

  mysql_select_db($database_myConnection, $myConnection);
  $Result1 = mysql_query($updateSQL, $myConnection) or die(mysql_error());

  $updateGoTo = "edit.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_rsEdit = "-1";
if (isset($_GET['ID'])) {
  $colname_rsEdit = $_GET['ID'];
}
mysql_select_db($database_myConnection, $myConnection);
$query_rsEdit = sprintf("SELECT * FROM myContacts WHERE ID = %s", GetSQLValueString($colname_rsEdit, "int"));
$rsEdit = mysql_query($query_rsEdit, $myConnection) or die(mysql_error());
$row_rsEdit = mysql_fetch_assoc($rsEdit);
$totalRows_rsEdit = mysql_num_rows($rsEdit);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Customer</title>
</head>

<body>
<body background="PHP.jpg">
<font color="white"> 
<style> a:link { color: white;}
a:visited {color: Red;} </style>

<div style="background-color: #000000; width: 500px">

<form method="POST" action="<?php echo $editFormAction; ?>" name="form">
  <p>Edit Customer</p>
   <input name="txtID" type="text" id="txtID" value="<?php echo $row_rsEdit['ID']; ?>" readonly>
  <label for="txtID">Function </label>
    <br /><br />
  <input name="txtFirstName" type="text" id="txtFirstName" value="<?php echo $row_rsEdit['firstName']; ?>">
  <label for="txtFirstName">First Name </label>
    <br /><br />
    
     <input name="txtLastName" type="text" id="txtLastName" value="<?php echo $row_rsEdit['lastName']; ?>">
  <label for="txtLastName">Last Name </label>
    <br /><br />
    
     <input name="txtAddrLine1" type="text" id="txtAddrLine1" value="<?php echo $row_rsEdit['addrLine1']; ?>">
  <label for="txtAddrLine1">Address Line 1 </label>
    <br /><br />
    
     <input name="txtAddrLine2" type="text" id="txtAddrLine2" value="<?php echo $row_rsEdit['addrLine2']; ?>">
  <label for="txtAddrLine2">Address Line 2 </label>
    <br /><br />
    
     <input name="txtCity" type="text" id="txtCity" value="<?php echo $row_rsEdit['city']; ?>">
  <label for="txtCity">City </label>
    <br /><br />
    
     <input name="txtState" type="text" id="txtState" value="<?php echo $row_rsEdit['state']; ?>">
  <label for="txtState">State </label>
    <br /><br />
    
     <input name="txtCountry" type="text" id="txtCountry" value="<?php echo $row_rsEdit['country']; ?>">
  <label for="txtCountry">Country </label>
    <br /><br />
    
     <input name="txtHomePhone" type="text" id="txtHomePhone" value="<?php echo $row_rsEdit['homePhone']; ?>">
  <label for="txtHomePhone">Home Phone </label>
    <br /><br />
    
     <input name="txtMobilePhone" type="text" id="txtMobilePhone" value="<?php echo $row_rsEdit['mobilePhone']; ?>">
  <label for="txtMobilePhone">Mobile Phone </label>
    <br /><br />
    
     <input name="txtEmail" type="text" id="txtEmail" value="<?php echo $row_rsEdit['email']; ?>">
  <label for="txtEmail">Email </label>
  <p>
    <input type="submit" name="submit" id="submit" value="Update Record">
    <br />
    
  </p>
  <p><a href="form.php">Display Customer List</a></p>
  <p>&nbsp;</p>
  <input type="hidden" name="MM_insert" value="form">
  <input type="hidden" name="MM_update" value="form">
  </font>
</form>
</body>
</html>
<?php
mysql_free_result($rsEdit);
?>
