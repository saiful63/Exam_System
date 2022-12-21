<?php
$con=mysqli_connect("localhost","root","","exam");

   if (isset($_POST['courseId']))
            {
            $pair = explode("/", $_POST["courseId"]);

            $name   = $pair[0];
            $value = $pair[1];

            //print "Key: $name<br />";
            //print "Value: $value<br />";

            
            }


if(isset($_POST['courseId']) && !empty($_POST['courseId'])){
    $query="select * from course where user_type=".$name;
    $result=$con->query($query);
    //$result->num_rows;
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        echo'<option value="'.$row['user_type'].'/'.$row['course_detail'].'">'.$row['course_detail'].'</option>';
      }
      
    }else{
         echo'<option value="">State not available</option>';
      }
}

// $dear=$_POST['courseId'];
//  $pir = explode("/", $_POST["courseId"]);

//             $name   = $pir[0];
//             $value = $pir[1];

//             $as_t="select * from routine where semester=".$name;
//             $res=$con->query($query);
//             $raw=$result->fetch_assoc();

?>