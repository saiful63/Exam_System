<?php
session_start();

include("includes/connection.php");

include("functions/functions.php");
include("load.php");
?>

<?php
if(!isset($_SESSION['user_email'])){
  header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam-Controller</title>
    
    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body class="bg-light">
    <?php
     $se=$_SESSION['user_type'];
     if($_SESSION['user_type']==3){
        $se_var='Exam-Controller';
     }
    ?>
    
    <div class="container mt-4 ">
    <div class="row bg-white b_containr">
      <div class="col-md-4 b_h1">
        <div class="card">
          <div class="card-header">
          <?php 
    //        if (isset($_POST['courseId']))
    //         {
    //         $pair = explode("/", $_POST["courseId"]);

    //         $name   = $pair[0];
    //         $value = $pair[1];

    //         //print "Key: $name<br />";
    //         //print "Value: $value<br />";

            
    //         }
    //       if(isset($_POST['courseId']) && !empty($_POST['courseId'])){
    //         echo $_POST['courseId'];
    // $query="select * from routine where semester=".$value;
    // $result=$con->query($query);
    // $row=$result->fetch_assoc();
          //}
          ?>
          </div>
          <ul class="list-group list-group-flush">
           <li class="list-group-item allumni_side3"><a href="exam_controller.php">Home</a></li>

            
            <li class="list-group-item allumni_side3"><a href="assign_teacher.php">Assign Teacher</a></li>
            <li class="list-group-item allumni_side3"><a href="teacher_invigilation.php">Teacher Invigilation</a></li>
            <li class="list-group-item allumni_side3"><a href="student_attendance.php">Student Attendance</a></li>
            <li class="list-group-item allumni_side3"><a href="exam_routine.php">Exam Routine</a></li>
            <li class="list-group-item allumni_side3"><a href="automated_a.php">See Automated Attendance</a></li>
             <li class="list-group-item allumni_side3"><a href="logout.php">Logout</a></li>
            
          </ul>
        </div>
      </div>
      <div class="col-md-8">  
        <form class="b_h" action=""method="post">
         <div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control" name="u_dept" required="required">
							<option>Department</option>
              <option>ICE</option>
              <option>CSTE</option>
              <option>EEE</option>
						</select>
					</div><br>

        <div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select id="sem"class="form-control" name="u_sem"  required="required">
							<option value="">Semester</option>

							 <?php
               
             
                $query="select * from course group by semester";
                $result=$con->query($query);
                if($result->num_rows>0){
                  while($row=$result->fetch_assoc()){
                    echo'<option value="'.$row['user_type'].'/'.$row['semester'].'">'.$row['semester'].'</option>';
                  }
                  
                }else{
                    echo'<option value="">Country not available</option>';
                  }
                ?>
						
						</select>
    </div><br>
        
           <div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select id="course"class="form-control" name="u_course" >
							<option value=""></option>
							
						</select>
			</div><br>


            <div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select id="hall"class="form-control" name="u_hall" required="required">
							<option value="">Exam Hall</option>
							 <?php
                $query="select * from hall";
                $result=$con->query($query);
                if($result->num_rows>0){
                  while($row=$result->fetch_assoc()){
                    echo'<option value="'.$row['building']." : ".$row['room'].'">'.$row['building']." : ".$row['room'].'</option>';
                  }
                  
                }else{
                    echo'<option value="">Hall not available</option>';
                  }
                ?>
						
						</select>
        </div><br>

        <div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select id="teacher"class="form-control" name="u_teach" required="required">
							<option value="">Allocated Teacher</option>
							 <?php
                $query="select * from users where user_type=3";
                $result=$con->query($query);
                if($result->num_rows>0){
                  while($row=$result->fetch_assoc()){
                    echo'<option value="'.$row['f_name']." ".$row['l_name'].'">'.$row['f_name']." ".$row['l_name'].'</option>';
                  }
                  
                }else{
                    echo'<option value="">Teacher not available</option>';
                  }
                ?>
						
						</select>
      </div><br>

          <button type="submit" class="btn btn-primary mt-2" name="sub">Assign</button>
             
        
      
          <?php
         
            assignTeacher();
            
          
          ?>
          
        </form>
      </div>
    </div>
    </div>

<script src="js/jquery.js"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  <script>
  

$(document).ready(function(){
$("#sem").on("change",function(){
var courseId=$(this).val();

$.ajax({
  url :"load.php",
  type:"POST",
  cache:false,
  
  data:{courseId:courseId},
  success:function(data){
    
  
    $("#course").html(data);

    
  }
})

});





});

  </script>
</body>
</html>
