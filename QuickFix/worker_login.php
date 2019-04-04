<?php include'header.php' ?>

  <div style="margin-top:8%;" class="container jumbotron">
<h4 style="margin-bottom:24px;">Worker Login</h4>
<form method="post" action="php/login.php">
  <input type="hidden" name="entity" value="worker">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="user_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit"  class="btn btn-primary">Login</button>

</form>
  </div>
<?php include'footer.php' ?>
