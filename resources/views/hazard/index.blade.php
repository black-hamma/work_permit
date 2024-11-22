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

        <div class="row">
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>Created</th>
                                    <th>Status</th>
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
                                    <td>Nixon</td>
                                    <td>TNixon@gmail.com</td>
                                    <td>Accountant</td>
                                    <td>2011-04-25 13:00</td>
                                    <td><span class="badge badge-flat bg-red">Active</span></td>
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
                                    <td>Garrett</td>
                                    <td>Winters</td>
                                    <td>GWinters@gmail.com</td>
                                    <td>Accountant</td>
                                    <td>2011-04-25 17:00</td>
                                    <td><span class="badge badge-flat bg-green">Active</span></td>
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
                                    <td>Ashton</td>
                                    <td>Cox</td>
                                    <td>ACox@gmail.com</td>
                                    <td>Junior Technical Author</td>
                                    <td>2011-04-25 17:00</td>
                                    <td><span class="badge badge-flat bg-red">Active</span></td>
                                </tr>

                            </tbody>

                        </table>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- Box Comment -->
                <div class="box box-widget">
                    <div class="box-header with-border">
                        <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                        <!-- /.user-block -->
                        <div class="box-tools">
                            <a href="" class="btn btn-box-tool" data-toggle="tooltip" title=""
                                data-original-title="Mark as read">
                                <i class="fa fa-pencil"></i></a>

                            <a href="" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-bitbucket"></i></a>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->

                </div>
                <!-- /.box -->
            </div>
        </div>

        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
