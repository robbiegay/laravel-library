<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // public function book() {
    //     return $this->belongsTo(User::class);
    // }
    protected $fillable = ['isbn', 'title', 'author', 'keywords', 'blurb', 'release_date'];
}
