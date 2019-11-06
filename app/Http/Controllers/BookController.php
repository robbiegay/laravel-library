<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // show a list of resources
    public function index() {
        // dd(Book::all());
        // $books = Book::all();

        return view('/books', ['books' => Book::all()]);
    }

    // show a specific resource (a user, article, list)
    public function show() {
        return view('/books/{id}');
    }

    // create a resource
    public function create() {
        return view('books/create');
    }

    // store (or persist) that resource
    public function store() {
        // Article::create(request()->validate([
        //     'title' => request('title'),
        //     'excerpt' => request('excerpt'),
        //     'body' => request('body')
        // ]));

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
