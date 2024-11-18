@extends('components.layout')

@section('title')
    {{ 'Permits' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Users
            <small>Add New</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li><a href="{{ route('users.index') }}">Users</a></li>
            <li class="active">Add new</li>
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
                                <div class="col-6 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Company">Company</label>
                                        <input type="text" class="form-control" name="company" placeholder="Company">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Phone">Phone</label>
                                        <input type="number" class="form-control" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control select2" name="access" style="width: 100%; ">
                                            <option selected="selected" value="User">User</option>
                                            <option value="HSSE">HSSE</option>
                                            <option value="Administrator">Administrator</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-flat btn-primary pull-right">Create user</button>
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
