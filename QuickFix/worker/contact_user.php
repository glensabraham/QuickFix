<?php include'header.php';?>
<div class="container">


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
          if(!isset($_GET['id'])&&!isset($_GET['job'])&&!isset($_GET['user']))
          {
            header('location:pending-jobs.php');
          }
          else {

          $id=$_GET['job'];
          $user=$_GET['user'];
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

      <th scope="col">User id</th>
      <th scope="col">User name</th>
      <th scope="col">User Contact</th>

    </tr>
  </thead>
  <tbody>
    <?php
            require('../php/connect.php');
            $query = "SELECT * FROM users WHERE user_id=$user";
            
            $result = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row['user_id']?></td>
      <td><?php echo $row['user_name']?></td>
      <td><?php echo $row['mobile']?></td>

    </tr>
    <?php

           }

           ?>
  </tbody>
</table>
</div>
<?php include'footer.php';?>
