<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once 'parts/head.php'; ?>
<?php require_once 'parts/header.php'; ?>
</head>
<body>

<div class="container pos" style="margin:0">
  <div class="row">
    <div class="col-sm-4">
      <h3>Log-in</h3>

    <form action="logic/autr.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="login" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<p>Are you not registered yet?
<a href="signup.php">Register now</a></p>
	</div>  
  </div>
</div>
<?php require_once 'parts/footer.php'; ?>
</body>
</html>
