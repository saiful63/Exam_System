
<?php

$con=mysqli_connect("localhost","root","","exam");

$id=$_GET['s_d'];
$sel="SELECT * FROM `users` where user_id='$id'";
$sel1=mysqli_query($con,$sel);

if(isset($_POST['updt']))
{
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$u_pass=$_POST['u_pass'];
	$u_email=$_POST['u_email'];
    $u_mobile=$_POST['u_mobile'];
    $u_gender=$_POST['u_gender'];
    $u_birthday=$_POST['u_birthday'];
    $u_id=$_POST['u_id'];
    $u_sem=$_POST['u_sem'];
    $u_ss=$_POST['u_ss'];
    $u_dept=$_POST['u_dept'];
    $u_hall=$_POST['u_hall'];


	$updt="UPDATE `users` SET `f_name`='$first_name',`l_name`='$last_name',`user_email`='$u_email', `mobile`='$u_mobile',`user_gender`='$u_gender',`user_birthday`='$u_birthday',`student_id`='$u_id',`semester`='$u_sem',`session`='$u_ss',`department`='$u_dept',`hall`='$u_hall' WHERE user_id='$id'";
	


	$result=mysqli_query($con,$updt);
	

	if($result)
	{
		echo"<center><h1 style='color:green;'>Record updated successfully.<center></h1>";
	}
}


?>



<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    
    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
	<center>
		
		<form method="POST">

			<?php
             while($rw=mysqli_fetch_assoc($sel1))
            {
            
			?>
	
	
		 <div class="container">

    
        <h1>Update form</h1>

    	
					<div class="input-group">
						<span class="input-group-addon">First name :&nbsp</span>
						<input type="text" class="form-control" name="first_name" value="<?php echo $rw['f_name']; ?>">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon">First name :&nbsp</span>
						<input type="text" class="form-control"  name="last_name" value="<?php echo $rw['l_name']; ?>">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon">Password :&nbsp</span>
						<input id="password"type="password" class="form-control"  name="u_pass" value="<?php echo $rw['user_pass']; ?>">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon">Email :&nbsp</span>
						<input id="email" type="email" class="form-control"  name="u_email" value="<?php echo $rw['user_email']; ?>">
					</div><br>
                   <div class="input-group">
						<span class="input-group-addon">Mobile :&nbsp</span>
						<input id="mobile" type="text" class="form-control" name="u_mobile" value="<?php echo $rw['mobile']; ?>">
					</div><br>

				
                     <div class="input-group">
						<span class="input-group-addon">Gender :&nbsp</span>
						<input id="" type="" class="form-control"  name="u_gender" value="<?php echo $rw['user_gender']; ?>">
					</div><br>

				
                    
					

					<div class="input-group">
						<span class="input-group-addon">Register date :&nbsp</span>
						<input type="" class="form-control input-md"  name="u_birthday" value="<?php echo $rw['user_birthday']; ?>">
					</div><br>

                    <div class="input-group">
						<span class="input-group-addon">Student Id :&nbsp</span>
						<input id="id1" type="text" class="form-control"  name="u_id" value="<?php echo $rw['student_id']; ?>">
					</div><br>
                    

                     <div class="input-group">
						<span class="input-group-addon">Semester :&nbsp</span>
						<input id="id1" type="text" class="form-control" name="u_sem" value="<?php echo $rw['semester']; ?>">
					</div><br>




                     
                    <div class="input-group">
						<span class="input-group-addon">Session :&nbsp</span>
						<input id="ss" type="text" class="form-control" name="u_ss"value="<?php echo $rw['session']; ?>">
					</div><br>

					  <div class="input-group">
						<span class="input-group-addon">Department :&nbsp</span>
						<input id="" type="text" class="form-control"  name="u_dept"value="<?php echo $rw['department']; ?>">
					</div><br>

                     <div class="input-group">
						<span class="input-group-addon">Hall :&nbsp</span>
						<input id="" type="text" class="form-control"  name="u_hall"value="<?php echo $rw['hall']; ?>">
					</div><br>



			 

    </div>
			
		<?php
        }
   
		?>

		<input type="submit" name="updt" value="update">
	
</form>

<a href="manage_student.php">
	<input type="button" name="but" value="Go to Home">
</a>


	</center>







    
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>