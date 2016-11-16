<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_myConnection = "jonathanplotz.info";
$database_myConnection = "plotzjon_contactlist";
$username_myConnection = "plotzjon_cluser1";
$password_myConnection = "Darkangels1!";
$myConnection = mysql_pconnect($hostname_myConnection, $username_myConnection, $password_myConnection) or trigger_error(mysql_error(),E_USER_ERROR); 
?>