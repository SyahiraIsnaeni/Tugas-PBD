<html>
<head>
    <title>Add Book</title>
</head>
<body>
<h1>Add Book Data</h1>
<a href="index.php">Go to Home</a>
<br/><br/>
<form action="add.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>Title</td>
            <td>: <input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Author</td>
            <td>: <input type="text" name="authors"></td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>: <input type="text" name="genre"></td>
        </tr>
        <tr>
            <td>Publication Year</td>
            <td>: <input type="numeric" name="publication_year"></td>
        </tr>
        <tr>
            <td>Publisher</td>
            <td>: <input type="text" name="publisher"></td>
        </tr>
        <tr>
            <td></td>
            <td>&nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp<input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>
<?php
// Check If form submitted, insert form data into products table.
if(isset($_POST['Submit'])) {
    $title = $_POST['title'];
    $authors = $_POST['authors'];
    $genre = $_POST['genre'];
    $publication_year = $_POST['publication_year'];
    $publisher = $_POST['publisher'];
// include database connection file
    require_once "../database/connection.php";
    global $connect;
// Insert product data into table
    $result = mysqli_query($connect, "INSERT INTO books(title, authors, genre, publication_year, publisher) 
              VALUES('$title','$authors', '$genre', '$publication_year', '$publisher')");
// Show message when product added
    echo "Book added successfully. <a href='index.php'>View Products</a>";
}
?>
</body>
</html>