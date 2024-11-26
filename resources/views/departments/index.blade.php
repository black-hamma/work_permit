@extends('components.layout')

@section('title')
    {{ 'Departments' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Departments
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Departments</li>
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
                                    <label for="department">New Department</label>
                                    <input type="text"
                                        class="form-control{{ $errors->first('department') ? ' form-error' : '' }}"
                                        name="department" placeholder="Type department here ..."
                                        value="{{ old('department') }}" id="department">
                                </div>
                                @error('department')
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
                                            <b>Add Department</b>
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
            @foreach ($departments as $department)
                <div class="col-6 col-md-4">
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <span class="username">{{ $department->department }}</span>
                            <div class="box-tools" style="margin-top: 5px">
                                <a class="btn btn-primary btn-xs" data-toggle="modal"
                                    data-target="#edit_dep{{ $department->id }}">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <a href="{{ route('departments.destroy', $department->id) }}"
                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $department->id }}').submit();"
                                    class="btn btn-danger btn-xs"><i class="fa fa-bitbucket"></i></a>
                                <form id="delete-form-{{ $department->id }}" +
                                    action="{{ route('departments.destroy', $department->id) }}" method="post">
                                    @csrf @method('DELETE')
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="edit_dep{{ $department->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="edit_dep_label">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <form action="{{ route('departments.update', $department->id) }}" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <span class="modal-title" id="edit_dep_label">Edit Department</span>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="department"
                                            value="{{ $department->department }}"
                                            placeholder="Type department name here ...">
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
