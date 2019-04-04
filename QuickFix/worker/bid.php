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
          if(!isset($_GET['id']))
          {
            header('location:pending-jobs.php');
          }
          else {

          $id=$_GET['id'];

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
<form method="post" action="../php/place_bid.php"class="form-inline">
  <div class="form-group mx-sm-3 mb-2">
    <label for="amount" class="sr-only">Amount</label>
    <input type="hidden" name="job" value="<?php echo $_GET['id'];?>">
    <input type="hidden" name="worker" value="<?php echo $_SESSION['user'];?>">
    <input name="amount" type="text" class="form-control"pattern="[0-9]+" placeholder="Amount">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>
</div>
<?php include'footer.php';?>
