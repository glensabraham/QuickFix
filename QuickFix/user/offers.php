<?php include'header.php'; ?>

<div class="container">
<div class="panel-body table-responsive">

<table class="table table-dark">
<thead>
  <tr>
    <th scope="col">Title</th>
    <th scope="col">Requirement</th>
    <th scope="col">Location</th>
    <th scope="col">Descreption</th>
  </tr>
</thead>
<tbody>
  <?php

          if(!isset($_GET['id']))
          {
            header('location:pending-jobs.php');
          }
          else {

          $id=$_GET['id'];
          require('../php/connect.php');
          $query = "SELECT * FROM jobs WHERE job_id=$id ";
          $result = mysqli_query($connection, $query);
          while($row = mysqli_fetch_assoc($result)) {
  ?>
  <tr>
    <td><?php echo $row['title']?></td>
    <td><?php echo $row['service']?></td>
    <td><?php echo $row['location']?></td>
    <td><?php echo $row['descreption']?></td>

  </tr>
  <?php
         }
       }
         ?>
</tbody>
</table>
<br>
<table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Worker id</th>
      <th scope="col">Amount</th>

    </tr>
  </thead>
  <tbody>
    <?php
            require('../php/connect.php');
            $query = "SELECT * FROM bids WHERE job_id=$id";
            $result = mysqli_query($connection, $query);
            $i=1;
            while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $row['worker_id']?></td>
      <td><?php echo $row['amount']?></td>
      <td><a class="btn btn-primary" href="../php/fix_bid.php?id=<?php echo $row['bid_id'];?>&job_id=<?php echo $row['job_id'];?>&worker=<?php echo $row['worker_id'];?>&user=<?php echo $_SESSION['user'];?>&amount=<?php echo $row['amount'];?>">Fix</a>
    <a class="btn btn-outline-primary" href="../php/delete_bid.php?id=<?php echo $row['bid_id']?>&module=user"> Delete</a></td>
    </tr>
    <?php
        $i++;
           }

           ?>
  </tbody>
</table>
</div>
</div>
<?php include'footer.php';?>
