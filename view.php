<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<style>
body{
background-color: #;
}
</style>
</style>
</head>
<body>
<div class="form">
<p><a href="admin_panel.php">Dashboard</a> 
| <a href="insert.php">Insert Records</a>
| <a href="update.php">Update Records</a> 
 

<h2>View Records</h2>
<table width="100%" border="2" style="solid">
<thead>
<tr>
<th><strong>Pizza ID</strong></th>
<th><strong>Pizza Name</strong></th>
<th><strong>Pizza Price</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$con=mysqli_connect("localhost","root","","billing");
                                 $sql = "SELECT * FROM orders";
                                 $query = mysqli_query($con,$sql);
                                 while($row = mysqli_fetch_assoc($query))
	{ 
?>
			<tr>
			<td align="center"><?php echo $row["pizza_id"]; ?></td>
			<td align="center"><?php echo $row["pizza_name"]; ?></td>
			<td align="center"><?php echo $row["pizza_price"]; ?></td>
			<td align="center">
			<a href="update.php?id=<?php echo $row["pizza_id"]; ?>">Edit</a>
			</td>
			<td align="center">
			<a href="delete.php?id=<?php echo $row["pizza_id"]; ?>">Delete</a>
			</td>
			</tr>
<?php $count++; 
} 
?>

</tbody>
</table>
</div><br><br>
<a href= "login.php">LOG OUT</a>
</body>
</html>