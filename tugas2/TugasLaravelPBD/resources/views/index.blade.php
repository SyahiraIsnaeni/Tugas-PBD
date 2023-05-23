<html>
<head>
    <title>Homepage</title>
</head>
<body>
<h1>Book List</h1>
<a href="{{route('book.create')}}">Add New Product</a><br/><br/>
<table width='80%' border=1>
    <tr>
        <th>ID</th> <th>Title</th> <th>Author</th> <th>Genre</th>
        <th>Publication Year</th> <th>Publisher</th> <th>Action</th>
    </tr>
    @foreach ($book as $books)
        <tr>
            <td>{{ $books->id }}</td>
            <td>{{ $books->title }} </td>
            <td>{{ $books->author }}</td>
            <td>{{ $books->genre }} </td>
            <td>{{ $books->publication_year }}</td>
            <td>{{ $books->publisher }} </td>
            <td>
                <button>
                <a href="{{route('book.edit', $books->id) }}"
                   class="btn btn-warning btn-sm" style="text-decoration: none;">Edit</a>
                </button>

                <form action="{{route('book.destroy', $books->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
