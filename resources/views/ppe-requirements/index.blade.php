@extends('components.layout')

@section('title')
    {{ 'PPE Requirements' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            PPE Requirements
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">PPE Requirements</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-body">
                <form action="{{ route('ppe-requirements.store') }}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">

                                <div class="form-group">
                                    <label for="ppe_requirement">New PPE Requirement</label>
                                    <input type="text"
                                        class="form-control{{ $errors->first('ppe_requirement') ? ' form-error' : '' }}"
                                        name="ppe_requirement" placeholder="Type PPE requirement here ..."
                                        value="{{ old('ppe_requirement') }}">
                                </div>
                                @error('ppe_requirement')
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
                                            <b>Add Requirement</b>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-4">
                <div class="box box-widget">
                    <div class="box-header with-border">
                        <span class="username">Workers receive safty induction & toolbox briefcase.</span>
                        <div class="box-tools" style="margin-top: 5px">
                            <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit_hazard">
                                <i class="fa fa-pencil"></i>
                            </a>

                            <a href="" class="btn btn-danger btn-xs"><i class="fa fa-bitbucket"></i></a>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="box box-widget">
                    <div class="box-header with-border">
                        <span class="username">Environmental pollution</span>
                        <div class="box-tools" style="margin-top: 5px">
                            <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit_hazard">
                                <i class="fa fa-pencil"></i>
                            </a>

                            <a href="" class="btn btn-danger btn-xs"><i class="fa fa-bitbucket"></i></a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="box box-widget">
                    <div class="box-header with-border">
                        <span class="username">Environmental pollution</span>
                        <div class="box-tools" style="margin-top: 5px">
                            <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit_hazard">
                                <i class="fa fa-pencil"></i>
                            </a>

                            <a href="" class="btn btn-danger btn-xs"><i class="fa fa-bitbucket"></i></a>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
