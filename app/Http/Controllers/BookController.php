<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class BookController extends Controller
{
    // show a list of resources
    public function index()
    {
        return view('books.index', ['books' => Book::all()]);
    }

    // show a specific resource (a user, article, list)
    public function show($id)
    {
        return view('books.show', ['books' => Book::findOrFail($id)]);
    }

    // create a resource
    public function apiCreate()
    {
        return view('books.api');
    }

    // store (or persist) that resource
    public function apiFetch(Request $request)
    {
        $info = $request->request->all();
        $title = $info['title'];
        $author = $info['author'];
        $client = new Client(['base_uri' => 'https://www.googleapis.com/books/v1/volumes']); 
        $response = $client->GET('?q='.$title.$author.'&key=KEY');
        $json = json_decode($response->getBody()->getContents())->items;

        return view('books.apiResults', ['json' => $json]);
    }

    // create a resource
    public function create()
    {
        return view('books.create');
    }

    // store (or persist) that resource
    public function store()
    {
        Book::create([
            'isbn' => request('isbn') ?: '00000',
            'title' => request('title') ?: 'X',
            'author' => request('author') ?: 'X',
            'keywords' => request('keywords') ?: 'X',
            'blurb' => request('blurb') ?: 'X',
            'release_date' => request('release_date') ?: '1900-01-01',
            // 'media_type' => request('media_type'),
        ]);

        return redirect('/books');
    }

    // edit an existing resource
    public function edit($id)
    {
        return view('books.edit', ['books' => Book::findOrFail($id)]);
    }

    // persist that edit
    public function update($id)
    {
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
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/books');
    }
}
