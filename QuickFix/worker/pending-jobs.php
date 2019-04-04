<?php include'header.php';?>

<div class="container">
<div class="panel-body table-responsive">

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Requirement</th>
      <th scope="col">Location</th>
      <th scope="col">Descreption</th>
      <th scope="col">Bid Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php
            $worker=$_SESSION['user'];
            require('../php/connect.php');
            $query = "SELECT * FROM jobs,bids WHERE jobs.job_id=bids.job_id AND bids.worker_id=$worker";
            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row['title']?></td>
      <td><?php echo $row['service']?></td>
      <td><?php echo $row['location']?></td>
      <td><?php echo $row['descreption']?></td>
      <td><?php echo $row['amount']?></td>
      <td>
    <a class="btn btn-outline-primary" href="../php/delete_bid.php?id=<?php echo $row['bid_id']?>"> Delete</a>
  </td>
    </tr>
    <?php
           }
           ?>


  </tbody>
</table>
</div>
</div>
<?php include'footer.php';?>
