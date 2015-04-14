<?php
$db_host = "localhost"; //place your hostname in this variable
$db_user = "bstchris_twitcha"; //place your username in this variable
$db_pass = "goodtimes1@"; //place password in this variable
$db_name = "bstchris_twitchadb"; //place your database name in this variable
mysql_connect($db_host, $db_user, $db_pass) or die (mysql_error());
//echo "Successfully connected to MySQL Database!";
mysql_select_db($db_name) or die (mysql_error());
//echo '<h2>Successtully selected ' . $db_name . ' database!</h2>';
?>