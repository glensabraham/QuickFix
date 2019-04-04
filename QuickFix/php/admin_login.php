<?php
echo $_POST['user_id'];
require('../php/connect.php');
if(isset($_POST['user_id']) && isset($_POST['password']))
{
  $user=$_POST['user_id'];
  $password=$_POST['password'];
echo $user;

    $query = "SELECT * FROM `admin` WHERE username='$user' and password='$password'";
    $result = mysqli_query($connection, $query);
    $count=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count==1){

       session_start();
       $_SESSION['user']=$row['admin_id'];
       $_SESSION['name']=$row['username'];

      header("location:../admin/cp.php");

      }
      else
      {
        echo "Wrong Username or Password";
      }
    }
      ?>
