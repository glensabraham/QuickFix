<?php include'header.php' ?>


<div class="container">


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Work</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>
  <tbody>
    <?php
            require('../php/connect.php');
            $query = "SELECT * FROM worker WHERE verified=1";//change to 0
            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row['worker_id']?></td>
      <td><?php echo $row['user_name']?></td>
      <td><?php echo $row['work']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['mobile']?></td>
      <td><a class="btn btn-primary" href="../php/ban_worker.php?id=<?php echo $row['worker_id']?>">Ban</a>
    <a class="btn btn-outline-primary" href="../php/delete_worker.php?id=<?php echo $row['worker_id']?>"> Delete</a>
  </td>
    </tr>
    <?php
           }
           ?>

  </tbody>
</table>
</div>
<?php include'footer.php';?>
