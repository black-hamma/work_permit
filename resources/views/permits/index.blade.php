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
                                <div class="btn-group btn-group-sm">

                                    <a href="{{ route('permits.create') }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-plus"></i>
                                        <b>CREATE PERMIT</b>
                                    </a>

                                </div>
                                {{--  <a href="" class="btn btn-default btn-sm btn-flat text-center">
                                    <strong> Create</strong>
                                </a>  --}}
                            </div>
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Request ID</th>
                                    <th>Description</th>
                                    <th>Requester</th>
                                    <th>Start date / Time</th>
                                    <th>End date / Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="btn btn-xs btn-primary">
                                            <i class="fa fa-pencil"></i>
                                        </a>

                                        <a class="btn btn-xs btn-danger">
                                            <i class="fa fa-bitbucket"></i>
                                        </a>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>Even if jQuery couldnt find .collapsible, it would return an empty collection and
                                        would have the each method.</td>
                                    <td>Edinburgh</td>
                                    <td>2011-04-25 13:00</td>
                                    <td>2011-04-25 17:00</td>
                                    <td>Pending</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="btn btn-xs btn-primary">
                                            <i class="fa fa-pencil"></i>
                                        </a>

                                        <a class="btn btn-xs btn-danger">
                                            <i class="fa fa-bitbucket"></i>
                                        </a>
                                    </td>
                                    <td>Tiger Nixon</td>
                                    <td>Even if jQuery couldnt find .collapsible, it would return an empty collection and
                                        would have the each method.</td>
                                    <td>Edinburgh</td>
                                    <td>2011-04-25 13:00</td>
                                    <td>2011-04-25 17:00</td>
                                    <td>Pending</td>
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
