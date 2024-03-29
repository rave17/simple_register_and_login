<?php
include("includes/conect.php");
include("includes/header.php");
?>

<div class="container-fluid col-md-8">
<h2 class="mx-auto pt-2">Please complete form</h2>
<hr>

<form action="includes/save.php" method="POST">
  <div class="row">
    <div class="col">
    <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Insert your name" required>
    </div>
    <div class="col">
    <label for="lastname">Last name</label>
      <input type="text" class="form-control" id="in_name" name="lastname" placeholder="Insert your last name" required>
    </div>
  </div>
  <div class="row pt-4">
    <div class="col">
    <label for="">Username</label>
      <input type="text" class="form-control" id="in_lastname" name="username" placeholder="Create a username" required>
    </div>
    <div class="col">
    <label for="email">Email</label>
      <input type="email" id="in_email" class="form-control" name="email" placeholder="Email@email.com" required>
    </div>
  </div>
  <div class="row pt-4">
    <div class="col">
    <label for="pass">Password</label>
      <input type="password" class="form-control" id="in_pass" name="pass" placeholder="Insert password" required>
    </div>
    <div class="col">
    <label for="confPass">Confirm password</label>
      <input type="password" class="form-control" id="id_confPass" name="confPass" placeholder="Confirm password" required>
    </div>
  </div>

  <button type="submit" class="btn btn-primary btn-block mt-4" name="register" id="btnSubmit">Register</button>
</form>
</div>

<?php
  include("includes/footer.php");
?>

