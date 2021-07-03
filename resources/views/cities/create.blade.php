@extends('layouts.main')
@section('title', 'Create City')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Create City</h1>
        <ol class="breadcrumb">
            <li><a href="javascript:void(0)"><i class="fa fa-gears"></i> System Management</a></li>
            <li class="active">City</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="box-title"><i class="fa fa-pencil"></i> Create City</h3>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-right">
                                <a href="{{ route('cities.index') }}"><i class="fa fa-long-arrow-left"></i> Back to list</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="{{ route('cities.store') }}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="state_id" class="col-sm-2 control-label">State Name</label>

                                <div class="col-sm-10">
                                    <select name="state_id" id="state_id" class="form-control" style="width: 100%" required>
                                        <option value="" disabled selected>--- Select Country ---</option>
                                        @foreach($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                        @endforeach
                                    </select>

                                    @error('state_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city_name" class="col-sm-2 control-label">City Name</label>

                                <div class="col-sm-10">
                                    <input id="city_name" type="text" class="form-control @error('city_name') is-invalid @enderror" name="city_name" value="{{ old('city_name') }}" required autocomplete="name" autofocus>

                                    @error('city_name')
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
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
