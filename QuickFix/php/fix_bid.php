<?php

if(isset($_GET['id'])&&isset($_GET['job_id'])&&isset($_GET['worker'])&&isset($_GET['user'])&&isset($_GET['amount']))
{
  require('connect.php');
  $id=$_GET['id'];
  $job_id=$_GET['job_id'];
  $worker=$_GET['worker'];
  $user=$_GET['user'];
  $amount=$_GET['amount'];

  $query="INSERT INTO `on_deal`(`job_id`, `worker_id`, `user_id`, `amount`) VALUES ($job_id,$worker,$user,$amount)";
  mysqli_query($connection, $query);

  $query="UPDATE `jobs` SET `status`='on_deal' WHERE `job_id`=$job_id";
  mysqli_query($connection, $query);

  $query = "DELETE  FROM `bids` WHERE bid_id=$id";
  mysqli_query($connection, $query);

  header('location:../user/index.php');

}

?>
