<?php include "Dbconnect.php"; ?>
<html>
<body>
<form action="" method="POST">
<input type="text" name="uid" placeholder="Enter GEOid"/>
<input type="text" name="web" placeholder="Enter Country Name"/>
<input type="text" name="clicks" placeholder="Clicks"/>
<input type="text" name="link" placeholder="Adv Link"/>
<input type="date" name="date" placeholder="Date YY/MM/DD"/>
<input type="submit" value="submit"/>
</form>
<?php
$uid=$_POST['uid'];
$web=$_POST['web'];
$clicks=$_POST['clicks'];
$link=$_POST['link'];
$date = date('Y-m-d', strtotime($_POST['date']));

$sql="INSERT INTO `" .$uid. "` (country,total,date,link) VALUES ('$web','$clicks','$date','$link')";
	$result_set=mysql_query($sql);
if($result_set)
{
echo "Success";
}
else
{
echo "Error";
}  
?>
<hr>
<hr>
<h3 align="center"><a href="../Loginreg/ladminogout.php">Log Out(After Insertion)</a></h3>
<h3 align="center"><a href="upbid.php">Update BID Table</a></h3>
</body>
</html>
