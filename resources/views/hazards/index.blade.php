@extends('components.layout')

@section('title')
    {{ 'HazardIdentifications' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            HazardIdentifications
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">HazardIdentifications</li>
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

                                    <div class="form-group">
                                        <label for="hazard_identification">Hazard Iidentification</label>
                                        <input type="text"
                                            class="form-control{{ $errors->first('hazard_identification') ? ' form-error' : '' }}"
                                            name="hazard_identification" placeholder="Type Hazard Identification ..."
                                            value="{{ old('hazard_identification') }}">
                                    </div>
                                    @error('hazard_identification')
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
                                                <b>Add HazardIdentification</b>
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
            @foreach ($hazard_identifications as $hazard_identification)
                <div class="col-6 col-md-4">
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <span class="username">{{ $hazard_identification->hazard_identification }}</span>
                            <div class="box-tools" style="margin-top: 5px">
                                <a class="btn btn-primary btn-xs" data-toggle="modal"
                                    data-target="#edit_haz{{ $hazard_identification->id }}">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <a href="#"
                                    onclick="event.preventDefault(); if(confirm('Are you sure?')) document.getElementById('delete-form-{{ $hazard_identification->id }}').submit();"
                                    class="btn btn-danger btn-xs"><i class="fa fa-bitbucket"></i></a>
                                <form id="delete-form-{{ $hazard_identification->id }}" +
                                    action="{{ route('HazardIdentifications.destroy', $hazard_identification->id) }}"
                                    method="POST">
                                    @csrf @method('DELETE')
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="edit_haz{{ $hazard_identification->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="edit_haz_label">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <form action="{{ route('hazard_identification.update', $hazard_identification->id) }}"
                            method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <span class="modal-title" id="edit_dep_label">Edit HazardIdentification</span>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="HazardIdentification"
                                            value="{{ $hazard_identification->hazard_identification }}"
                                            placeholder="Type HazardIdentification name here ...">
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
