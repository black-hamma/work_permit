@extends('components.layout')

@section('title')
    {{ 'New HazardIdentification' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            HazardIdentifications
            <small>Add HazardIdentification</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li><a href="{{ route('HazardIdentifications.index') }}">HazardIdentifications</a></li>
            <li class="active">Add HazardIdentification</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border text-blue">
                        <strong>ADD NEW</strong>
                        <a href="{{ route('HazardIdentifications.index') }}" class="btn btn-sm btn-danger pull-right">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <b>BACK</b>
                        </a>
                    </div>
                    <!-- /.box-header -->
                    <form action="{{ route('HazardIdentifications.store') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <div class="form-group">
                                        <label for="name">HazardIdentification</label>
                                        <input type="text"
                                            class="form-control{{ $errors->first('HazardIdentification') ? ' form-error' : '' }}"
                                            name="HazardIdentification"
                                            placeholder="Type HazardIdentification name here ..."
                                            value="{{ old('HazardIdentification') }}">
                                    </div>
                                    @error('HazardIdentification')
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
                                                <b>Add HazardIdentification</b>
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
