<?php
session_start();

include("includes/connection.php");

include("functions/functions.php");
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
     if($_SESSION['user_type']==2){
        $se_var='Exam-Controller';
     }
    ?>
    
    <div class="container mt-4 ">
    <div class="row bg-white b_containr">
      <div class="col-md-4 b_h1">
        <div class="card">
          <div class="card-header">
            Featured
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item allumni_side3"><a href="manage_student.php">Manage Student</a></li>
            <li class="list-group-item allumni_side3"><a href="assign_teacher.php">Assign Teacher</a></li>
            <li class="list-group-item allumni_side3"><a href="teacher_invigilation.php">Teacher Invigilation</a></li>
            <li class="list-group-item allumni_side3"><a href="student_attendance.php">Student Attendance</a></li>
            <li class="list-group-item allumni_side3"><a href="exam_routine.php">Exam Routine</a></li>
            <li class="list-group-item allumni_side3"><a href="automated_a.php">See Automated Attendance</a></li>
             <li class="list-group-item allumni_side3"><a href="logout.php">Logout</a></li>
             <?php
              
             ?>
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
						<select id="sem"class="form-control" name="u_sem" required="required">
							<option value="">Semester</option>
							 <?php
                //$query="select * from course order by semester";
                $query="select user_type,course_detail,semester from course group by semester";
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
						<span class="input-group-addon"><i class="glyphicon glyphicon-calender"></i></span>
						<input type="date" class="form-control input-md" placeholder="Email" name="u_date" required="required">
					</div><br>

          <button type="submit" class="btn btn-primary mt-2" name="sub">Upload Routine</button>

         
      
          <?php
         
            insertRoutine();
          
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
//console.log(courseId);
$.ajax({
  url :"load.php",
  type:"POST",
  cache:false,
  
  data:{courseId:courseId},
  success:function(data){
    
    //$("#course").html('<option value="">Select city</option>');
    $("#course").html(data);

    //$("#state").html(data);
    //$("#city").html('<option value="">Select city</option>');
  }
})


});



});

  </script>
</body>
</html>
