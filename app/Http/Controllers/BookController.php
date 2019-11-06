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
    public function create() {
        return view('books.create');
    }

    // store (or persist) that resource
    public function store() {
        Book::create(request()->validate([
            'isbn' => request('isbn'),
            'title' => request('title'),
            'author' => request('author'),
            'keywords' => request('keywords'),
            'blurb' => request('blurb'),
            'release_date' => request('release_date'),
            'media_type' => request('media_type'),
        ]));

        return redirect('/books');
    }

    // edit an existing resource
    public function edit() {
        return view('/books/{id}/edit');
    }

    // persist that edit
    public function update() { //Article $article
        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');
        // $article->save();

        return redirect('/books' . $book->id);
    }

    // delete a resource
    public function destroy() {
        
        return redirect('/books');
    }
}
