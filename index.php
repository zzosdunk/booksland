<!-- connection to the db -->
<?php require_once 'logic/db.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Booksland</title>
  <?php require_once 'parts/head.php'; ?>

  <style>
    .dimension{
      width:820px;
      height:312px;
      margin: 5px auto;
    }
  </style>
</head>
<body>
<!-- checking if is an admin or not -->
<?php if( isset($_SESSION['user_login']) && $_SESSION['user_admin'] == 0 ): ?>
<?php require_once 'parts/header.php'; ?>
<?php elseif(isset($_SESSION['user_login']) && $_SESSION['user_admin'] == 1): ?>
<?php require_once 'parts/header_admin.php'; ?>
<?php else: ?>
    <?php require_once 'parts/header.php'; ?>
<?php endif; ?>
<div id="carouselExampleIndicators" class="carousel slide dimension" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="media/book1.jpg" class="d-block w-100 dimension" alt="Impossible load image">
    </div>
    <div class="carousel-item">
      <img src="media/book2.jpg" class="d-block w-100 dimension" alt="Impossible load image">
    </div>
    <div class="carousel-item">
      <img src="media/book3.jpg" class="d-block w-100 dimension" alt="Impossible load image">
    </div>
    <div class="carousel-item">
      <img src="media/book4.jpg" class="d-block w-100 dimension" alt="Impossible load image">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Don't be shy</h3>
      <p>In our site you can find a wide choise of books. The most important works of the history. 
      	 Visit us! Follow this link to see <a href="books.php">our library</a>.</p>
    </div>
   
    <div class="col-sm-4">
      <h3>Who we are</h3>        
      <p>A group of student that wants to diffuse the culture easly.</p>
    </div>
	
	<div class="col-sm-4">
		<h3>In collaborations with</h3>
		<img width="300px" src="media/ISMT.jpg">
  </div>
</div>
</body>

<footer>
<?php require_once 'parts/footer.php'; ?>
</footer>
</html>

