<?php
// include database connection file
require_once "../database/connection.php";
// Get id from URL to delete that product
global $connect;
$book_id = $_GET['book_id'];
// Delete product row from table based on given id
$result = mysqli_query($connect,
    "DELETE FROM books WHERE book_id=$book_id");
// After delete redirect to Home, so that latest product list will be displayed.
header("Location:index.php");
?>