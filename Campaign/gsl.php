<?php include "Dbconnect.php"; ?>
<html>
<body>
<form action="" method="post">
<input type="text" name="link" placeholder="Copy and Paste Link Here"/>
<input type="text" name="gsl" placeholder="GSL"/>
<input type="submit" value="submit"/> 
</form>
<?php
if (isset($_POST['submit'])) 
{
$link=$_POST['link'];
$gsl=$_POST['gsl'];
$sql="UPDATE mstr_camp SET gsl='{$gsl}' WHERE link='{$link}'";
	$result_set=mysql_query($sql);
if($result_set)
{
echo "Success";
}
else
{
echo "Error";
}
}
?>
</body>
</html>

