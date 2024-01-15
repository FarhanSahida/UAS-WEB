<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books', ['books' => $books]);
    }

    public function add()
    {
        $categories = Category::all();
        return view('books-add', ['categories' => $categories]);
    }

    public function send(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'book_code' => 'required|unique:books|max:255',
            'title' => 'required|max:255',
        ]); 

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $book = Book::create($request->all());
        $book->categories()->sync($request->categories);
        return redirect('books')->with('status', 'Buku Berhasil Ditambahkan');
    }

    public function edit($slug)
    {
        $book = Book::where('slug', $slug)->first();
        $categories = Category::all();
        return view('books-edit', ['categories' => $categories, 'book' => $book]);
    }

    public function update(Request $request, $slug)
    {
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }

        $book = Book::where('slug', $slug)->first();
        $book->update($request->all());
        
        if($request->categories){
            $book->categories()->sync($request->categories);
        }

        return redirect('books')->with('status', 'Buku Berhasil Diubah');
    }

    public function delete($slug)
    {
        $book = Book::where('slug', $slug)->first();
        $book->delete();
        return redirect('books')->with('status', 'Dihapus');
    }

    public function deleted()
    {
        $deleted = Book::onlyTrashed()->get();
        return view('books-deleted', ['deleted' => $deleted]);
    }

    public function restore($slug)
    {
        $book = Book::withTrashed()->where('slug', $slug)->first();
        $book->restore();
        return redirect('books')->with('status', 'Kategori Berhasil Dipulihkan');
    }
}
