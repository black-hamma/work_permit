@extends('components.layout')

@section('title')
    {{ 'Precautionary Measures' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Precautionary Measures
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Precautionary Measures</a></li>
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
                                    <label for="name">New Precautionary Measure</label>
                                    <input type="text"
                                        class="form-control{{ $errors->first('precautionary_measure') ? ' form-error' : '' }}"
                                        name="precautionary_measure" placeholder="Type Precautionary measure here ..."
                                        value="{{ old('precautionary_measure') }}">
                                </div>
                                @error('precautionary_measure')
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
                                            <b>Add Measure</b>
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
            @foreach ($measures as $measure)
                <div class="col-6 col-md-4">
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <span class="username">{{ $measure->precautionary_measure }}</span>
                            <div class="box-tools" style="margin-top: 5px">
                                <a class="btn btn-primary btn-xs" data-toggle="modal"
                                    data-target="#edit_job{{ $measure->id }}">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <a onclick="event.preventDefault(); if(confirm('Are you sure?')) document.getElementById('delete-form-{{ $measure->id }}').submit();"
                                    href="#" class="btn btn-danger btn-xs"><i class="fa fa-bitbucket"></i></a>
                                <form id="delete-form-{{ $measure->id }}" +
                                    action="{{ route('precautionary-measures.destroy', $measure->id) }}" method="post">

                                    @csrf @method('DELETE')

                                </form>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="edit_job{{ $measure->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="edit_job_label">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <form action="{{ route('precautionary-measures.update', $measure->id) }}" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <span class="modal-title" id="edit_job_label">Edit Precautionary Measure</span>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="precautionary_measure"
                                            value="{{ $measure->precautionary_measure }}"
                                            placeholder="Type precautionary measure here ...">
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
