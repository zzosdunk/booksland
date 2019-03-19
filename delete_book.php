<?php require_once 'parts/head.php'; ?>
<?php
$driver = 'mysql';
$host = 'localhost';
$db_name = 'ismt';
$db_user = 'admin';
$db_password = '123';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
?>
  <?php require_once 'parts/header_admin.php'; ?>
  <?php
  try {
      $pdo_delete = new PDO("$driver:host=$host; dbname=$db_name; charset=$charset", $db_user, $db_password, $options);
      if(isset($_POST['delb']))
      $a = $_POST['delb'];
      $sql = "DELETE FROM books WHERE id=$a";

      $pdo_delete->exec($sql);
      echo "Record deleted successfully";
      }
  catch(PDOException $e)
      {
      die("Cannot connect to the db");
      }

  $pdo_delete = null;
  ?>

<?php
/*Deleting the associated page and associated file of a book*/

//deleting pdf
$b = $_POST['delb2'];
$myFile = "media/".$b.".pdf";
unlink($myFile) or die("Couldn't delete file");

//deleting php page
$myFile = $b.".php";
unlink($myFile) or die("Couldn't delete file");

?>

<?php header("Location: books.php"); ?>
