<?php
if(isset($_GET['email']) && isset($_GET['verified']))
{
  $ver=$_GET['verified'];
  $mail=$_GET['email'];
  echo $ver;
  echo $mail;
  require('connect.php');





  $query="UPDATE `users` SET `verified`=$ver WHERE `email`='$mail'";
  mysqli_query($connection, $query);



  header('location:../user_login.php');
}
