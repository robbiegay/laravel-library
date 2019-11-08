@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Admin</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>E-mail</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                        </tr>
                        @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->admin }}</td>
                            <td><a href="/users/{{ $item->id }}">{{ $item->name }}</a></td>
                            <td>{{ $item->user_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone_num }}</td>
                            <td>{{ $item->address }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    <!-- <a href="/users/create">Add User</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection