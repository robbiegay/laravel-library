@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Checked Out Books</div>

                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>ID:</th>
                            <th>Check Out Date:</th>
                            <th>Checked Out By:</th>
                            <th>ISBN:</th>
                            <th>Title:</th>
                            <th>Author:</th>
                            <!-- <th>Due Date:</th>
                            <th>Rechecks:</th>
                            <th>Late Fees:</th>
                            <th>Missing:</th>
                            <th>Archived:</th> -->
                        </tr>
                        @foreach ($checkout as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->checked_out_on }}</td>
                            <td>{{ $item->checked_out_by }}</td>
                            <td>{{ $item->isbn }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->author }}</td>
                            <!-- <td>{{ $item->due_date }}</td>
                            <td>{{ $item->num_rechecks }}</td>
                            <td>{{ $item->late_fees }}</td>
                            <td>{{ $item->missing }}</td>
                            <td>{{ $item->archived }}</td> -->
                        </tr>
                        @endforeach
                    </table>
                    <a href="/checkout/out">Checkout</a>
                    <br>
                    <a href="/checkout/in">Return</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection