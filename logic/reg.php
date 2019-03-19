<!--  control of existins accounts and registration -->
<?php
require_once 'db.php';

$login = trim( $_POST['login'] );
$pwd = trim( $_POST['pwd'] );

if( !empty($login)  && !empty($pwd) ) {
  $pwd = password_hash($pwd, PASSWORD_DEFAULT);

  $sql_check = 'SELECT EXISTS( SELECT login FROM users WHERE login = :login)';
  $stmt_check = $pdo->prepare($sql_check);
  $stmt_check->execute([':login' => $login]);

  if( $stmt_check->fetchColumn() ) {
      die('There already user with this login!');
  }

  $sql = 'INSERT INTO users(login, password) VALUES (:login, :pwd)';
  $params = ['login' => $login, ':pwd' => $pwd];

  $stmt = $pdo->prepare($sql);
  $stmt->execute($params);

  echo "You signed up successfully! Now access with your new credentials. Click ";

} else {
  echo "Fill all the inputs!";
}

 ?>

<a style="text-decoration: none; color:blue;" href="../signin.php">here.</a>
