@extends('components.layout')

@section('title')
    {{ 'Users' }}
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
            <li class="active">Users</li>
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

                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-plus"></i>
                                    <b>ADD USER</b>
                                </a>


                            </div>
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Actions</th>
                                    <th>Username</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <a href="{{ route('users.edit', $user->id) }}"
                                                class="btn btn-sm btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-sm btn-danger btn-xs"
                                                onclick="event.preventDefault(); if(confirm('Are you sure?')) document.getElementById('user-{{ $user->id }}').submit();">
                                                <i class="fa fa-bitbucket"></i>
                                            </a>
                                            <form id="user-{{ $user->id }}" +
                                                action="{{ route('users.destroy', $user->id) }}" method="post">
                                                @csrf @method('DELETE')
                                            </form>

                                        </td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->company }}</td>
                                        <td>
                                            @if ($user->is_admin)
                                                <span class="badge badge-flat bg-gray">Administrator</span>
                                            @else
                                                <span class="badge badge-flat bg-gray">Standard User</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($user->status)
                                                <span class="badge badge-flat bg-green">Active</span>
                                            @else
                                                <span class="badge badge-flat bg-red">Disabled</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->created_at->diffForHumans() }}</td>

                                    </tr>
                                @endforeach
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
