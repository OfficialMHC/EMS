@extends('layouts.main')
@section('title', 'Edit Department')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Department</h1>
        <ol class="breadcrumb">
            <li><a href="javascript:void(0)"><i class="fa fa-gears"></i> System Management</a></li>
            <li class="active">Department</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="box-title"><i class="fa fa-pencil"></i> Edit Department</h3>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-right">
                                <a href="{{ route('departments.index') }}"><i class="fa fa-long-arrow-left"></i> Back to list</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="{{ route('departments.update', $department->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="department_name" class="col-sm-2 control-label">Department Name</label>

                                <div class="col-sm-10">
                                    <input id="department_name" type="text" class="form-control @error('department_name') is-invalid @enderror" name="department_name" value="{{ old('department_name', $department->department_name) }}" required autocomplete="name" autofocus>

                                    @error('department_name')
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
                                        <option value="1" {{ $department->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $department->status == 0 ? 'selected' : '' }}>Inactive</option>
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
    </section>
@endsection
