<?php
    function format_item($item) {
        if (strlen($item->volumeInfo->publishedDate) === 4) {
            $date = $item->volumeInfo->publishedDate . '-01-01';
        } elseif (strlen($item->volumeInfo->publishedDate) === 7) {
            $date = $item->volumeInfo->publishedDate . '-01';
        } else {
            $date = $item->volumeInfo->publishedDate;
        }
        // Attempt at double nested ternary
        // $date = strlen($item->volumeInfo->publishedDate) === 4 ? 
        //     $item->volumeInfo->publishedDate . '-01-01' : 
        //     strlen($item->volumeInfo->publishedDate) === 7 ?
        //         $item->volumeInfo->publishedDate . '-01' :
        //         $item->volumeInfo->publishedDate;
        return $date;
    }
?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Books</div>

                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>Title</th>
                            <th>Authors</th>
                            <th>Published Date</th>
                            <th>Add Book</th>
                        </tr>
                        @foreach ($json as $item)
                        <tr>
                            <td>{{ $item->volumeInfo->title }}</td>
                            <td>{{ $item->volumeInfo->authors[0] ?: $item->volumeInfo->authors[0] }}</td>
                            <td>{{ $item->volumeInfo->publishedDate ?: $item->volumeInfo->publishedDate }}</td>
                            <td>
                                <form method="POST" action="/books/create">
                                    @csrf
                                    <input type="hidden" name="title" value="{{ $item->volumeInfo->title }}">
                                    <input type="hidden" name="author" value="{{ $item->volumeInfo->authors[0] }}">
                                    <input type="hidden" name="release_date" value="{{ format_item($item) }}">
                                    <input type="hidden" name="isbn" value="{{ $item->volumeInfo->industryIdentifiers[0]->identifier }}">
                                    <button type="submit">Add</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    <a href="/books/create">Add Title (Manual)</a>
                    <br>
                    <a href="/books/api">Add Title (Google API)</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection