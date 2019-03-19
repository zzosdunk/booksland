<?php
require_once 'db.php';

$sql = 'DELETE * from books where books.id=$book->id'
$pdo->query($sql);

?>