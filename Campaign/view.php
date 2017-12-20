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
<h3 align="center">Master Campaign Table</h3>
<div id="body">
	<table width="80%" border="1">
    
    <tr>
    <td>User_id</td>
    <td>Title</td>
    <td>Link</td>
    <td>GSL</td>
    <td>Time</td>
    <td>Selected Publishers</td>
    <td>Selected Plan</td>
	<td>Status</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM mstr_camp";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['user_id'] ?></td>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['link'] ?></td>
	<td><?php echo $row['gsl'] ?></td>
        <td><?php echo $row['time'] ?></td>
        <td><?php echo $row['pid'] ?></td>
         <td><?php echo $row['plan'] ?></td>
         <td><?php echo $row['status'] ?></td>
        
        <td><a href="http://www.opulentzeal.com/Campaign/uploads/<?php echo $row['file'] ?>" target="_blank">view Image</a></td>
        </tr>
        <?php
	}
	?>
    </table>
<hr>
</div>
</body>
</html>
