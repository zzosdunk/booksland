<?php require_once 'logic/db.php'; ?>

<html>
<head>
<?php require_once 'parts/head.php'; ?>

<style>
    #addlib{
        margin: 10px 20%;
    }
    #cat{
        color: #f49f16;
        font-style: oblique;
      }
    #foradd{
        border-radius: 5px;
        width: 12em;
        height: 2em;
        cursor: pointer;
    }

</style>
</head>
<body>

<?php require_once 'parts/header_admin.php'; ?>
<p><h1 id="cat" align="center">Add a new book</h1></p>

<form id="addlib" action="adder.php" method="POST" enctype="multipart/form-data">
<div class="form-group">
    <label for="bookname">Title of the book:</label>
    <input type="text" class="form-control" id="bookname" max="30" name="new_title">
</div>

<div class="form-group">
    <label for="npages">Number of pages:</label>
    <input type="number" class="form-control" id="npages" name="new_pages">
</div>

<div class="form-group">
    <label for="author">Author's Name:</label>
    <input type="text" class="form-control" id="author" max="30" name="new_author">
</div>

<div class="form-group">
    <label for="genre">Genre:</label>
    <input type="text" class="form-control" id="genre" max="30" name="new_genre">
</div>

<div class="form-group">
    <label for="selfile">Select a file:</label>
    <input type="file"  class="form-control-file" id="selfile" name="new_pdf" accept="application/pdf">
</div>

<div class="form-group" align="right">
<input type="submit" id="foradd" value="ADD">
</div>

</form>
</body>
<footer>
<?php require_once 'parts/footer.php'; ?>
</footer>
</html>
