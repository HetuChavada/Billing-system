
<?php
$pizza_id=$_GET['pizza_id'];
$con=mysqli_connect("localhost","root","","billing");
if(isset($_GET(['delete']){
$delete =mysqli_query($con,"DELETE FROM order WHERE pizza_id='$pizza_id'");
$status=mysqli_query($con,$delete);
echo'$status';
header('Location: delete.php');
}
?>
