@extends('components.layout')

@section('title')
    {{ 'New Location' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Locations
            <small>Add Location</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li><a href="{{ route('locations.index') }}">Locations</a></li>
            <li class="active">Add Location</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border text-blue">
                        <strong>ADD NEW</strong>
                    </div>
                    <!-- /.box-header -->
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Location</label>
                                            <input type="text"
                                                class="form-control{{ $errors->first('location') ? ' form-error' : '' }}"
                                                name="first_name" placeholder="Type location name here ..."
                                                value="{{ old('location') }}">
                                        </div>
                                        @error('location')
                                            <div class="text-red">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-sm btn-success pull-right">
                                                <i class="fa fa-save" aria-hidden="true"
                                                    style="font-size: 12px !important; padding-right: 5px"></i>
                                                <b>Add Location</b>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
