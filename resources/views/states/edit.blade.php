@extends('layouts.main')
@section('title', 'Edit State')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit State</h1>
        <ol class="breadcrumb">
            <li><a href="javascript:void(0)"><i class="fa fa-gears"></i> System Management</a></li>
            <li class="active">State</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="box-title"><i class="fa fa-pencil"></i> Edit State</h3>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-right">
                                <a href="{{ route('states.index') }}"><i class="fa fa-long-arrow-left"></i> Back to list</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="{{ route('states.update', $state->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="country_id" class="col-sm-2 control-label">Country Name</label>

                                <div class="col-sm-10">
                                    <select name="country_id" id="country_id" class="form-control select2" style="width: 100%" required>
                                        <option value="" disabled selected>--- Select Country ---</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}" @if(!empty($country->id) && $country->id == $state->country_id) selected @endif>{{ $country->country_name }}</option>
                                        @endforeach
                                    </select>

                                    @error('country_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="state_name" class="col-sm-2 control-label">State Name</label>

                                <div class="col-sm-10">
                                    <input id="state_name" type="text" class="form-control @error('state_name') is-invalid @enderror" name="state_name" value="{{ old('state_name', $state->state_name) }}" required autocomplete="name" autofocus>

                                    @error('state_name')
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
