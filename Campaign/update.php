<?php
include_once 'dbconfig.php';
?>
<html>
<body>
<h2>Enete Table ID To Get Info of Status,Browser,OS,Country Table</h2> 
<form align="center" method="post" action="">
<input type="text" name="table" placholder="Enter Table Name"/>
<input type="submit" value="sumit"/> 
</form>
<table width="80%" border="1">
    
    <tr>
    <td>Id</td>
    <td>W/C/O/B</td>
    <td>Date</td>
    <td>Spdate</td>
    <td>SPL</td>
    <td>Link</td>
	<td>Total</td>
    </tr>
    <?php
$get=$_POST["table"];
	$sql="SELECT * FROM $get";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['website']; echo $row['country'];echo $row['osname'];echo $row['bname']; ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['spdate'] ?></td>
        <td><?php echo $row['spl'] ?></td>
         <td><?php echo $row['link'] ?></td>
         <td><?php echo $row['total'] ?></td>
        
        
        </tr>
        <?php
	}
	?>
    </table>
<h3 ailgn="center"><a href="upuid.php">Update UID Data</a></h3>
</body>
</html>
