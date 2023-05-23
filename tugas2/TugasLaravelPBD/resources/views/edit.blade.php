<html>
<head>
    <title>Edit Product Data</title>
</head>
<body>
<h1>Edit Book Data</h1>
<a href="/">Home</a>
<br/><br/>
<form name="update_product" method="post" action="{{ route('book.update', $book->id)}}">
    @csrf
    @method('PUT')
    <table border="0">
        <tr>
            <td>Title</td>
            <td>&nbsp : <input type="text" name="title" value="{{$book->title}}"></td>
        </tr>
        <tr>
            <td>Author</td>
            <td>&nbsp : <input type="text" name="author" value="{{$book->author}}"></td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>&nbsp : <input type="text" name="genre" value="{{$book->genre}}"></td>
        </tr>
        <tr>
            <td>Publication Year</td>
            <td>&nbsp : <input type="numeric" name="publication_year" value="{{$book->publication_year}}"></td>
        </tr>
        <tr>
            <td>Publisher</td>
            <td>&nbsp : <input type="text" name="publisher" value="{{$book->publisher}}"></td>
        </tr>
        <tr>
            <td></td>
            <td>&nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp <input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
