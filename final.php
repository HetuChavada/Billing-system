<html>
<head>
	<title>Final Bill</title>
</head>

<body>

<form action="final.php" method="get">
<center>
<table>
<tr>
	<td><b><h1>Invoice Receipt</td>
	<?php
	$con=mysqli_connect("localhost","root","","billing");
	session_start();
	$session['name']=$_get['c_name'];

?>
	
	
</table>
</center>
</form>
</body>
</html>