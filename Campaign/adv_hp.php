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
<h3 align="center">Adv_Home_Table</h3>
<div id="body">
	<table width="80%" border="1">
    
    <tr>
    <td>User_id</td>
    <td>Total Clicks</td>
    <td>Total Money</td>
    <td>Clicks Today</td>
    <td>Money Today</td>
    <td>Success Rate</td>

    
    </tr>
    <?php
	$sql="SELECT * FROM adv_home";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['user_id'] ?></td>
        <td><?php echo $row['totalclicks'] ?></td>
        <td><?php echo $row['totalmoney'] ?></td>
        <td><?php echo $row['clickstoday'] ?></td>
        <td><?php echo $row['moneytoday'] ?></td>
         <td><?php echo $row['successrate'] ?></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
<hr>
<hr>
<h3 align="center">Adv_Prev_Table</h3>
<div id="body">
	<table width="80%" border="1">
    
    <tr>
    <td>User_id</td>
    <td>Date</td>
    <td>Link</td>
    <td>Money</td>
    <td>Count</td>

    
    </tr>
    <?php
	$sql="SELECT * FROM adv_prev";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['user_id'] ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['link'] ?></td>
        <td><?php echo $row['money'] ?></td>
         <td><?php echo $row['count'] ?></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>
