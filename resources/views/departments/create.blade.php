@extends('components.layout')

@section('title')
    {{ 'New Department' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Departments
            <small>Add Department</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li><a href="{{ route('departments.index') }}">Departments</a></li>
            <li class="active">Add Department</li>
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
                    <form action="{{ route('departments.store') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <div class="form-group">
                                        <label for="name">Department</label>
                                        <input type="text"
                                            class="form-control{{ $errors->first('department') ? ' form-error' : '' }}"
                                            name="department" placeholder="Type department name here ..."
                                            value="{{ old('department') }}">
                                    </div>
                                    @error('department')
                                        <div class="text-red">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-sm btn-success pull-right">
                                                <i class="fa fa-save" aria-hidden="true"
                                                    style="font-size: 12px !important; padding-right: 5px"></i>
                                                <b>Add Department</b>
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
