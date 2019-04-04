<?php include'header.php';


?>

<div class="container">
  <div class="panel-body table-responsive">
  <?php
          require('../php/connect.php');
          $id=$_SESSION['user'];
          $query1 = "SELECT * FROM on_deal WHERE worker_id=$id and status='pending'" ;
          $result1 = mysqli_query($connection, $query1);
          while($row = mysqli_fetch_assoc($result1)) {
            $user_id=$row['user_id'];
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


            $query = "SELECT * FROM jobs WHERE job_id=$jid" ;
            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row['title']?></td>
      <td><?php echo $row['service']?></td>
      <td><?php echo $row['location']?></td>
      <td><?php echo $row['descreption']?></td>
      <td><a class="btn btn-primary" href="contact_user.php?id=<?php echo $deal_id;?>&job=<?php echo $row['job_id']?>&user=<?php echo $user_id?>">Contact User</a>
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
</div>
<?php include'footer.php';?>
