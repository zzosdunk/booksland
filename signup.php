<!--  db connection and logout destroing the current session -->
<?php
require_once 'logic/db.php';
session_destroy();
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once 'parts/head.php'; ?>
<?php require_once 'parts/header.php'; ?>
</head>
<body>

<div class="container" style="margin: 0">
  <div class="row">
    <div class="col-sm-4">
      <h3>Sign-in</h3>
    <form action="logic/reg.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="login" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>
<div>

<p>Have you already an account?
<a href="signin.php">Log-in</a></p>
</div>
	</div>  
  </div>
</div>
<?php require_once 'parts/footer.php'; ?>
</body>
</html>