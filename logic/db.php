<!--  file for the db connection -->
<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'ismt';
$db_user = 'admin';
$db_password = '123';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
  $pdo = new PDO("$driver:host=$host; dbname=$db_name; charset=$charset", $db_user, $db_password, $options);

  session_start();

} catch (PDOException $e) {
  die("Cannot connect to the db");
}


/* $result = $pdo->query('SELECT * FROM books');

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
  echo 'Book ' . $row['name'] . " has " . $row['pages'] . ' pages <br>';
}


$sql = 'SELECT name FROM books WHERE pages >= :pages';
$stmt = $pdo->prepare($sql);

$params = ['pages' => '700'];
$stmt->execute($params);

$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);

echo '<pre';
var_dump($rows);


$sql_pos = 'SELECT name FROM books WHERE pages < ?';
$stmt_pos = $pdo->prepare($sql_pos);

$stmt_pos->execute(['1000']);

$rows_pos = $stmt_pos->fetchALL(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($rows_pos);


$user_input = '<script> some magic here </script>';
$safe_input = htmlentities($user_input);

echo $safe_input;

*/
 ?>
