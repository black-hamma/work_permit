@extends('components.layout')

@section('title')
    {{ 'Hazards' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Hazards
            <small>All Hazards</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li><a href="{{ route('hazards.index') }}">Hazards</a></li>
            <li class="active">All Hazards</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        {{-- <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('hazards.create') }}" class="add-new-link">
                                        <i class="fa fa-plus"></i>
                                        <b>ADD HAZARD</b>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Actions</th>
                                    <th>Hazard</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="btn btn-sm btn-bitbucket">
                                            <i class="fa fa-bitbucket"></i>
                                        </a>

                                        <a class="btn btn-sm btn-bitbucket">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
                                    <td>Tiger</td>

                                </tr>
                                <tr>
                                    <td>
                                        <a class="btn btn-sm btn-bitbucket">
                                            <i class="fa fa-bitbucket"></i>
                                        </a>
                                        <a class="btn btn-sm btn-bitbucket">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
                                    <td>Workers receive safty induction & toolbox briefcase.</td>

                                </tr>
                                <tr>
                                    <td>
                                        <a class="btn btn-sm btn-bitbucket">
                                            <i class="fa fa-bitbucket"></i>
                                        </a>
                                        <a class="btn btn-sm btn-bitbucket">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
                                    <td>Workers receive safty induction & toolbox briefcase.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div> --}}
        <div class="box">
            <div class="box-header">
                <div class="row">
                    <div class="col-md-12">
                        {{-- <div class="btn-group btn-group-sm"> --}}

                        <a href="{{ route('hazards.create') }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <b>ADD NEW</b>
                        </a>
                        {{-- </div> --}}

                    </div>
                </div>
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
