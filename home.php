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
    <title>Student</title>
    
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
            <li class="list-group-item allumni_side3"><a href="home.php">Home</a></li>
            
             <li class="list-group-item allumni_side3"><a href="logout.php">Logout</a></li>
             <?php
              
             ?>
          </ul>
        </div>
      </div>
      <div class="col-md-8">  
        <form class="b_h" action="home.php"method="post">
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
						<select class="form-control" name="u_sem" required="required">
							<option>Semester</option>
							<option>Y-1,T-1</option>
							<option>Y-1,T-2</option>
							<option>Y-2,T-1</option>
              <option>Y-2,T-2</option>
              <option>Y-3,T-1</option>
              <option>Y-3,T-2</option>
              <option>Y-4,T-1</option>
              <option>Y-4,T-2</option>
						</select>
					</div><br>
          
        
       
          <button type="submit" class="btn btn-primary mt-2" name="sub">Update Semester</button>
          <?php
         
            updateSemester();
          
          ?>
          
        </form>
      </div>
    </div>
    </div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  
</body>
</html>
