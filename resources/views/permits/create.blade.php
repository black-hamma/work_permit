@extends('components.layout')

@section('title')
    {{ 'Permits' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Permits
            <small>Create</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li><a href="{{ route('permits.index') }}">Permits</a></li>
            <li class="active">create</li>
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
                                    <button type="button" class="btn btn-default btn-flat"><a
                                            href="{{ route('login') }}"><b>Create</b></a></button>
                                    <button type="button" class="btn btn-default btn-flat"><i
                                            class="fa fa-align-center"></i></button>
                                    <button type="button" class="btn btn-default btn-flat"><i
                                            class="fa fa-align-right"></i></button>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">



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
