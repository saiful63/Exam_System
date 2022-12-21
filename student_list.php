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
    <title>Teacher</title>
    
    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body class="bg-light">
    <?php
    
    $s_l=$_GET['s_l'];
    $pair = explode("/", $s_l);
    $value = $pair[1];
    ?>

    
<div class="wrap">
  <h4 id="error_message" class="text-danger"></h4>  
<h4 id="success_message" class="text-success"></h4>  

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Dept</th>
      <th scope="col">Roll</th>
      <th scope="col">Session</th>
      <th scope="col">Semester</th>
      <th colspan="2"scope="col">Attendance</th>

    </tr>
  </thead>

   <?php
                $query="select * from users where semester='$value'";
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
         <button id="pr">Present</button> ||
          <button id="ab">Absent</button>
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
<script>
// function detail(me){
//   var meTY=me.getAttribute("data-stud");
//   alert(meTY);
  
//  }
</script>

 <script>
  
$(document).ready(function(){
 
  $('table').on('click', '#pr', function() {
    var id = $(this).closest('tr').data('stud');
    //alert(id);
   $.ajax({
  url :"student_load.php",
  type:"POST",
  cache:false,
  
  data:{pr_id:id},
  success:function(data){
     $('#success_message').fadeIn().html(data);  
      setTimeout(function(){  
            $('#success_message').fadeOut("Slow");  
      }, 2000); 
   
  }
})
  
})


  $('table').on('click', '#ab', function() {
    var id = $(this).closest('tr').data('stud');
    //alert(id);
   $.ajax({
  url :"student_load.php",
  type:"POST",
  cache:false,
  
  data:{ab_id:id},
  success:function(data){
      $('#error_message').fadeIn().html(data);  
      setTimeout(function(){  
            $('#error_message').fadeOut("Slow");  
      }, 2000); 

  }
})
  
})



});

     
  
  </script>
 
</body>
</html>
