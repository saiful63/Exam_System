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

     <div class="container">
      
        <div class="row">
        <div class="card col-4">
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item allumni_side3"><a href="exam_controller.php">Home</a></li>

            <li class="list-group-item allumni_side3"><a href="manage_student.php">Manage Student</a></li>
            <li class="list-group-item allumni_side3"><a href="assign_teacher.php">Assign Teacher</a></li>
            <li class="list-group-item allumni_side3"><a href="student_attendance.php">Student Attendance</a></li>
             <li class="list-group-item allumni_side3"><a href="logout.php">Logout</a></li>
             <?php
              
             ?>
          </ul>
        </div>
            <div class="col-8">
                <div class="payment-of-tax">
                    <h2>Teacher invigilation List</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th rowspan="2">Teacher name</th>
                                    <th rowspan="2">Date</th>
                                    <th rowspan="2">Course code</th>
                                    <th rowspan="2">Room</th>
                                    <th rowspan="2">Action</th>
                                </tr>


                               
                            </thead>
    <?php

    $di_s="select distinct teacher from `assign_teacher` where dept='ICE' order by teacher asc";
   
    $dis_r=mysqli_query($con,$di_s);

     while($drow_inv=mysqli_fetch_assoc($dis_r)){
     
            
        $key_teacher=$drow_inv['teacher'];
        
    
       
        $i_s="select id,teacher,course,building,date from `assign_teacher` where dept='ICE' and teacher='$key_teacher'";
   
    $is_r=mysqli_query($con,$i_s);
    $i=0;

    while($row_inv=mysqli_fetch_assoc($is_r)){
     
            //  $datas[]=$row_inv;

                $cr=$row_inv['course'];
                $pair = explode("/", $cr);
                $value = $pair[1];
        ?>

       
     
                            <tbody>
                                <tr>
                                <?php
                                if($i==0){
                                    ?>
                                <td><?php 
                                    $i++;
                                        echo $drow_inv['teacher'];
                                    
                                    ?></td>
                                    <?php
                                }else{
                                 
                                         echo"<td>"."</td>";
                                  
                                }
                                ?>
                               
                                
                                    
                                    <td><?php echo $row_inv['date'];  ?></td>
                                    <td><?php echo $value;  ?></td>
                                    <td><?php echo $row_inv['building'];  ?></td>
                                     <td><a href="see_teacherinv_delete.php?delete=<?php echo $row_inv['id']; ?>">Delete</a></td>
                                </tr>
                              
                               
                             
                                
                            </tbody>
    <?php
     }
     $i=0;
     }
    
    ?>
  
                        </table>
 
                    </div>
                </div>
            </div>
        </div>
    </div>

























































<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
















