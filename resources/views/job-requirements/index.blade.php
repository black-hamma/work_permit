@extends('components.layout')

@section('title')
    {{ 'Job Requirements' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Job Requirements
            {{-- <small>All Hazards</small> --}}
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Job Requirements</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

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
                                    <label for="name">New Job Requirement</label>
                                    <input type="text"
                                        class="form-control{{ $errors->first('job_requirement') ? ' form-error' : '' }}"
                                        name="job_requirement" placeholder="Type job requirement here ..."
                                        value="{{ old('job_requirement') }}">
                                </div>
                                @error('job_requirement')
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
                                            <b>Add Requirement</b>
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
            @foreach ($requirements as $requirement)
                <div class="col-6 col-md-4">
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <span class="username">{{ $requirement->job_requirement }}</span>
                            <div class="box-tools" style="margin-top: 5px">
                                <a class="btn btn-primary btn-xs" data-toggle="modal"
                                    data-target="#edit_job{{ $requirement->id }}">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <a href="#"
                                    onclick="event.preventDefault(); if(confirm('Are you sure?')) document.getElementById('delete-form-{{ $requirement->id }}').submit();"
                                    class="btn btn-danger btn-xs"><i class="fa fa-bitbucket"></i></a>
                                <form id="delete-form-{{ $requirement->id }}" +
                                    action="{{ route('job-requirements.destroy', $requirement->id) }}" method="post">
                                    @csrf @method('DELETE')
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="edit_job{{ $requirement->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="edit_job_label">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <form action="{{ route('job-requirements.update', $requirement->id) }}" method="POST">
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
                                            value="{{ $requirement->job_requirement }}"
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

            {{-- <div class="col-6 col-md-4">
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
            </div> --}}

        </div>

        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
