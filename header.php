<?php

include("includes/connection.php");

include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">

	<meta name="viewport" content="width=device-width">

	

	

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  
    <style type="text/css">
        #search{
            margin-left: 600px;
        }
    </style>
    
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">


        <?php    session_start();
                $user=$_SESSION['user_email'];
                $get_user="select * from users where user_email='$user'";
                $run_user=mysqli_query($con,$get_user);
                $row=mysqli_fetch_array($run_user);

                $user_id=$row['user_id'];
                $user_name=$row['user_name'];
                $first_name=$row['f_name'];
                $last_name=$row['l_name'];
                $describe_user=$row['describe_user'];
                $Relationship_status=$row['Relationship'];
                $user_pass=$row['user_pass'];
                $user_email=$row['user_email'];
                $user_country=$row['user_country'];
                $user_gender=$row['user_gender'];
                $user_birthday=$row['user_birthday'];
                $user_image=$row['user_image'];
                $user_cover=$row['user_cover'];
                $recovery_account=$row['recovery_account'];
                $register_date=$row['user_name'];
                $user_name=$row['user_reg_date'];
                

                $user_posts="select * from posts where user_id='$user_id'";
                $run_posts=mysqli_query($con,$user_posts);

                $posts=mysqli_num_rows($run_posts);


               
                ?>


      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="job.php">Job</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="member.php">FindPeople</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='messages.php?u_id=new'>Messagse</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href='profile.php?<?php echo "u_id=$user_id" ?>'>All</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href='my_post.php?<?php echo "u_id=$user_id" ?>'>My Post</a><!--href='' ababe korte hobe na hole colbe na-->
          <a class="dropdown-item" href="edit_profile.php?<?php echo 'u_id=$user_id' ?>">Edit Account</a>
          <a class="dropdown-item" href="logout.php">Logout</a>


        </div>
      </li>
    </ul>

    <form action="results.php" method="GET" id="search" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search"name="search_query" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
    </form>
  </div>
</nav>


<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>










