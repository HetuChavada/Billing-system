<?php
 $con=mysqli_connect("localhost","root","","billing");
                                 $sql = "SELECT * FROM orders";
                                 $query = mysqli_query($con,$sql);
                                 while($row = mysqli_fetch_assoc($query))

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>

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
| <a href="insert.php">Insert Records</a> 


<h1>Update Record</h1>
<?php
$status = "";
if(isset($_GET['submit']) )
{
$id=$_GET['pizza_id'];
$name =$_GET['pizza_name'];
$price =$_GET['pizza_price'];

echo $id;
echo $name;
echo $price;
$update="update orders set pizza_name='".$name."', pizza_price='".$price."' where pizza_id='".$id."'";
$query=mysqli_query($con,$update);
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
?>
<div>
<form name="form" method="get" action="update.php"> 

Enter Pizza ID :<input type="text" name="pizza_id" placeholder="Enter Pizza ID" required value="<?php echo $row['pizza_id'];?>" /><br><br>
Enter Pizza Name :<input type="text" name="pizza_name" placeholder="Enter Pizza Name" required value="<?php echo $row['pizza_name'];?>" /><br><br>
Enter Pizza price :<input type="number" name="pizza_price" placeholder="Enter Pizza price" required value="<?php echo $row['pizza_price'];?>" /><br><br>
<input name="submit" type="submit" value="Update" />
</form>

</div>
</div>
</body>
</html>