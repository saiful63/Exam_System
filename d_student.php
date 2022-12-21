<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete page</title>
</head>
<body>
<?php



$con=mysqli_connect("localhost","root","","exam");

$s_d=$_GET['s_d'];

$dlt="DELETE FROM `users` WHERE user_id='$s_d'";
$dlt1=mysqli_query($con,$dlt);
if($dlt1)
{
?>
<center>
	<h1 style="color:red;">Alas,Record has been deleted!</h1>
	<a href="manage_student.php">
		<button>Go to Home</button>
	</a>
</center>


<?php
}
?>
</body>
</html>