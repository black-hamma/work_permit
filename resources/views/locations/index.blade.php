@extends('components.layout')

@section('title')
    {{ 'Locations' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Locations
            <small>All locations</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li><a href="#">Users</a></li>
            <li class="active">All Locations</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        {{--  <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('locations.create') }}" class="add-new-link">
                                        <i class="fa fa-plus"></i>
                                        <b>ADD LOCATION</b>
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
        </div>  --}}

        <div class="box">
            <div class="box-body">

                <form method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">

                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="location">New Location</label>
                                    <input type="text"
                                        class="form-control{{ $errors->first('location') ? ' form-error' : '' }}"
                                        name="location" placeholder="Type location here ..." value="{{ old('location') }}"
                                        id="location">
                                </div>
                                @error('location')
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
                                            <b>Add Location</b>
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
            @foreach ($locations as $location)
                <div class="col-6 col-md-4">
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <span class="username">{{ $location->location }}</span>
                            <div class="box-tools" style="margin-top: 5px">
                                <a class="btn btn-primary btn-xs" data-toggle="modal"
                                    data-target="#edit_job{{ $location->id }}">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <a href="{{ route('job-requirements.destroy', $location->id) }}"
                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $location->id }}').submit();"
                                    class="btn btn-danger btn-xs"><i class="fa fa-bitbucket"></i></a>
                                <form id="delete-form-{{ $location->id }}" +
                                    action="{{ route('job-requirements.destroy', $location->id) }}" method="post">
                                    @csrf @method('DELETE')
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="edit_job{{ $location->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="edit_job_label">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <form action="{{ route('locations.update', $location->id) }}" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <span class="modal-title" id="edit_job_label">Edit Job Requirement</span>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="job_requirement"
                                            value="{{ $location->location }}"
                                            placeholder="Type job requirement name here ...">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                                        <i class="fa fa-times" aria-hidden="true"
                                            style="font-size: 12px !important; padding-right: 5px"></i>Close</button>
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-save" aria-hidden="true"
                                            style="font-size: 12px !important; padding-right: 5px"></i>
                                        Save changes
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- /.content -->
@endsection