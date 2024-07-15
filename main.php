<html>
<head>
<Title>billing system</Title>
<style type = "text/css">
.style1
{
	border-width:0;
	border:solid gray 5px;
	width 90%;
	border-radius:5px;
	margin:5px auto;
	background : white;
}

.btn
{
	width:202px;
	height:30px;
	padding:5px;
	background:gray;
	font-size:20px;
	color:white;
}
.img
{
	width:150px;
	height:150px;
}
body{
background-image:linear-gradient(#ffd89b,#19547b);
}

</style>
</head>
<body>
<?php

if (isset($_GET['submit']))
{
$name=$_GET['name'];
$surname=$_GET['surname'];
$email=$_GET['email'];
$mobile=$_GET['mobile'];
$city=$_GET['city'];
$address=$_GET['address'];

$con=mysqli_connect("localhost","root","","billing");
$query="insert into client(c_name,c_surname,c_email,c_mobile,c_address,c_city) values ('$name','$surname','$email',$mobile,'$address','$city');";
$count=mysqli_query($con,$query)or die (mysqli_error($con));
if($count){
	echo"inserted successfully";
	header('Location:order.php');
	}
else{
	echo"something went wrong";
	header('Location:main.php');
	}
}

?>
<center>
	<img src="logo.jpg"class=img>
	<b><font style="font-size:80">Personal Details</font></b>
</center>

<hr size=7 color="gray">
<div>
<center>
<table class="style1" bgcolor="gray" align='left' height="400px">
<form method="GET" action="main.php">

	<tr bgcolor="#f5f5f5">
		<td align="right">Name:</td>
		<td><input type="text" name="name" placeholder="Enter your Name" pattern="[A-Za-z]{2,20}" required></td>
	</tr>	
	<tr bgcolor="#f5f5f5">
		<td align="right">Surname:</td>
		<td><input type="text" name="surname"placeholder="Enter your Surname"required pattern="[A-Za-z]{2,50}"></td>
	</tr>
	
	<tr bgcolor="#f5f5f5">
		<td align="right">E-Mail:</td>
		<td><input type="email" name="email"placeholder="Enter your Email"></td>
	</tr>		
	<tr bgcolor="#f5f5f5">
		<td align="right">Mobile Number:</td>
		<td><input type="tel" name="mobile" pattern="[789][0-9]{9}"placeholder="Enter your Mobile Number" required></td>
	</tr>
	
	<tr bgcolor="#f5f5f5">
		<td align="right">City:</td>
		<td required><select name="city">
			<option>Ahmedabad</option>
			<option>Amreli</option>
			<option>Anand</option>
			<option>Banas Kantha</option>
			<option>Bharuch</option>
			<option>Bhavnagar</option>
			<option>Dohad(Dahod)</option>
			<option>Gandhinagar</option>
			<option>Jamnagar</option>
			<option>Junagadh</option>
			<option>Kachchh</option>
			<option>Kheda</option>
			<option>Mahesana(Mehsana)</option>
			<option>Narmada</option>
			<option>Navsari</option>
			<option>Panch Mahals(Panchmahal)</option>
			<option>Patan</option>
			<option selected>Porbandar</option>
			<option>Rajkot</option>
			<option>Sabar Kantha</option>
			<option>Surat</option>
			<option>Surendranagar</option>
			<option>Tapi</option>
			<option>The Dangs</option>
			<option>Vadodara</option>
			<option>Valsad</option>
			</select></td>
	</tr>
	
	<tr bgcolor="#f5f5f5">
		<td align="right">Address:</td>
		<td><textarea name="address" cols="22" placeholder="Enter your full Address" required> </textarea></td>
	</tr>
	<tr bgcolor="#f5f5f5" >	
		<td align="center" style="width:700px"  class='btn' colspan="2">
		<input type="submit" value="Submit" name="submit">
		
		
		</td>
	</tr>	

</table>
</form>
	
</div>

</body>
</html>