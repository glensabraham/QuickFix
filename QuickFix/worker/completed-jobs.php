<?php include'header.php';


?>

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
    <?php   $id=$_SESSION['user'];

            require('../php/connect.php');
            $query1 = "SELECT * FROM on_deal WHERE status='completed' and worker_id=$id";
            $result1 = mysqli_query($connection, $query1);
            while($row = mysqli_fetch_assoc($result1)) {
              $jobid=$row['job_id'];

              $query = "SELECT * FROM jobs WHERE status='completed' and job_id=$jobid";
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
</div>
</div>
<?php include'footer.php';?>
