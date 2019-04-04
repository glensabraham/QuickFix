<?php

if(isset($_GET['id']))
{
  require('connect.php');
  session_start();
  $id=$_GET['id'];

  $query = "DELETE  FROM `bids` WHERE bid_id=$id";
  //delete from offers table too
  mysqli_query($connection, $query);
  $module=$_GET['module'];
  if($module=='user')
  {
    header('location:../user/index.php');
  }
  else{
  header('location:../worker/index.php');  
  }

}

?>
