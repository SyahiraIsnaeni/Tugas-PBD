<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();

        return view('index', compact('book'));
    }

    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'publication_year' => 'required',
            'publisher' => 'required',
        ]);

        $data = $request->all();
        Book::create($data);
        echo "Data Berhasil Tersimpan!" . PHP_EOL;

        return redirect()->route('book.index');
    }

    public function edit($id)
    {
        $book = Book::find($id);

        return view('edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre,
            'publication_year' => $request->publication_year,
            'publisher' => $request->publisher,
        ]);

        return redirect()->route('book.index');

    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('book.index');
    }
}
