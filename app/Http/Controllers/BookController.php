<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // show a list of resources
    public function index() {
        return view('books.index', ['books' => Book::all()]);
    }

    // show a specific resource (a user, article, list)
    public function show($id) {
        return view('books.show', ['books' => Book::findOrFail($id)]);
    }

    // create a resource
    public function apiCreate() {
        return view('books.api');
    }

    // store (or persist) that resource
    public function apiStore() {
        Book::create([
            'isbn' => request('isbn'),
            'title' => request('title'),
            'author' => request('author'),
            'keywords' => request('keywords'),
            'blurb' => request('blurb'),
            'release_date' => request('release_date'),
            // 'media_type' => request('media_type'),
        ]);

        return redirect('/books');
    }

    // create a resource
    public function create() {
        return view('books.create');
    }

    // store (or persist) that resource
    public function store() {
        Book::create([
            'isbn' => request('isbn'),
            'title' => request('title'),
            'author' => request('author'),
            'keywords' => request('keywords'),
            'blurb' => request('blurb'),
            'release_date' => request('release_date'),
            // 'media_type' => request('media_type'),
        ]);

        return redirect('/books');
    }

    // edit an existing resource
    public function edit($id) {
        return view('books.edit', ['books' => Book::findOrFail($id)]);
    }

    // persist that edit
    public function update($id) {
        $book = Book::find($id);
        
        $book->isbn = request('isbn');
        $book->title = request('title');
        $book->author = request('author');
        $book->keywords = request('keywords');
        $book->blurb = request('blurb');
        $book->release_date = request('release_date');
        // 'media_type = request('media_type');

        $book->save();

        return redirect('/books/' . $id);
    }

    // delete a resource
    public function destroy($id) {
        $book = Book::find($id);
        $book->delete();
        
        return redirect('/books');
    }
}
