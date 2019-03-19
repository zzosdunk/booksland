<!--  printing the list of books -->
<?php
require_once 'db.php';

$sql = 'SELECT books.id, books.name, books.pages, GROUP_CONCAT(genre.name SEPARATOR ", ") AS genre
FROM books INNER JOIN book_genre ON books.id = book_genre.book_id
INNER JOIN genre ON book_genre.genre_id=genre.id
GROUP BY books.id, books.name, books.pages';
?>

<style>
  table {
  border: 2px;
  width: 100%;
  text-align: center;
  margin-right:auto;
  margin-left:auto;
  margin-top: 3%;
  background-color: #f2f2f2;
}
</style>

<table align="center">
<thead>
  <tr>
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
  <td class="book_name"><?php echo $book->name; ?></td>
  <td class="book_genre"><?php echo $book->genre; ?></td>
  <td class="book_duration"><?php echo $book->pages; ?></td>
  <td><?php $link = $book->id . ".php";  echo "<a class=\"clickMe\" href = \"$link\">PDF</a>";?></td>
</tr>
<?php endwhile; ?>
</tbody>
</table>