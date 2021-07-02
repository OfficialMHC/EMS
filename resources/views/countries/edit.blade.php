@extends('layouts.main')
@section('title', 'Edit Country')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Country</h1>
        <ol class="breadcrumb">
            <li><a href="javascript:void(0)"><i class="fa fa-gears"></i> System Management</a></li>
            <li class="active">Country</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="box-title"><i class="fa fa-pencil"></i> Edit Country</h3>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-right">
                                <a href="{{ route('countries.index') }}"><i class="fa fa-long-arrow-left"></i> Back to list</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="{{ route('countries.update', $country->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="country_code" class="col-sm-2 control-label">Country Code</label>

                                <div class="col-sm-10">
                                    <input id="country_code" type="text" class="form-control @error('country_code') is-invalid @enderror" name="country_code" value="{{ old('country_code', $country->country_code) }}" required autocomplete="name" autofocus>

                                    @error('country_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country_name" class="col-sm-2 control-label">Country Name</label>

                                <div class="col-sm-10">
                                    <input id="country_name" type="text" class="form-control @error('country_name') is-invalid @enderror" name="country_name" value="{{ old('country_name', $country->country_name) }}" required autocomplete="name" autofocus>

                                    @error('country_name')
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
                                        <option value="1" {{ $country->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $country->status == 0 ? 'selected' : '' }}>Inactive</option>
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
