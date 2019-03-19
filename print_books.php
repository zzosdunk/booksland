<?php require_once 'logic/db.php';

$sql = 'SELECT books.id, books.name, books.pages, books.author, books.genre from books'
?>

<html>
<head>
<?php require_once 'parts/head.php'; ?>
<style>
  table {
  border: 2px;
  width: 100%;
  text-align: center;
  margin:auto;
  background-color: #f2f2f2;
}
</style>
</head>

<table align="center">
<thead>
  <tr>
    <th><h3>Id</h3></th>
    <th><h3>Books</h3></th>
    <th><h3>Genre</h3></th>
    <th><h3>Pages</h3></th>
    <th><h3>Read<h3></th>
  </tr>
</thead>
  <?php 
  $result = $pdo->query($sql);
  while( $book = $result->fetch(PDO::FETCH_OBJ) ): ?>
<tbody>
<tr class="book_container" id=<?php echo 'book_ ' . $book->id; ?> data-book-id=<?php echo $book->id; ?>>
  <td><?php echo $book->id; ?></td>
  <td class="book_name"><?php echo $book->name; ?></td>
  <td class="book_genre"><?php echo $book->genre; ?></td>
  <td class="book_duration"><?php echo $book->pages; ?></td>
  <td><?php $link = $book->name . ".php";  echo "<a class=\"clickMe\" href = \"$link\">PDF</a>";?></td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</html>