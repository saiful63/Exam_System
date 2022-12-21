<?php

$con=mysqli_connect("localhost","root","","exam");
?>



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
    <title>Attendance</title>
    
    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body class="bg-light">


    
<div class="wrap">
  <span class="stud_as">Student</span>
<table class="table table-striped table-hover a_t">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Dept</th>
      <th scope="col">Roll</th>
      <th scope="col">Session</th>
      <th scope="col">Semester</th>
      
      <th colspan="2">Remove Record</th>

    </tr>
  </thead>

   <?php
               


           
               $dpt=$_POST['u_dept'];
                  
                
                $sm=$_POST['u_sem'];
                $pair = explode("/", $sm);
                $value = $pair[1];
    
               
                $query="select * from users where department='$dpt' and semester='$value'";
                $result=$con->query($query);
                 
                if($result->num_rows>0){
                 
                  while($row=$result->fetch_assoc()){
                    
                    
    ?>
  <tbody>
    <tr data-stud="<?php echo $row['student_id'];?>">
      
    
      <td><img src="images/<?php echo $row['user_image'];?>" alt=""width="100" height="80" class="im4"></td>
      <td><?php echo $row['f_name'];?></td>
      <td><?php echo $row['l_name'];?></td>
      <td><?php echo $row['department'];?></td>
      <td><?php echo $row['student_id'];?></td>
      <td><?php echo $row['session'];?></td>
      <td><?php echo $row['semester'];?></td>
    
    <td>  
       
         <a href="u_student.php?s_d=<?php echo $row['user_id'];?>" id="del"class="btn btn-success">Edit</a>
          <a href="d_student.php?s_d=<?php echo $row['user_id'];?>" id="edt"class="btn btn-danger">Delete</a>
    </td>
    
    </tr>

    
    
  </tbody>

  <?php

  
                  }
                }
            
  ?>


</table>

 
</div>



<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

 
</body>
</html>

































