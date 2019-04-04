<?php
if(isset($_GET['id']) && isset($_GET['status']))
{
  require('connect.php');
  session_start();
  $id=$_GET['id'];
  $status=$_GET['status'];
  $query = "UPDATE `on_deal` SET `status`='$status' WHERE `job_id`=$id";
  //delete from offers table too
  mysqli_query($connection, $query);
  $query = "UPDATE `jobs` SET `status`='$status' WHERE `job_id`=$id";
  //delete from offers table too
  mysqli_query($connection, $query);

  header('location:../user/pending-jobs.php');
}

?>
