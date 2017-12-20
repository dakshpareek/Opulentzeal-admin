<?php include "Dbconnect.php"; ?>
<html>
<body>
<h2 align="center">Update Pubdb Table(Advertiser)</h2> 
<form action="" method="POST">
<input type="text" name="uid" placeholder="Enter Pubdb ID"/>
<input type="text" name="web" placeholder="Enter Advertiser Name(Website)"/>
<input type="text" name="clicks" placeholder="Clicks Total"/>
<input type="text" name="link" placeholder="Money Total"/>
<input type="submit" value="submit"/>
</form>
<?php
$uid=$_POST['uid'];
$web=$_POST['web'];
$clicks=$_POST['clicks'];
$link=$_POST['link'];

$sql="INSERT INTO `" .$uid. "` (AdName,ctotal,mtotal) VALUES ('$web','$clicks','$link')";
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
<h2 align="center">Update Pubdba Table(Links)</h2> 
<form action="" method="POST">
<input type="text" name="uid" placeholder="Enter Pubdba ID"/>
<input type="text" name="web" placeholder="Enter Link"/>
<input type="text" name="clicks" placeholder="Clicks Total"/>
<input type="text" name="link" placeholder="Money Total"/>
<input type="submit" value="submit"/>
</form>
<?php
$uid=$_POST['uid'];
$web=$_POST['web'];
$clicks=$_POST['clicks'];
$link=$_POST['link'];

$sql="INSERT INTO `" .$uid. "` (link,vtotal,mtotal) VALUES ('$web','$clicks','$link')";
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
</body>
</html>
