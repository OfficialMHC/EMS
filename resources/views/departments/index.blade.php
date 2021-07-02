@extends('layouts.main')
@section('title', 'Department List')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Department List</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-gears"></i> System Management</a></li>
            <li class="active">Department</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if(session()->has('message'))
            <div class="callout callout-success alert alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p>{{ session('message') }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="box-title" style="padding-top: 6px"><i class="fa fa-search"></i> View Department List</h3>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-right">
                                <a href="{{ route('departments.create') }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Department Name</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($departments as $department)
                                    <tr>
                                        <th scope="row">{{ $department->id }}</th>
                                        <td>{{ $department->department_name }}</td>
                                        <td>
                                            @if($department->status == 1)
                                                <small class="label label-success">Active</small>
                                            @else
                                                <small class="label label-danger">Inctive</small>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-xs btn-warning" href="{{ route('departments.edit', $department->id) }}"><i class='fa fa-edit'></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('departments.destroy', $department->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-xs btn-danger"><i class='fa fa-trash'></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Department Name</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
