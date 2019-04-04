<?php
session_start();
if(!isset($_SESSION['user'])&&!isset($_SESSION['name']))
  header("location:../user_login.php");
?>
<html lang="en" dir="ltr">
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


      <li style="margin-right:24px;">
        <a class="btn btn-primary" href="index.php">View jobs</a>
      </li>
      <li style="margin-right:24px;" class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My jobs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="pending-jobs.php">Pending</a>
          <a class="dropdown-item" href="completed-jobs.php"> Completed</a>
          <a class="dropdown-item" href="on_deal.php">On Deal</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account,<?php echo $_SESSION['name']?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
          <a class="dropdown-item" href="../php/logout.php">Logout</a>
        </div>
      </li>

    </ul>
    </div>
  </div>
</div>
</nav>
