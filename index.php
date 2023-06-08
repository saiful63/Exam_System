<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Front Page</title>

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Oswald&display=swap" rel="stylesheet">


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
    <a class="navbar-brand" href="#">Place for student & teacher</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Registration</a>
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
    <div class="col-lg col-md col-sm col-12">
      <div class="container main_text">
        <h2 class="hd1">Notify the teacher of their exam hall duty and maintain an easy attendance process for students.</h2>
        <p class="pr1">Easily enable exam invigilators to conduct examinations in the allotted exam hall with a configurable seating plan and marking student attendance. Dynamic process for exam rooms. Rapid registration of students for the current semester and update facility for the upcoming semester. Simply manage the whole system by the exam controller according to the teacher and student activity.</p>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>






