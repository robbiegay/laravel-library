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
                            <th>ID</th>
                            <th>ISBN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Keywords</th>
                            <th>Blurb</th>
                            <th>Release Date</th>
                            <th>Media Type</th>
                        </tr>
                        @foreach ($books as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->isbn }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->author }}</td>
                            <td>{{ $item->keywords }}</td>
                            <td>{{ $item->blurb }}</td>
                            <td>{{ $item->release_date }}</td>
                            <td>{{ $item->media_type }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection