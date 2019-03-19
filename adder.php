<?php include_once 'logic/db.php'; ?>
<?php require_once 'parts/head.php'; ?>
<?php
$driver = 'mysql';
$host = 'localhost';
$db_name = 'ismt';
$db_user = 'admin';
$db_password = '123';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];


  require_once 'parts/header_admin.php'; ?>
  <?php
  try {
      $pdo_add = new PDO("$driver:host=$host; dbname=$db_name; charset=$charset", $db_user, $db_password, $options);

      $sql = "INSERT INTO books (name, pages, author, genre) VALUES ('$_POST[new_title]','$_POST[new_pages]','$_POST[new_author]','$_POST[new_genre]')";

      $pdo_add->exec($sql);
      echo "<br>Book added successfully<br>";
      }
  catch(PDOException $e)
      {
      die("Cannot connect to the db");
      }

  $pdo_add = null;
  ?>

<?php
$new_pdf = basename($_FILES['new_pdf']['name']);
$target_dir = 'media/';
$target_file = $target_dir . basename($_FILES['new_pdf']['name']);

if (move_uploaded_file($_FILES['new_pdf']['tmp_name'], $target_file)) {
    echo "<br>File uploaded successfully!<br>";
} else {
    echo "<br>File not uploaded!<br>";
}
?>


<?php
//adjust header
$file = $_POST['new_title'].".php";
$source = "media/".$_POST['new_title'].".pdf";
$codice = "
<html>
<head>
<title>$_POST[new_title]</title>
<link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap.min.css\">
</head>
<boby>
<?php if( $_SESSION[user_admin] == 0 ): ?>
<?php require_once 'parts/header.php'; ?>
<?php else: ?>
    <?php require_once 'parts/header_admin.php'; ?>
<?php endif; ?>

<iframe src=\"$source\" style=\"width: 100%; height: 100%; margin: 0; padding: 0; position: absolute; display: block;\"></iframe>
</body>
</html>
";

$fo = fopen($file, "w");
fwrite($fo, $codice);
fclose($fo);
?>

<?php header("Location: books.php"); ?>
