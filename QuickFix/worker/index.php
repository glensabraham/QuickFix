<?php include'header.php'  ?>


<div class="container">
  <br><br>
  <form>
  <div class="form-row">
    <div class="col">
      <select class="form-control" name="location" id="Location" required>
        <option>Select</option>
        <option>Kochi</option>
        <option>Coimbatore</option>
          </select>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-primary mb-2">sort</button>
    </div>
  </div>
</form>




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
        if(isset($_GET['location']))
        {
           $id=$_SESSION['user'];
            $location=$_GET['location'];
            require('../php/connect.php');
            $query = "SELECT * FROM jobs WHERE job_id NOT IN (SELECT job_id FROM bids where worker_id=$id) and status='pending' and location='$location'";
            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row['title']?></td>
      <td><?php echo $row['service']?></td>
      <td><?php echo $row['location']?></td>
      <td><?php echo $row['descreption']?></td>
      <td><a class="btn btn-primary" href="bid.php?id=<?php echo $row['job_id']?>&user=<?php echo $_SESSION['user']?>">Bid</a>

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
<?php include'footer.php' ?>
