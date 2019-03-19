<!-- connection to the db -->
<?php require_once 'logic/db.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <?php require_once 'parts/head.php'; ?>
  </head>
  <body>
  <!-- checking if the user is an admin or not -->
    <?php if( isset($_SESSION['user_login']) && $_SESSION['user_admin'] == 0 ): ?>
      <?php require_once 'parts/header.php'; ?>
    
    <!-- frame with the pdf of the book -->
	 <iframe src="media/Into The Wild.pdf" style="width: 100%; height: 100%; margin: 0; padding: 0; position: absolute; display: block;"></iframe> 
	
	<?php elseif(isset($_SESSION['user_login']) && $_SESSION['user_admin'] == 1): ?>
    <?php require_once 'parts/header_admin.php'; ?>
	
	<!-- frame with the pdf of the book -->
	<iframe src="media/Into The Wild.pdf" style="width: 100%; height: 100%; margin: 0; padding: 0; position: absolute; display: block;"></iframe> 
	
	<!-- if no rights -->
    <?php else: ?>
      <?php require_once 'parts/not_auth.php'; ?>
    <?php endif; ?>
  </body>
  </html>