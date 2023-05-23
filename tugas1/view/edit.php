<?php
// include database connection file
require_once "../database/connection.php";
global $connect;
// Check if form is submitted for product update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $book_id = $_POST['book_id'];
    $title = $_POST['title'];
    $authors = $_POST['authors'];
    $genre = $_POST['genre'];
    $publication_year = $_POST['publication_year'];
    $publisher = $_POST['publisher'];
// update product data
    $result = mysqli_query($connect, "UPDATE books SET title='$title', authors='$authors', genre='$genre', 
              publication_year='$publication_year', publisher='$publisher' WHERE book_id=$book_id");
// Redirect to homepage to display updated product in list
    header("Location: index.php");
}
?>

<?php
// Display selected product data based on id
// Getting id from url
require_once "../database/connection.php";
global $connect;
// Fetch product data based on id
$book_id = $_GET['book_id'];
$result = mysqli_query($connect, "SELECT * FROM books WHERE book_id=$book_id");
while($data = mysqli_fetch_array($result))
{
    $title= $data['title'];
    $authors = $data['authors'];
    $genre = $data['genre'];
    $publication_year = $data['publication_year'];
    $publisher = $data['publisher'];
}
?>

<html>
<head>
    <title>Edit Product Data</title>
</head>
<body>
<h1>Edit Book Data</h1>
<a href="index.php">Home</a>
<br/><br/>
<form name="update_product" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>Title</td>
            <td>&nbsp : <input type="text" name="title" value=<?php
                echo "\"$title\"";
                ?>></td>
        </tr>
        <tr>
            <td>Authors</td>
            <td>&nbsp : <input type="text" name="authors" value=<?php
                echo "\"$authors\"";
                ?>></td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>&nbsp : <input type="text" name="genre" value=<?php
                echo "\"$genre\"";
                ?>></td>
        </tr>
        <tr>
            <td>Publication Year</td>
            <td>&nbsp : <input type="numeric" name="publication_year" value=<?php
                echo "\"$publication_year\"";
                ?>></td>
        </tr>
        <tr>
            <td>Publisher</td>
            <td>&nbsp : <input type="text" name="publisher" value=<?php
                echo "\"$publisher\"";
                ?>></td>
        </tr>
        <tr>
            <td><input type="hidden" name="book_id" value=<?php echo $_GET['book_id'];?>></td>
            <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>