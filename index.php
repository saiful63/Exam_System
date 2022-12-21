<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Front Page</title>

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="style/main.css">

    <style>
      body {
        background-color: black;
        margin-top: 5rem;
          }



/*Nabvar*/

.mynav {
  position: relative;
  background-image: linear-gradient(
      rgba(102, 51, 0, 0.6),
      rgba(153, 102, 51, 0.2)
    ),
    url("images/bg-1.jpg");
  background-repeat: no-repeat;
  /*height: 948px;*/
  
  height: 80vh;
  width: 100%;
  padding-top: 3vh;
  background-position: center;
  background-size: cover;
}

.navbar {
  background-color: transparent !important;
 
}

.navbar-brand {
  position: absolute;
  margin-top: -672px!important;
  color: #ed490d !important;
  font-weight: bolder;
  font-size: 1.3em;
}
.navbar-nav {
position: absolute;
margin-top: -660px!important;
margin-left: 311px !important;
}
.nav-item .nav-link {
  margin-left: 20px !important;
  font-weight: bolder;
  text-transform: uppercase;
  font-size: 1rem;
  /*color: rgb(180, 61, 61) !important;*/
  color: #eb602d !important;
}

/*dropdown item*/
.dropdown-item{
  font-family: "Arvo", serif;
  font-size: 1rem!important;
  line-height: 1.388;
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Signup</a>
      </li>
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

<!--Hero section-->
<div class="container">
  <h1 class="hd1">Notify the teacher their exam hall duity and maintain the Attendance process easy for student.</h1>
  <div class="row">
   <div class="col-md-11">
    <p class="text-white pr1">Easily enable exam invigilator to conduct the examination in the allotted exam hall with 
      configurable seating plan and marking of student  attendance. Dynamic process
      for exam rooms. Rapid Registration of Students for current semester and updation facility for upcoming semester.Simply,manage the whole
      system by exam controller according to the teacher and student activity.
    </p>
     
   </div>
   <div class="col-md-1">

   </div>
  </div>
</div>


</div>

<!--Modal-->

<!-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>






