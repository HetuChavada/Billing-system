 <?php 
   $con=mysqli_connect("localhost","root","","billing");
   $sql = "SELECT * FROM orders WHERE pizza_id='".$_POST['pizza_id']."'";
   $query = mysqli_query($con,$sql);
   while($row = mysqli_fetch_assoc($query))
   {
         $data = $row;
   }
    echo json_encode($data);
 ?>