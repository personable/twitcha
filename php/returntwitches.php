<?php include("config.php"); ?>

<?php
// GET NUMBER BACK 
$query2  = "SELECT * FROM twitches";
$result2 = mysql_query($query2);
while($row2 = mysql_fetch_array($result2, MYSQL_ASSOC))
{
    
	echo "<p>{$row2['twitchnumber']}</p>";
} 
?>