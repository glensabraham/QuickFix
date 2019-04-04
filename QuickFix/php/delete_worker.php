<?php
if(isset($_GET['id']))
{
  require('connect.php');
  session_start();
  $id=$_GET['id'];

  $query = "DELETE  FROM `worker` WHERE job_id=$id";
  //delete from offers table too
  mysqli_query($connection, $query);

  header('location:../admin/cp.php');
}

?>
