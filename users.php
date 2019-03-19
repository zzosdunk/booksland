<!-- connection to the db -->
<?php require_once 'logic/db.php' ?>

<!DOCTYPE html>
<html>
  <head>
  <?php require_once 'parts/head.php'; ?>
  <style>
      #cat{
        color: #f49f16;
        font-style: oblique;
      }
  </style>
  </head>
  <body>

  <?php if(isset($_SESSION['user_login']) && $_SESSION['user_admin'] == 1): ?>
      <?php require_once 'parts/header_admin.php'; ?>
      <p><h1 id="cat" align="center">User Accounts</h1></p>
      <section id='books-sec'>
      <!--  functions to print books -->
        <?php include_once 'print_users.php'; ?>
      </section>

<!--  NO RIGHTS -->
  <?php else: ?>
      <?php require_once 'parts/not_auth.php'; ?>
  <?php endif; ?>

  </body>
  <footer>
  <?php require_once 'parts/footer.php'; ?>
  <footer>
</html>
