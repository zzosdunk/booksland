<!--  header for admin webpages -->
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
        <a class="nav-link" href="index.php">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Books
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="books.php">List books</a>
          <a class="dropdown-item" href="add_book.php">Add book</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="users.php">Users</a>
      </li>

	    <li class="nav-item">
        <a class="nav-link" href="signup.php">Log-out</a>
      </li>
<!-- ADD A SEARCH METHOD
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
-->
  </div>
  <button type="button" class="btn btn-outline-danger" disabled>ADMIN MODE</button>
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
        <a class="nav-link" href="../signin.php">Login<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../signup.php">Register now</a>
      </li>
  </div>
	</nav>
    <?php endif; ?>

</header>
</html>
