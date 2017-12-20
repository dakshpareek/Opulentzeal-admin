<?php
include "Dbconnect.php";
?>
<html>
<body>
<h3 align="center">Admins</h3>
<div id="body">
	<table width="80%" border="1">
    
    <tr>
    <td>Id</td>
    <td>User Name</td>
    <td>Password</td>
    
    </tr>
    <?php
	$sql="SELECT * FROM admins";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['id'] ?></td>
	<td><?php echo $row['username'] ?></td>
        <td><?php echo $row['password'] ?></td>
        
      
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>
