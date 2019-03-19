<!--  checking the credentials -->
<?php
require_once 'db.php';

$login = trim($_POST['login']);
$pwd = trim($_POST['pwd']);

if (!empty($login) && !empty($pwd)) {
  $sql = 'SELECT login, password, isAdmin FROM users WHERE login = :login';

  $params = [':login' => $login];
  $stmt = $pdo->prepare($sql);
  $stmt->execute($params);

  $user = $stmt->fetch(PDO::FETCH_OBJ);

  if($user) {
    if(password_verify($pwd, $user->password)) {
      $_SESSION['user_login'] = $user->login;
      $_SESSION['user_admin'] = $user->isAdmin;
      header('Location: ../index.php');
    } else {
      echo "Incorrect login or password";
    }
  } else {

      echo "Incorrect login or password";
  }
} else {

    echo "Incorrect login or password";
}

 ?>
