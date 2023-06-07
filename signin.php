<?php
session_start();

include("includes/connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">

	<meta name="viewport" content="width=device-width">

	

	<title>Signin</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	   <!--Bootstrap 5-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body>

<!--Navbar-->

<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-light mt-1">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Place for student & teacher</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signup.php">Registration</a>
        </li>
       
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="signin.php?va=3">Teacher</a></li>
            <li><a class="dropdown-item" href="signin.php?va=1">Student</a></li>
            <li><a class="dropdown-item" href="signin.php?va=2">Exam Controller</a></li>
			
		 </ul>
        </li>
      </ul>
      </div>
  </div>
</nav>


<div class="row">
	<div class="col-lg-6 col-md col-sm col-12 container">
		<div class="main_text">
			<div class="header">
				<h3 style="text-align: center;"><strong>login to Exam System</strong></h3><hr>
			</div>

			<div class="l-part">
				<form action=""method="post">
					<input type="email" name="email" placeholder="Email" required="required" class="form-control input-md"><br>

					<div class="overlap-text">
					<input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md"><br>

					<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">Forgot?</a>
					</div>



					<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Create Account"  href="signup.php">Dont't have an account?</a><br><br>

					<center><button id="signin" class="btn btn-info" name="login">Login</button></center>
                    

				   <?php  
                   /*here login.php but all functionality is done in login.php page*/
				   include("login.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>