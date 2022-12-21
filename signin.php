<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">

	<meta name="viewport" content="width=device-width">

	

	<title>Signin</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style type="text/css">
		
		body{
			overflow-x: hidden;
		}

		.main-content{
			width: 50%;
			height: 100%;
			margin: 10px auto;
			background-color: #fff;
			border:2px solid #e6e6e6;
			padding: 40px 50px; 
		}

		.header{
			border:0px solid #000;
			margin-bottom: 5px;
		}

		.well{
			background-color: #187FAB;
		}

		#signin{
			width: 60%;
			border-radius: 30px;
		}

		.overlap-text{
			position: relative;
		}

		.overlap_text a{
			position: absolute;
			top: 8px;
			right: 10px;
			font-size: 14px;
			text-decoration: none;
			font-family: 'Overpass Mono',monospace;
			letter-spacing: -1px;
		}
	</style>

</head>
<body>
<div class="mynav">


<nav class="navbar navbar-expand-lg navbar-light bg-light mynav">
  <a class="navbar-brand" href="#">Exam System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="signin.php?va=2">Exam-Controller</a>
         
          <a class="dropdown-item" href="signin.php?va=3">Teacher</a>
          <a class="dropdown-item" href="signin.php?va=1">Student</a>
         
      </li>
    
    </ul>
  
  </div>
</nav>

	</div>

<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
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

					<center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>
                    

				   <?php  
                   /*here login.php but all functionality is done in login.php page*/
				   include("login.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>