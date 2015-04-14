<?php include("config.php"); 

// INCREMENT BY 1 
$selectfromusers = mysql_query("SELECT * FROM twitches") 
or die(mysql_error()); 

$addition = mysql_query("UPDATE twitches SET twitchnumber = twitchnumber + 1") 
or die(mysql_error()); 

include("close.php"); 

?>