<?php
require('connect.php');
$module=$_POST['entity'];

if(isset($_POST['user_id']) && isset($_POST['password']))
{
  $user=$_POST['user_id'];
  $password=$_POST['password'];

  if($module=='user')
  {
    $query = "SELECT * FROM `users` WHERE email='$user' and password='$password' and verified=1";
    $result = mysqli_query($connection, $query);
    $count=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count==1){

       session_start();
       $_SESSION['user']=$row['user_id'];
       $_SESSION['name']=$row['user_name'];

      header("location:../user/index.php");

      }
      else {
      echo "Wrong Username or Password";
      }

      ob_end_flush();
    }

    if($module=='worker')
    {
      $query = "SELECT * FROM `worker` WHERE email='$user' and password='$password'";
      $result = mysqli_query($connection, $query);
      $count=mysqli_num_rows($result);
      $row=mysqli_fetch_assoc($result);
      $verified=$row['verified'];
      $location=$row['city'];

        // If result matched $myusername and $mypassword, table row must be 1 row


        if($count==1)
        {

        if($verified==1)
        {
         session_start();
         $_SESSION['user']=$row['worker_id'];
         $_SESSION['name']=$row['user_name'];

        header("location:../worker/index.php?location=".$location);
         }
         else{echo "Verification pending!";
              }
          }

      else
      {
        echo "Wrong Username or Password or verification pending";
      }

        ob_end_flush();
      }

    }


 ?>
