<!--  header for not admin webpages -->
<html>
<header>

<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">


    <?php if (isset($_SESSION['user_login'])): ?>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.php"><img src="media/Bookslogo.png"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="books.php">Books</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="signup.php">Log-out</a>
      </li>
  </div>
	</nav>

    <?php else: ?>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.php"><img src="media/Bookslogo.png"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../bookstore/signin.php">Login<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../bookstore/signup.php">Register now</a>
      </li>
  </div>
	</nav>
    <?php endif; ?>

</header>
</html>
