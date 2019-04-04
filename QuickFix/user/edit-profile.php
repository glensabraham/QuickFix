<?php include'header.php';?>
<div style="margin-top:40px;"class="container jumbotron">
  <h4>User registration</h4><br>
  <form method="post"action="../php/update_user.php">
    <?php require('../php/connect.php');
      $uid=$_SESSION['user'];
      $query = "SELECT * FROM users WHERE user_id=$uid";
      $result = mysqli_query($connection, $query);
      $row = mysqli_fetch_assoc($result);

    ?>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputUsername">Username</label>
        <input type="text" name="user_name" class="form-control" id="inputUsername" value="<?php echo $row['user_name']?>" pattern="[A-Za-z0-9]+" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail">Email address</label>
        <input type="email" name="email"class="form-control" id="inputEmail" value="<?php echo $row['email']?>" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputTel">Phone</label>
        <input type="tel" name="phone" class="form-control" id="inputTel" value="<?php echo $row['mobile']?>"  pattern="[789][0-9]{9}" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword4" value="<?php echo $row['password']?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address1</label>
      <input type="text" name="address1"class="form-control" id="inputAddress" value="<?php echo $row['address1']?>"  required>
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" name="address2" class="form-control" id="inputAddress2" value="<?php echo $row['address2']?>"  required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <select id="inputState" name="city" class="form-control" value="<?php echo $row['city']?>"  required >

          <option>Kochi</option>
          <option>Coimbatore</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" name="state" class="form-control" value="<?php echo $row['state']?>"  required >

          <option>Kerala</option>
          <option>Tamil Nadu</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">PIN</label>
        <input type="text" name="pin"class="form-control" id="inputZip" value="<?php echo $row['pin']?>"pattern="[0-9]{6}" required>
      </div>
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="update">
</form>

</div>
<?php include'footer.php';?>
