<?php

session_start();

include("includes/connection.php");

if(isset($_POST['login'])){
	$email=htmlentities(mysqli_real_escape_string($con,$_POST['email']));
	$pass=htmlentities(mysqli_real_escape_string($con,$_POST['pass']));

	$select_user="select * from users where user_email='$email' AND user_pass='$pass' AND status='0'";
	$query=mysqli_query($con,$select_user);
	//$user_type=mysqli_fetch_row($query);
	$check_user=mysqli_num_rows($query);
	$va=$_GET['va'];

	if($check_user==1){
        $user_t=mysqli_fetch_assoc($query);
		$_SESSION['user_type']=$user_t['user_type'];
		$_SESSION['user_email']=$email;
		$_SESSION['f_name']=$user_t['f_name'];
		$_SESSION['l_name']=$user_t['l_name'];
	    
	
		if($user_t['user_type']==2 && $va==2){
			header('location:exam_controller.php');
		}
		else if($user_t['user_type']==3 && $va==3){
			header('location:teacher.php');
		}else if($user_t['user_type']==1 && $va==1){
        /* after successfull login control is transfer to home.php that is interface of student*/
		echo"<script>window.open('home.php','_self')</script>";
		}

       
	}else{
		echo"<script>alert('Your Email or password is incorrect')</script>";
	}

}

?>