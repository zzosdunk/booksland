<!-- connection to the db -->
<?php require_once 'logic/db.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php require_once 'parts/head.php'; ?>
  <style>
      #cat{
        color: #f49f16;
        font-style: oblique;
      }
      #revealed{
        color: #f49f16;
        font-style: oblique;
        font-size: 18px;
        text-align: right;
      }
  </style>
  </head>
  <body>

<!--  NORMAL USER -->
  <?php if( isset($_SESSION['user_login']) && $_SESSION['user_admin'] == 0): ?>
      <?php require_once 'parts/header.php'; ?>
      <p><h1 id="cat" align="center">Online Books Catalogue</h1></p>
      <section id='books-sec'>
      <!--  functions to print books -->
        <?php include_once 'print_books.php'; ?>
      </section>
      <script type="text/javascript">

        today = new Date();

        reveal = new Date("March 25, 2019");
        msPerDay = 24 * 60 * 60 * 1000 ;
        timeLeft = (reveal.getTime() - today.getTime());
        e_daysLeft = timeLeft / msPerDay;
        daysLeft = Math.floor(e_daysLeft);
        e_hrsLeft = (e_daysLeft - daysLeft)*24;
        hrsLeft = Math.floor(e_hrsLeft);
        minsLeft = Math.floor((e_hrsLeft - hrsLeft)*60);

        document.write("<h3 id=\"revealed\">There are only <b> " + daysLeft + " days " + hrsLeft +" hours and " + minsLeft +
                        " minutes left </b> until new book will be revealed</h3>");
        </script>

<!--  ADMIN -->
  <?php elseif(isset($_SESSION['user_login']) && $_SESSION['user_admin'] == 1): ?>
      <?php require_once 'parts/header_admin.php'; ?>
      <p><h1 id="cat" align="center">Online Books Catalogue</h1></p>
      <section id='books-sec'>
      <!--  functions to print books -->
        <?php include_once 'print_books_admin.php'; ?>
      </section>
      <script type="text/javascript">

        today = new Date();

        reveal = new Date("March 25, 2019");
        msPerDay = 24 * 60 * 60 * 1000 ;
        timeLeft = (reveal.getTime() - today.getTime());
        e_daysLeft = timeLeft / msPerDay;
        daysLeft = Math.floor(e_daysLeft);
        e_hrsLeft = (e_daysLeft - daysLeft)*24;
        hrsLeft = Math.floor(e_hrsLeft);
        minsLeft = Math.floor((e_hrsLeft - hrsLeft)*60);

        document.write("<h3 id=\"revealed\">There are only <b> " + daysLeft + " days " + hrsLeft +" hours and " + minsLeft +
                        " minutes left </b> until new book will be revealed</h3>");
        </script>

<!--  NO RIGHTS -->
  <?php else: ?>
      <?php require_once 'parts/not_auth.php'; ?>
  <?php endif; ?>

  </body>
  <?php require_once 'parts/footer.php'; ?>
</html>
