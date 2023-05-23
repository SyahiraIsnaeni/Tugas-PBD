<?php
require_once "../database/connection.php";
// Fetch all products data from database
global $connect;
$result = mysqli_query($connect, "SELECT * FROM books ORDER BY book_id");
?>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
<h1>Book List</h1>
<a href="add.php">Add New Book</a><br/><br/>
<table width='80%' border=1>
    <tr>
        <th>ID</th> <th>Title</th> <th>Author</th> <th>Genre</th> <th>Publication Year</th> <th>Publisher</th> <th>Action</th>
    </tr>
    <?php
    while($data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $data['book_id'] . "</td>";
        echo "<td>" . $data['title'] . "</td>";
        echo "<td>" . $data['authors'] . "</td>";
        echo "<td>" . $data['genre'] . "</td>";
        echo "<td>" . $data['publication_year'] . "</td>";
        echo "<td>" . $data['publisher'] . "</td>";
        echo "<td><a href='edit.php?book_id=$data[book_id]'>Edit</a> | <a href='delete.php?book_id=$data[book_id]'>Delete</a></td></tr>";
    }
    ?>
</table>
</body>
</html>