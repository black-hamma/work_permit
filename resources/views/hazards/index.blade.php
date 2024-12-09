@extends('components.layout')

@section('title')
    {{ 'Hazards' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Hazards
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Hazards</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box">

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
                                        <label for="name">Hazard</label>
                                        <input type="text"
                                            class="form-control{{ $errors->first('hazard') ? ' form-error' : '' }}"
                                            name="hazard" placeholder="Type hazard name here ..."
                                            value="{{ old('hazard') }}">
                                    </div>
                                    @error('hazard')
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
                                                <b>Add Hazard</b>
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
        <div class="row">
            @foreach ($hazards as $hazard)
                <div class="col-6 col-md-4">
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <span class="username">{{ $hazard->hazard }}</span>
                            <div class="box-tools" style="margin-top: 5px">
                                <a class="btn btn-primary btn-xs" data-toggle="modal"
                                    data-target="#edit_haz{{ $hazard->id }}">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <a href="#"
                                    onclick="event.preventDefault(); if(confirm('Are you sure?')) document.getElementById('delete-form-{{ $hazard->id }}').submit();"
                                    class="btn btn-danger btn-xs"><i class="fa fa-bitbucket"></i></a>
                                <form id="delete-form-{{ $hazard->id }}" +
                                    action="{{ route('hazards.destroy', $hazard->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="edit_haz{{ $hazard->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="edit_haz_label">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <form action="{{ route('hazards.update', $hazard->id) }}" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <span class="modal-title" id="edit_dep_label">Edit Hazard</span>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="hazard"
                                            value="{{ $hazard->hazard }}" placeholder="Type hazard name here ...">
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

        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
