@extends('components.layout')

@section('title')
    {{ 'Edit User' }}
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
                        <strong>EDIT USER</strong>
                        <a href="{{ route('users.index') }}" class="btn btn-sm btn-danger pull-right">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <b>BACK</b>
                        </a>
                    </div>
                    <!-- /.box-header -->
                    <form action="{{ route('users.edit', $user->id) }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="col-6 col-md-6">
                                        <div class="form-group">
                                            <label for="name">First Name</label>
                                            <input type="text"
                                                class="form-control{{ $errors->first('first_name') ? ' form-error' : '' }}"
                                                name="first_name" placeholder="First Name" value="{{ $user->first_name }}">
                                        </div>
                                        @error('first_name')
                                            <div class="text-red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Last Name</label>
                                            <input type="text"
                                                class="form-control{{ $errors->first('last_name') ? ' form-error' : '' }}"
                                                name="last_name" placeholder="Last Name" value="{{ $user->last_name }}">
                                        </div>
                                        @error('last_name')
                                            <div class="text-red">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="col-6 col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email"
                                                class="form-control{{ $errors->first('email') ? ' form-error' : '' }}"
                                                name="email" id="email" placeholder="Email"
                                                value="{{ $user->email }}">
                                        </div>
                                        @error('email')
                                            <div class="text-red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <input type="text"
                                                class="form-control{{ $errors->first('company') ? ' form-error' : '' }}"
                                                name="company" id="company" placeholder="Company"
                                                value="{{ $user->company }}">
                                        </div>
                                        @error('company')
                                            <div class="text-red">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="col-6 col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="number"
                                                class="form-control{{ $errors->first('phone') ? ' form-error' : '' }}"
                                                name="phone" placeholder="Phone" value="{{ $user->phone }}">
                                        </div>
                                        @error('phone')
                                            <div class="text-red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6 col-md-1">
                                        <div class="form-group">
                                            <label>Is_Admin</label>
                                            <br>
                                            <label class="switch">
                                                <input type="checkbox" name="is_admin" id="is_admin" value="1"
                                                    {{ $user->is_admin ? 'checked' : '' }}>
                                                <span class="slider round"></span>
                                            </label>

                                        </div>
                                        @error('is_admin')
                                            <div class="text-red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <br>
                                            <label class="switch">
                                                <input type="checkbox" name="status" id="status" value="1"
                                                    {{ $user->status ? 'checked' : '' }}>
                                                <span class="slider round"></span>
                                            </label>

                                        </div>
                                        @error('is_admin')
                                            <div class="text-red">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-sm btn-success pull-right"
                                                style="margin-right: 15px">
                                                <i class="fa fa-save" aria-hidden="true"
                                                    style="font-size: 12px !important; padding-right: 5px"></i>
                                                <b>Save changes</b>
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
