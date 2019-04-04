<?php include'header.php';?>
<div class="container jumbotron">


  <form method="post" action="../php/post_job.php">
    <div class="form-group" >
      <label for="Title">Job Title</label>
      <input type="text" name="title" class="form-control" id="Title">
    </div>
    <div class="form-group">
      <label for="ServiceRequired">Service Required</label>
      <select class="form-control" name="service" id="ServiceRequired">
        <option>Plumber</option>
        <option>Electrician</option>
        <option>Driver</option>
        <option>Security</option>
      </select>
    </div>
    <div class="form-group">
      <label for="Location">Location</label>
      <select class="form-control" name="location" id="Location">
        <option>Kochi</option>
        <option>Coimbatore</option>
          </select>
    </div>

    <div class="form-group">
      <label for="Descreption">Job Descreption</label>
      <textarea class="form-control" id="Descreption" name="descreption" rows="3"></textarea>
    </div>
  <input type="submit" class="btn btn-primary" name="post" value="Post">
  </form>
</div>
<?php include'footer.php';?>
