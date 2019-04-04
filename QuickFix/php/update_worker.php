<?php
session_start();
require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['user_name']) && isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['password'])&& isset($_POST['address1'])&& isset($_POST['address2'])&& isset($_POST['city'])&& isset($_POST['state'])
    && isset($_POST['pin']))
    {
        $uid=$_SESSION['user'];
        echo $uid;
        $username = $_POST['user_name'];
	      $email = $_POST['email'];
        $mobile = $_POST['phone'];
        echo $mobile;
        $password = $_POST['password'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pin = $_POST['pin'];
        $work=$_POST['work'];

        $query = "UPDATE `worker` SET `user_name`='$username',`email`='$email',`mobile`=$mobile,`password`='$password',`address1`='$address1',`address2`='$address2',`city`='$city',`state`='$state',`pin`=$pin,`work`='$work'
        where worker_id=$uid";
        echo $query;
        mysqli_query($connection, $query);

          header('location:../worker/edit-profile.php');





          }



    ?>
