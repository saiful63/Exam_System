<?php
include("includes/connection.php");

if(isset($_POST['sign_up'])){
	 $first_name=$_POST['first_name'];
	 $last_name=$_POST['last_name'];
	 $pass=$_POST['u_pass'];
	 $email=$_POST['u_email'];
   $mobile=$_POST['u_mobile'];
	 $u_id=$_POST['u_id'];
   $u_sem=$_POST['u_sem'];
	 $gender=$_POST['u_gender'];
   $type=$_POST['u_type'];
   $birthday=$_POST['u_birthday'];
   //$u_image=$_FILES['u_image'];
   $pos=$_POST['u_pos'];
   $u_ss=$_POST['u_ss'];
   $u_dept=$_POST['u_dept'];
   $u_hall=$_POST['u_hall'];
   $status="verified";
   
    //$check_username_query="select user_name from users where user_email='$email'";

    //$run_username=mysqli_query($con,$check_username_query);

    // if(strlen($pass<9)){
    // 	echo"<script>alert('Password should be minimum 9 character!')</script>";
    // 	exit();
    // }

    /*code for Anyone cannot use email that have already exist in database */

    $check_email="select * from users where user_email='$email'";
    $run_email=mysqli_query($con,$check_email);

    $check=mysqli_num_rows($run_email);

    if($check==1){
    	echo"<script>alert('Email already exist, Please try using another email')</script>";
    	echo"<script>window.open('signup.php','_self')</script>";
    	exit();

    }
    /*end code for Anyone cannot use email that have already exist in database */
  

  $rand=rand(1,3);//Random number between 1 and 3

  if($rand==1)
     $profile_pic="head_red.png";
 else if($rand==2)
 	$profile_pic="head_sun_flower.png";
 else if($rand==3)
 	$profile_pic="head_turqoise.png";

  $filename=$_FILES['u_image']['name'];
  $tmp_file=$_FILES['u_image']['tmp_name'];
  move_uploaded_file($tmp_file,"images/".$filename);
 
 
 $insert="INSERT INTO `users` (`user_id`, `f_name`, `l_name`, `mobile`, `student_id`,`semester`, `user_pass`, `user_email`, `session`, `user_gender`, `user_birthday`, `user_image`, `department`, `status`, `hall`, `position`, `user_type`) VALUES (NULL, '$first_name', '$last_name', '$mobile', '$u_id','$u_sem', '$pass', '$email', '$u_ss', '$gender', '$birthday', '$filename', '$u_dept', '0', '$u_hall', '$pos', '$type');";
 $query=mysqli_query($con,$insert);

 if($query){

 	    echo"<script>alert('Well Done $first_name,you are good to go.')</script>";
    	echo"<script>window.open('signup.php','_self')</script>";
 }
 else{
 	    echo"<script>alert('Registration failed,please try again!.')</script>";
    	echo"<script>window.open('signup.php','_self')</script>";
 }

}


?>

