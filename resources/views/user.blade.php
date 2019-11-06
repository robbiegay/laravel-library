@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->name }}</div>

                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>E-mail</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                        </tr>
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->user_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_num }}</td>
                            <td>{{ $user->address }}</td>
                        </tr>
                    </table>
                    <br>
                    <a href="/user/{{ $user->id }}/edit">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection