<?php require_once 'logic/db.php';

$sql = 'SELECT users.id, users.login, users.password, users.isAdmin FROM users'; ?>

<html>
<head>
<?php require_once 'parts/head.php'; ?>
<style>
  #usertable {
  border: 2px;
  width: 99%;
  text-align: center;
  margin-right:auto;
  margin-left:auto;
  }
  #foradd{
        border-radius: 8px;
        width: 1.5em;
        height: 2em;
        cursor: pointer;
    }
  }
</style>
</head>
<table align="center" id="usertable" class="table">
<thead>
  <tr>
    <th><h3>Id</h3></th>
    <th><h3>Username</h3></th>
    <th><h3>Password</h3></th>
    <th><h3>Admin</h3></th>
    <th><h3>Remove</h3></th>
  </tr>
</thead>
<?php $result = $pdo->query($sql);
  while( $user = $result->fetch(PDO::FETCH_OBJ) ): ?>
<tbody>
<tr>
  <td><?php echo $user->id; ?></td>
  <td class="book_name"><?php echo $user->login; ?></td>
  <td class="book_genre"><?php echo $user->password; ?></td>
  <td class="book_duration"><?php if($user->isAdmin == 1) echo 'Yes'; else echo 'No'; ?></td>
  <td>
      <form action="delete_user.php" method="POST">
      <?php $val = $user->id; echo "<button type=\"submit\" id=\"foradd\" value= \"$val\" name=\"del\"></button>"; ?>
      </form>
  </td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</html>
