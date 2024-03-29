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
    <title>Exam Controller</title>
    
    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body class="bg-light">
    <?php
     $se=$_SESSION['user_type'];
     if($_SESSION['user_type']==4){
        $se_var='Teacher';
     }
     $email=$_SESSION['user_email'];
     $f_name=$_SESSION['f_name'];
     $l_name=$_SESSION['l_name'];
     $name=$f_name.' '.$l_name;
    ?>
  
   
    
    <div class="container mt-4 ">
    <div class="row bg-white b_containr">
      <div class="col-md-4 b_h1">
        <div class="card">
          <div class="card-header">
            Featured
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

    



    <?php
                $query="select * from assign_teacher";
                $result=$con->query($query);
                 $i=0;
                if($result->num_rows>0){
                 
                  while($row=$result->fetch_assoc()){
                    
                    
    ?>
    <?php
    if($i==1){
      ?>
    <div class="col-md-4">

    </div>
    <?php
    }
    ?>
    <?php
    
    $pair = explode("/", $row['course']);
    $value = $pair[1];
    ?>
    <div class="col-md-8">
    <div class="card b_h bg-light">
      <div class="card-body">
        <h5 class="card-title">Allocated Hall Room</h5>
        <p class="card-text">Room: <?php echo $row['building'];?></p>
        <p class="card-text">Course: <?php echo $value;?></p>
        <p class="card-text">Date: <?php echo $row['date'];?></p>
        <a href="student_attendance_see.php?s_l=<?php echo $row['semester'];?>" class="btn btn-primary">See Attendance</a>
        
      </div>
    </div>

    </div>
    <?php
    $i=1;
        }
        
      }
    
    ?>
    </div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  
</body>
</html>
