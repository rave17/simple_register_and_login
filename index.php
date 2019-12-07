<?php
include("includes/header.php");
?>

<div class="container col-md-4">
<h2 class="mx-auto p-4" style="width: 250px;">Please Sign In</h2>
<hr>
<form method="post">
  
  <div class="form-group">
    <label for="name">Username</label>
    <input type="text" class="form-control" id="" name="user" placeholder="Enter your username">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="" name="pass" placeholder="Insert your password">
  </div>
  
  <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
  <a href="signin.php"><h6 class="mx-auto p-4" style="width: 230px;">First time? Please Signin</h6></a>

</form>
</div>

<?php
include("includes/footer.php");
?>
