<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>

</head>
<style>
body{
background-color: #9f9da7;
}
</style>
<body>
<div class="form">
<p><a href="admin_panel.php">Dashboard</a> 
| <a href="view.php">View Records</a>
| <a href="update.php">Update Records</a> 

<div>
<h1>Insert New Record</h1>
<form name="form" method="get" action="insert.php"> 
<p>Enter ID of Pizza :<input type="number" name="pizza_id" placeholder="Enter ID of Pizza" required /></p>
<p>Enter Name of New Pizza :<input type="text" name="pizza_name" placeholder="Enter Name of Pizza" required /></p>
<p>Enter Price of Pizza :<input type="number" name="pizza_price" placeholder="Enter Price of Pizza" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;">
</p>
</div>

</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","billing");
if(isset($_GET['submit']))
{
$pizza_id=$_GET['pizza_id'];
$pizza_name=$_GET['pizza_name'];
$pizza_price=$_GET['pizza_price'];
$query="insert into orders(pizza_id,pizza_name,pizza_price) values ($pizza_id,'$pizza_name',$pizza_price);";
$count=mysqli_query($con,$query)or die (mysqli_error($con));
if($count)
{
	echo"inserted successfully";
	header('Location:view.php');
}
else{
	echo"something went wrong";
	}
}
 ?>
 