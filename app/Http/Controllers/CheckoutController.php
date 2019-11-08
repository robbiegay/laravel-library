<?php

namespace App\Http\Controllers;

use DB;
use App\Book;
use App\User;
use App\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // show a list of resources
    public function index()
    {
        return view('checkout.index', ['checkout' => Checkout::all()]);
    }

    // create a resource
    public function create()
    {
        return view('checkout.checkout');
    }

    // store (or persist) that resource
    public function store(Request $request)
    {
        $info = $request->request->all();
        // dd($info);
        $book = DB::select('SELECT * FROM books WHERE isbn = ' . $info["isbn"]); // ('isbn','=',$info["isbn"])->all()
        $user = DB::select('SELECT * FROM users WHERE user_name = "' . $info["user"] . '"'); // ('isbn','=',$info["isbn"])->all()
        // dd($user[0]->id);
        $checkedOut = DB::select('SELECT * FROM checkouts WHERE isbn = ' . $info["isbn"]);
        // dd(count($checkedOut));
        if (count($book) === 1 && count($user) === 1 && !count($checkedOut)) {
            // Checkout::create([
            //     'book_id' => $book[0]->id,
            //     'user_id' => $user[0]->id,
            // ]);
            DB::table('checkouts')->insert(
                [
                    'checked_out_on' => now(),
                    'book_id' => $book[0]->id,
                    'user_id' => $user[0]->id,
                    'checked_out_by' => $user[0]->name,
                    'isbn' => $book[0]->isbn,
                    'title' => $book[0]->title,
                    'author' => $book[0]->author,
                ]
            );
        }

        return view('checkout.index', ['checkout' => Checkout::all()]);
    }

    // return a book
    public function edit()
    {
        return view('checkout.return');
    }



    // delete a resource
    public function destroy(Request $request)
    {
        $info = $request->request->all();
        $checkedOut = Checkout::where('isbn', '=', $info['isbn'])->firstOrFail();
        //$checkedOut = DB::select("SELECT * FROM checkouts WHERE 'isbn' = ".$info['isbn']);
        $book = Checkout::find($checkedOut->id);
        $book->delete();

        return redirect('/checkout');
    }
}
