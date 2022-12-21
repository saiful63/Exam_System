  <?php
   include("includes/connection.php");
   

                                    if(isset($_GET['delete'])){
                                        $delid=$_GET['delete'];
                                        $del="delete from `assign_teacher` where id='$delid'";
                                        $delquery=mysqli_query($con,$del);
                                        if($delquery){
                                            ?>
                                        <script>
                                        
                                        alert('Do you want to delete..')
                                        
                                        window.location.href = "see_teacherinv.php";
                                         </script>
                                      <?php      
                                            
                                        }
                                    }
                                    ?>