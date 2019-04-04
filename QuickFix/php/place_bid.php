<?php
session_start();
require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['job']) && isset($_POST['worker']) && isset($_POST['amount']))
    {
      $job=$_POST['job'];
      $worker=$_POST['worker'];
      $amount=$_POST['amount'];
      $query = "INSERT INTO `bids`( `job_id`, `worker_id`, `amount`) VALUES ($job,$worker,$amount)";
      $result = mysqli_query($connection, $query);
      if($result){
            $msg = "bid placed Successfully.";
            header('Location:../worker/pending-jobs.php?msg='.$msg);
          }else
          {
              $msg ="Failed to place bid";
              header('Location:../worker/index.php?msg='.$msg);

        }


          }



    ?>
