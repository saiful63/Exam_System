<?php
session_start();
error_reporting(0);

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
    
    <?php
    if(isset($_POST['sub'])){
        $sem=$_POST['u_sem'];
    }
    
    ?>


  <div class="wrap">
   <span class="stud_as">Exam Routine</span>
<table class="table table-striped table-hover a_t">
  <thead>
    <tr>
      <th scope="col">Coure Code</th>
      <th scope="col">Exam Date</th>
      <th scope="col">Room</th>
      

    </tr>
  </thead>
   
   <?php
                $query="select * from assign_teacher where semester='$sem'";
                $result=$con->query($query);
                 
                if($result->num_rows>0){
                 
                  while($row=$result->fetch_assoc()){
                    
                    
    ?>
  <tbody>
     <?php
    
    $pair = explode("/", $row['course']);
    $value = $pair[1];
    ?>
    <tr data-stud="<?php echo $row['student_id']?> " >
      
    
    
      <td><?php echo $value ?></td>
      <td><?php echo $row['date'];?></td>
      <td><?php echo $row['building']; ?></td>
      
    
   
    </tr>

    
    
  </tbody>

  <?php

  
                  }
                }
  ?>












    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  
</body>
</html>
