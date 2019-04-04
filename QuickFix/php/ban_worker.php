<?php

if(isset($_GET['id']))
{
  require('connect.php');
  $id=$_GET['id'];




  $query="UPDATE `worker` SET `verified`=0 WHERE `worker_id`=$id";
  mysqli_query($connection, $query);

  

  header('location:../admin/cp.php');

}

?>
