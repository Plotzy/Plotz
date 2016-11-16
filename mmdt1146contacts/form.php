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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 1;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_myConnection, $myConnection);
$query_Recordset1 = "SELECT * FROM myContacts";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $myConnection) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$maxRows_Recordset1 = 25;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_myConnection, $myConnection);
//$query_Recordset1 = "SELECT ID, firstName, lastName, city, `state`, country FROM myContacts ORDER BY lastName ASC";
$query_Recordset1 = "SELECT ID, firstName, lastName, city, `state`, country FROM myContacts WHERE lastname LIKE 'S%'
 ORDER BY lastName ASC";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $myConnection) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Customer List</title>
</head>

<body>
<body background="PHP.jpg">
<font color="white"> 
<style> a:link { color: white;}
a:visited {color: Red;} </style>
<div style="background-color: #000000; width: 800px">
<p>Customer Contact List</p>
<a href="form.php?alpha=A"> A </a> &nbsp;
<a href="form.php?alpha=B"> B </a> &nbsp;
<a href="form.php?alpha=C"> C </a> &nbsp;
<a href="form.php?alpha=D"> D </a> &nbsp;
<a href="form.php?alpha=E"> E </a> &nbsp;
<a href="form.php?alpha=F"> F </a> &nbsp;
<a href="form.php?alpha=G"> G </a> &nbsp;
<a href="form.php?alpha=H"> H </a> &nbsp;
<a href="form.php?alpha=I"> I </a> &nbsp;
<a href="form.php?alpha=J"> J </a> &nbsp;
<a href="form.php?alpha=K"> K </a> &nbsp;
<a href="form.php?alpha=L"> L </a> &nbsp;
<a href="form.php?alpha=M"> M </a> &nbsp;
<a href="form.php?alpha=N"> N </a> &nbsp;
<a href="form.php?alpha=O"> O </a> &nbsp;
<a href="form.php?alpha=P"> P </a> &nbsp;
<a href="form.php?alpha=Q"> Q </a> &nbsp;
<a href="form.php?alpha=R"> R </a> &nbsp;
<a href="form.php?alpha=S"> S </a> &nbsp;
<a href="form.php?alpha=T"> T </a> &nbsp;
<a href="form.php?alpha=U"> U </a> &nbsp;
<a href="form.php?alpha=V"> V </a> &nbsp;
<a href="form.php?alpha=W"> W </a> &nbsp;
<a href="form.php?alpha=X"> X </a> &nbsp;
<a href="form.php?alpha=Y"> Y </a> &nbsp;
<a href="form.php?alpha=Z"> Z </a> &nbsp;
<table width="750" height="50" border="1" cellspacing="0" cellpadding="0">
  <tr>
	<td> Function  </td> <br />
    <td> First Name </td>
    <td> Last Name </td>
    <td> City </td>
    <td> State </td>
    <td> Country </td>
</tr>
<?php do { ?>

      <tr>
       <td> <a href="delete.php?ID=<?php echo $row_Recordset1['ID']; ?>">Delete </a> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="edit.php?ID=<?php echo $row_Recordset1['ID']; ?>">Edit </td> </a>
        <td><?php echo $row_Recordset1['firstName']; ?></td>
        <td><?php echo $row_Recordset1['lastName']; ?></td>
        <td><?php echo $row_Recordset1['city']; ?></td>
        <td><?php echo $row_Recordset1['state']; ?></td>
        <td><?php echo $row_Recordset1['country']; ?></td>
      </tr>
      </div>
  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
<p>&nbsp;<a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">First</a>&nbsp;&nbsp;&nbsp;  
  <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">Previous</a>  &nbsp;&nbsp;&nbsp;
  <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Next</a> &nbsp;&nbsp;&nbsp;
<a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">Last</a></p>
<p>&nbsp;Record <?php echo ($startRow_Recordset1 + 1) ?> to <?php echo min($startRow_Recordset1 + $maxRows_Recordset1, $totalRows_Recordset1) ?> of <?php echo $totalRows_Recordset1 ?></p>
<p><a href="add.php">Add</a> new customer.</p>
<div style="background-color: #404040; width: 500px">
</font>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
