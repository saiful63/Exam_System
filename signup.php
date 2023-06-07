<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">

	<meta name="viewport" content="width=device-width">

	

	<title>Signup</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<!--Bootstrap 5-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body>


<div class="row">
	<div class="col-lg-6 col-md col-sm col-12 container">
		<div class="sign_text">
			<div class="header">
				<h3 style="text-align: center;"><strong>Join into the portal</strong></h3><hr>
			</div>

			<div class="">
				<form action="signup.php" method="post" enctype="multipart/form-data">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="password"type="password" class="form-control" placeholder="Password" name="u_pass" required="required">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="email" type="email" class="form-control" placeholder="Email" name="u_email" required="required">
					</div><br>
                   <div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="mobile" type="text" class="form-control" placeholder="Mobile" name="u_mobile" required="required">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="img" type="file" class="form-control"  name="u_image" required="required">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select id="status_user" onchange="changeStatus()"class="form-control input-md" name="u_type" required="required">
							<option>1 as Student , 2 as Exam-Controller , 3 as Teacher</option>
							<option value="1">1</option>
							<option value="2">2</option>
                            <option value="3">3</option>
							
						</select>
					</div><br>

				 <div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control input-md" name="u_gender" required="required">
							<option>Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
							
						</select>
					</div><br>

					

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calender"></i></span>
						<input type="date" class="form-control input-md" placeholder="Email" name="u_birthday" required="required">
					</div><br>

                    <div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="id1" type="text" class="form-control" placeholder="Student Id" name="u_id">
					</div><br>

				    <div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="ps" type="text" class="form-control" placeholder="Position(Lecturer or else)" name="u_pos">
					</div><br>
                    <div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="ss" type="text" class="form-control" placeholder="Session" name="u_ss">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select id="dp"class="form-control" name="u_dept" required="required">
							<option>Department</option>
							<option>ICE</option>
							<option>CSTE</option>
							<option>EEE</option>
						</select>
					</div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select id="hl"class="form-control" name="u_hall" required="required">
							<option>Hall</option>
							<option>ASH</option>
							<option>MUH</option>
							<option>BKH</option>
						</select>
					</div>

					<br>


			      <div class="input-group" id="sbm">
					<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Signin"  href="index.php">Already have an account?</a>

					<center><input type="submit" id="signup" class="btn btn-info btn-sm ml-5" name="sign_up"></center>

				  </div>

				  

					
					<?php  include("insert_user.php");?>
				</form>
			</div>
		</div>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>