<?php include'header.php' ?>


<div class="container">


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">User</th>
      <th scope="col">Work</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
    <?php
            require('../php/connect.php');
            $query = "SELECT * FROM jobs where status='completed'";//change to 0
            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row['job_id']?></td>
      <td><?php echo $row['title']?></td>
      <td><?php echo $row['user_id']?></td>
      <td><?php echo $row['service']?></td>
      <td><?php echo $row['location']?></td>
    
    </tr>
    <?php
           }
           ?>

  </tbody>
</table>
</div>
<?php include'footer.php';?>
