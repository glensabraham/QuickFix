<?php include'header.php';


?>

<div class="container">
  <?php
          require('../php/connect.php');
          $id=$_SESSION['user'];
          $query1 = "SELECT * FROM on_deal WHERE user_id=$id " ;
          $result1 = mysqli_query($connection, $query1);
          while($row = mysqli_fetch_assoc($result1)) {
            $worker_id=$row['worker_id'];
            $deal_id=$row['deal_id'];
            $jid=$row['job_id'];

  ?>

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
            require('../php/connect.php');
            $jid=$row['job_id'];

            $query = "SELECT * FROM jobs WHERE job_id=$jid" ;
            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)) {

    ?>
    <tr>
      <td><?php echo $row['title']?></td>
      <td><?php echo $row['service']?></td>
      <td><?php echo $row['location']?></td>
      <td><?php echo $row['descreption']?></td>
      <td><a class="btn btn-primary" href="contact_worker.php?id=<?php echo $deal_id;?>&job=<?php echo $jid;?>&worker=<?php echo $worker_id;?>">Contact worker</a>
    <a class="btn btn-outline-primary" href="../php/delete_job.php?id=<?php echo $row['job_id']?>&module=worker"> Delete</a>
  </td>
    </tr>
    <?php
           }
         }
           ?>

  </tbody>
</table>
</div>
<?php include'footer.php';?>
