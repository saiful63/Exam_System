<?php
$con=mysqli_connect("localhost","root","","exam");
//echo $_POST['pr_id'];
if(isset($_POST['pr_id'])){
  $pr_id=$_POST['pr_id'];
 $update="UPDATE `users` SET `present`='P' WHERE student_id='$pr_id'";
 $query=mysqli_query($con,$update);
 if($query){
    echo"<span style={color:green;font:50px}>Prsent Counted.</span>";
 }
}
if(isset($_POST['ab_id'])){
  
  $ab_id=$_POST['ab_id'];
  $update="UPDATE `users` SET `absent`='A' WHERE student_id='$ab_id'";
 $query=mysqli_query($con,$update);
 if($query){
    echo"<span style={color:green;font:50px}>Absent Counted.</span>";
 }
}

?>


 