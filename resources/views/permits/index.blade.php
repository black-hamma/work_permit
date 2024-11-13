@extends('components.layout')

@section('title')
    {{ 'Permits' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Permits
            <small>All Permits</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li><a href="#">Permits</a></li>
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
                                <a href="" class="btn btn-primary btn-flat text-center"
                                    style="float: right; margin-bottom: 0 !important">

                                    Create Permit
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Responses</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td> <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td>7</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td>6</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td>
                                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>1.9</td>
                                    <td>
                                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Response</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </tfoot>
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
