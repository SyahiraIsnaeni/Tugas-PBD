<html>
<head>
    <title>Add Book</title>
</head>
<body>
<h1>Add Book Data</h1>
<a href="/">Go to Home</a>
<br/><br/>
<form action="{{ route('book.store')}}" method="post" name="form1">
    @csrf
    <table width="25%" border="0">
        <tr>
            <td>Title</td>
            <td>: <input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Author</td>
            <td>: <input type="text" name="author"></td>
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
</body>
</html>
