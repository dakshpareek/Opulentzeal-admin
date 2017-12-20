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
<h3 align="center">Ides Table</h3>
<div id="body">
	<table width="80%" border="1">
    
    <tr>
    <td>User_id</td>
		    <td>email</td>
		<td><b>adid</b></td>
    <td>time</td>
    <td>status</td>
    </tr>
    <?php
	$sql="SELECT * FROM ides";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['user_id'] ?></td>
			   <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['adid'] ?></td>
        <td><?php echo $row['time'] ?></td>
	<td><?php echo $row['status'] ?></td>
 
        </tr>
        <?php
	}
	?>
    </table>
</div>
</body>
</html>
