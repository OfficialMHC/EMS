@extends('layouts.main')
@section('title', 'Edit User')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit User</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> User Management</a></li>
            <li class="active">User</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="box-title"><i class="fa fa-pencil"></i> Edit User</h3>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-right">
                                <a href="{{ route('users.index') }}"><i class="fa fa-long-arrow-left"></i> Back to list</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="{{ route('users.update', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Username</label>

                                <div class="col-sm-10">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username', $user->username) }}" required autocomplete="name" autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="first_name" class="col-sm-2 control-label">First Name</label>

                                <div class="col-sm-10">
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name', $user->first_name) }}" required autocomplete="name" autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="col-sm-2 control-label">Last Name</label>

                                <div class="col-sm-10">
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name', $user->last_name) }}" required autocomplete="name" autofocus>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">Status</label>

                                <div class="col-sm-10">
                                    <select name="status" id="status" class="form-control select2" style="width: 100%" required>
                                        <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary pull-right">Update</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="box-title"><i class="fa fa-pencil"></i> Change Password</h3>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-right">
                                <a href="{{ route('users.index') }}"><i class="fa fa-long-arrow-left"></i> Back to list</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="{{ route('users.change.password', $user->id) }}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="new-password" class="col-sm-2 control-label">New Password</label>

                                <div class="col-sm-10">
                                    <input id="new-password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new-password">

                                    @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-sm-2 control-label">Confirm Password</label>

                                <div class="col-sm-10">
                                    <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary pull-right">Update</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
