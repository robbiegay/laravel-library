<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     // show a list of resources
     public function index() {
        return view('/user');
    }

    // show a specific resource (a user, article, list)
    public function show($id) {
        $user = User::findOrFail($id);

        return view('/user', ['user' => $user]);
    }

    // // create a resource
    // public function create() {
    //     return view('books/create');
    // }

    // // store (or persist) that resource
    // public function store() {
    //     // Article::create(request()->validate([
    //     //     'title' => request('title'),
    //     //     'excerpt' => request('excerpt'),
    //     //     'body' => request('body')
    //     // ]));

    //     return redirect('/books');
    // }

    // edit an existing resource
    public function edit($id) {
        $user = User::find($id);

        return view('auth.edit', ['user' => $user]);
    }

    // persist that edit
    public function update($id) { //Article $article
        $user = User::find($id);

        $user->name = request('name');
        $user->user_name = request('user_name');
        $user->password = request('password');
        $user->email = request('email');
        $user->phone_num = request('phone_num');
        $user->address = request('address');
        $user->admin = request('admin');

        $user->save();

        return redirect('/user/' . $user->id);
    }

    // // delete a resource
    // public function destroy() {
        
    //     return redirect('/books');
    // }
}
