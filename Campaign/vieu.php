<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h3 align="center">Master Users Table</h3>
<div id="body">
	<table width="80%" border="1">
    
    <tr>
    <td>User_id</td>
    <td>username</td>
    <td>email</td>
    <td>phone</td>
    <td>confirm</td>
    <td>country</td>
		    <td>website</td>
<td>camp</td>
<td>dcreated</td>
</tr>
    <?php
	$sql="SELECT * FROM users";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['user_id'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['confirm'] ?></td>
         <td><?php echo $row['country'] ?></td>
         <td><?php echo $row['website'] ?></td>
         <td><?php echo $row['camp'] ?></td>
         <td><?php echo $row['dcreated'] ?></td>        
</tr>
    <?php
	}
	?>    
    </table>
    
</div>
</body>
</html>
