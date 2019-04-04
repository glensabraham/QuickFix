<?php
session_start();
require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['title']) && isset($_POST['service'])&& isset($_POST['location'])&& isset($_POST['descreption']))
    {
        $user=$_SESSION['user'];
        $title = $_POST['title'];
	      $service = $_POST['service'];
        $location = $_POST['location'];
        $descreption = $_POST['descreption'];
        echo $title;

        $query = "INSERT INTO `jobs`(`user_id`, `title`, `service`, `location`, `descreption`) VALUES ($user,'$title','$service','$location','$descreption')";
          $result = mysqli_query($connection, $query);
          if($result){
              $msg = "Job Posted Successfully.";
                header('Location:../user/index.php?msg='.$msg);
          }else
          {
            $msg = "Job Posting Unsuccessfull ";
              header('Location:../user/index.php?msg='.$msg);

        }


          }



    ?>
