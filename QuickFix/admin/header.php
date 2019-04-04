
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
session_start();
if(!isset($_SESSION['user'])&&!isset($_SESSION['name']))
  header("location:../admin/index.php");
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <meta charset="utf-8">
    <title>QuickFix</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/master.css">
    <script src="../bootstrap/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="../css/master.css">
    <script src="../bootstrap/bootstrap.js">

    </script>
  </head>
  <body>

    <nav  class="navbar   navbar-expand-lg navbar-dark bg-dark">
      <div class="container">


  <a  style="margin-right:600px;"class="navbar-brand" href="index.php"><h3>QuickFix</h3></a>
  <button style="margin:0px;"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">



      <li style="margin-right:24px;" class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Workers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="worker_requests.php">Requests</a>
          <a class="dropdown-item" href="worker_list.php">Workers List</a>

        </div>
      </li>

      <li style="margin-right:24px;" class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="user_list.php">Users list</a>
        </div>
        <li style="margin-right:24px;" class="nav-item dropdown">
          <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Jobs
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="job_list_completed.php">Completed</a>
            <a class="dropdown-item" href="job_list_pending.php">Pending</a>
          </div>

      </li>

      <li style="margin-right:24px;" class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../php/logout.php">Logout</a>

        </div>

    </li>



    </ul>
    </div>
  </div>
</div>
</nav>
