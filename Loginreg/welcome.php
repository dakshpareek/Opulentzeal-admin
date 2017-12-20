<?php
session_start();

if(!isset($_SESSION['login_user']))
{
 header("Location: index.php");
}

?>
<html>
<body>
<h1 align="center">Welcome Master Admin</h1>

<h3 ailgn="center"><a href="../Campaign/vieu.php">Users</a></h3>
<h3 ailgn="center"><a href="../Campaign/ides.php">AD_ides</a></h3>
<h3 align="center"><a href="http://admin.opulentzeal.com/Campaign/pubdate.php">Create Publisher(selink1)</a></h3>
<h3 align="center"><a href="http://www.opulentzeal.com/adfor/createfile.html">Create ilink and nlink file for publisher</a></h3>
<h3 align="center"><a href="http://admin.opulentzeal.com/Campaign/verify.php">Update Users As Publisher(confirm)</a></h3>
<h3 align="center"><a href="http://www.opulentzeal.com/adfor/update.html">Insert Ads</a></h3>	
</body>
</html>
