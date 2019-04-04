<?php include'header.php' ?>


<div class="container">


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>
  <tbody>
    <?php
            require('../php/connect.php');
            $query = "SELECT * FROM users";//change to 0
            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row['user_id']?></td>
      <td><?php echo $row['user_name']?></td>
      <td><?php echo $row['city']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['mobile']?></td>
      <td><a class="btn btn-primary" href="../php/ban_user.php?id=<?php echo $row['user_id']?>">Ban</a>
    <a class="btn btn-outline-primary" href="../php/delete_user.php?id=<?php echo $row['user_id']?>"> Delete</a>
  </td>
    </tr>
    <?php
           }
           ?>

  </tbody>
</table>
</div>
<?php include'footer.php';?>
