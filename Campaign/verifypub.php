<?php
include 'Dbconnect.php';
$uid=$_GET['uid'];
if(mysql_query("update users set confirm=1 where user_id='$uid'"))
{
echo "Updated";
}
	else
	{
	echo "Error";
	}

?>