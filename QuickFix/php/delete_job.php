<?php
if(isset($_GET['id']))
{
  require('connect.php');
  session_start();
  $id=$_GET['id'];

  $query = "DELETE  FROM `jobs` WHERE job_id=$id";
  //delete from offers table too
  mysqli_query($connection, $query);
  $query = "DELETE  FROM `bids` WHERE job_id=$id";
  //delete from offers table too
  mysqli_query($connection, $query);
  $query = "DELETE  FROM `on_deal` WHERE job_id=$id";
  //delete from offers table too
  mysqli_query($connection, $query);
  header('location:../user/pending-jobs.php');
}

?>
