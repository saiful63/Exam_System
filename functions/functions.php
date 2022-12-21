<?php
//session_start();

//$con = mysqli_connect("localhost","root","","examiny") or die("Connection was not established");

function insertRoutine(){

if(isset($_POST['sub'])){

	   
     $dept = htmlentities($_POST['u_dept']);
	 //$sem = htmlentities($_POST['u_sem']);
     $date = htmlentities($_POST['u_date']);
	 $course = htmlentities($_POST['u_course']);
     $pair = explode("/", $_POST["u_sem"]);
     $value = $pair[1];

	$insert="INSERT INTO `routine` (`id`, `dept`, `semester`, `date`,`course`) VALUES (NULL, '$dept', '$value', '$date','$course')";
	$run = mysqli_query(mysqli_connect("localhost","root","","exam"), $insert);
	if($run){
									echo "<script>alert('You Uploaded Routine a moment ago!')</script>";
									echo "<script>window.open('exam_controller.php', '_self')</script>";
                        }
						else{
							echo "<script>alert('Routine upload is not success')</script>";
							echo "<script>window.open('exam_controller.php', '_self')</script>";
						}
}
}


function assignTeacher(){

if(isset($_POST['sub'])){

	   
     $dept = htmlentities($_POST['u_dept']);
	 $sem = htmlentities($_POST['u_sem']);
     //$date = htmlentities($_POST['u_date']);
	 $course = htmlentities($_POST['u_course']);
	 $building = htmlentities($_POST['u_hall']);
	 $teacher = htmlentities($_POST['u_teach']);
	 //$myPhpVar= $_COOKIE['myJavascriptVar'];
     $pair = explode("/", $_POST["u_sem"]);
     $value = $pair[1];
	 $query="SELECT * FROM `routine` WHERE semester='$value'";
	 $ran=mysqli_query(mysqli_connect("localhost","root","","exam"),$query);
	 
		 while($raw=mysqli_fetch_assoc($ran)){
       $date=$raw['date'];
		 }
	
    if(empty($date)){
       echo "<script>alert('Your data is not matched with routine!')</script>";
	   echo "<script>window.open('assign_teacher.php', '_self')</script>";
	   exit();
	}		
	 
	 
	

	$insert="INSERT INTO `assign_teacher` (`id`, `dept`, `semester`, `course`,`building`,`teacher`,`date`) VALUES (NULL, '$dept', '$sem', '$course','$building','$teacher','$date')";
	$run = mysqli_query(mysqli_connect("localhost","root","","exam"), $insert);
	if($run){
									echo "<script>alert('Teacher is assigned!')</script>";
									echo "<script>window.open('assign_teacher.php', '_self')</script>";
                        }
						else{
							echo "<script>alert('Teacher is not assigned')</script>";
							echo "<script>window.open('assign_teacher.php', '_self')</script>";
						}
					
}
}

function updateSemester(){
	
	$user_email=$_SESSION['user_email'];
	if(isset($_POST['sub'])){
	$dept=$_POST['u_dept'];
	$sem=$_POST['u_sem'];
    $update="update users set semester='$sem'where user_email='$user_email'";
	$run_sem=mysqli_query(mysqli_connect("localhost","root","","exam"),$update);

	if($run_sem){
		echo"<script>alert('Semester Updated..');</script>";
		echo"<script>window.open('home.php','_self')</script>";
	
	}else{
		echo"<script>alert('Semester is not Updated..');</script>";
		echo"<script>window.open('home.php','_self')</script>";
		
	}
	}

}


function showStudent(){

if(isset($_POST['sub'])){

	   
     $dept = htmlentities($_POST['u_dept']);
	 $sem = htmlentities($_POST['u_sem']);
    

	$select="select * from users where department='$dept' and semester='$sem'";
	$run = mysqli_query(mysqli_connect("localhost","root","","exam"), $select);

}
}


?>