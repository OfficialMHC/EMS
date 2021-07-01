@extends('layouts.main')
@section('title', 'Users')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div>User Management</div>
                <span class="ml-2 mr-2">/</span>
                <div>
                    User
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="row justify-content-center mb-4">
            <div class="col-md-12">
                <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">
                    <i class="fa fa-plus"></i>
                </a>
                <div class="table-responsive">
                    <table class="mb-0 table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-sm" href="{{ route('users.edit', $user->id) }}"><i class='fa fa-edit'></i></a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm"><i class='fa fa-trash'></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
