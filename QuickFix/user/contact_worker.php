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
  </tr>
</thead>
<tbody>
  <?php
          if(!isset($_GET['id'])&&!isset($_GET['job'])&&!isset($_GET['worker']))
          {
            header('location:pending-jobs.php');
          }
          else {

          $id=$_GET['job'];
          $worker=$_GET['worker'];
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

      <th scope="col">Worker id</th>
      <th scope="col">Worker name</th>
      <th scope="col">Worker Contact</th>

    </tr>
  </thead>
  <tbody>
    <?php
            require('../php/connect.php');
            $query = "SELECT * FROM worker WHERE worker_id=$worker";
            $result = mysqli_query($connection, $query);
            $i=1;
            while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row['worker_id']?></td>
      <td><?php echo $row['user_name']?></td>
      <td><?php echo $row['mobile']?></td>

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
