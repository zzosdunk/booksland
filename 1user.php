<?php
$driver = 'mysql';
$host = 'localhost';
$db_name = 'ismt';
$db_user = 'admin';
$db_password = '123';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
require_once 'parts/head.php';
require_once 'parts/header.php';

if(isset($_SESSION['user_login']) && $_SESSION['user_admin'] == 1): ?>
  <?php require_once 'parts/header_admin.php'; ?>
  <?php
  try {
      $pdo_delete = new PDO("$driver:host=$host; dbname=$db_name; charset=$charset", $db_user, $db_password, $options);

      $sql = "DELETE FROM users WHERE id=1";

      $pdo_delete->exec($sql);
      echo "Record deleted successfully";
      }
  catch(PDOException $e)
      {
      die("Cannot connect to the db");
      }

  $pdo_delete = null;
  ?>
<?php else: ?>

You haven't rights to visit this page, or u aren not logged in.
  <?php require_once 'parts/not_auth.php'; ?>
  <?php endif; ?>
