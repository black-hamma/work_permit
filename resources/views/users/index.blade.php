@extends('components.layout')

@section('title')
    {{ 'Permits' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Users
            <small>All users</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li><a href="#">Users</a></li>
            <li class="active">All Permits</li>
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
                                    <button type="button" class="btn btn-default btn-flat">
                                        <a href="{{ route('users.create') }}"><b>Add user</b></a>
                                    </button>

                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
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
                                    <td>Tiger Nixon</td>
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
                                    <td>Garrett Winters</td>
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
                                    <td>Ashton Cox</td>
                                    <td>ACox@gmail.com</td>
                                    <td>Junior Technical Author</td>
                                    <td>2011-04-25 17:00</td>
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
                                    <td>Cedric Kelly</td>
                                    <td>CKelly@gmail.com</td>
                                    <td>Senior Javascript Developer</td>
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
                                    <td>Airi Satou</td>
                                    <td>ASatou@gmail.com</td>
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
                                    <td>Brielle Williamson</td>
                                    <td>BWilliamson@gmail.com</td>
                                    <td>Integration Specialist</td>
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
                                    <td>Brielle Williamson</td>
                                    <td>BWilliamson@gmail.com</td>
                                    <td>New York</td>
                                    <td>2011-04-25 17:00</td>
                                    <td><span class="badge badge-flat bg-green">Active</span></td>
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

        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
