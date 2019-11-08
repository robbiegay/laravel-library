@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $books->title }}</div>

                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>ISBN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Keywords</th>
                            <th>Blurb</th>
                            <th>Release Date</th>
                            <th>Media Type</th>
                        </tr>
                        <tr>
                            <td>{{ $books->id }}</td>
                            <td>{{ $books->isbn }}</td>
                            <td>{{ $books->title }}</td>
                            <td>{{ $books->author }}</td>
                            <td>{{ $books->keywords }}</td>
                            <td>{{ $books->blurb }}</td>
                            <td>{{ $books->release_date }}</td>
                            <td>{{ $books->media_type }}</td>
                        </tr>
                    </table>
                    <br>
                    <a href="/books/{{ $books->id }}/edit">Edit Title</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection