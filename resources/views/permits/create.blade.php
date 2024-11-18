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
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border text-blue">
                        <strong>JOB LOCATION</strong>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Duration (Start & End - Date Time)</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservationtime">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="job_location">Job Location</label>
                                        <input type="text" class="form-control" id="job_location"
                                            placeholder="Job Location">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sub_location">Sub Location</label>
                                        <input type="text" class="form-control" id="sub_location"
                                            placeholder="Sub Location">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select class="form-control select2" style="width: 100%; ">
                                            <option selected="selected">Alaska</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Plant/Equipment Details</label>
                                        <textarea class="form-control" rows="2" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- /.box-body -->
                    <div class="box-header with-border text-blue">
                        <strong>NATURE OF WORK</strong>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="job_description">Job Description</label>
                                        <input type="text" class="form-control" id="job_description"
                                            placeholder="Job Description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="receiver_name">Name of Receiver</label>
                                        <input type="text" class="form-control" id="receiver_name"
                                            placeholder="Name of Receiver">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="contract_company">Contract Company / MPS Employer</label>
                                                    <input type="text" class="form-control" id="contract_company"
                                                        placeholder="Contract Company / MPS Employer">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="staff_id">Staff ID</label>
                                                    <input type="text" class="form-control" id="staff_id"
                                                        placeholder="Staff ID">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Names of works</label>
                                        <textarea class="form-control" rows="2" placeholder="Enter names separated by commas..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Risk Assessment / Job Safety Analysis</label>
                                        <input type="file" id="exampleInputFile">

                                        <p class="help-block">Select file to upload here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Permit(s) Required</label>
                                        <select class="form-control select2 select2-hidden-accessible" multiple=""
                                            data-placeholder="Select Permit(s)" style="width: 100%;" tabindex="-1"
                                            aria-hidden="true">
                                            <option>Civil Work</option>
                                            <option>Excavation</option>
                                            <option>Confined Space</option>
                                            <option>Electric work</option>
                                            <option>Work at height</option>
                                            <option>Hazardous / Dangerous substance</option>
                                            <option>On or Near water</option>
                                            <option>Hot work</option>
                                            <option>Pressure systems</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-header with-border text-blue">
                        <strong>HAZARD IDENTIFICATION</strong>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Fall from height
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                                        <label class="form-check-label" for="checkbox2">
                                            Hazardous substance
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                                        <label class="form-check-label" for="checkbox3">
                                            Buried services
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                                        <label class="form-check-label" for="checkbox4">
                                            Gas / Fumes
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox5">
                                        <label class="form-check-label" for="checkbox5">
                                            Environmental pollution
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox6">
                                        <label class="form-check-label" for="checkbox6">
                                            High/Low Temp
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox6">
                                        <label class="form-check-label" for="checkbox6">
                                            Lone working
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="overhead_service">
                                        <label class="form-check-label" for="overhead_service">
                                            Overhead service
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="oxygen_deficiency">
                                        <label class="form-check-label" for="oxygen_deficiency">
                                            Oxygen deficiency
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="adverse_weather">
                                        <label class="form-check-label" for="adverse_weather">
                                            Adverse weather
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="improper_communication">
                                        <label class="form-check-label" for="improper_communication">
                                            Improper communication
                                        </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="falling">
                                        <label class="form-check-label" for="falling">
                                            container falling from truck
                                        </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="noise">
                                        <label class="form-check-label" for="noise">
                                            Noise
                                        </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="sharp_object">
                                        <label class="form-check-label" for="sharp_object">
                                            Sharp object
                                        </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="sharp_object">
                                        <label class="form-check-label" for="sharp_object">
                                            Sharp object
                                        </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="poor_lighting">
                                        <label class="form-check-label" for="poor_lighting">
                                            Poor Lighting
                                        </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="slip">
                                        <label class="form-check-label" for="slip">
                                            Slip/Trip/Fall
                                        </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="pressure">
                                        <label class="form-check-label" for="pressure">
                                            High/Low Pressure
                                        </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="pressure">
                                        <label class="form-check-label" for="pressure">
                                            High/Low Pressure
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>




                    </div>
                    <!-- /.box-body -->

                    <div class="box-header bg-red">
                        <strong>DISCLAIMER</strong>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="callout">
                                    {{-- <a href=""
                                        style="border: 0.5px solid #ccc; padding: 10px 40px; color: red ">Read
                                        Carefully
                                    </a> --}}

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> I agree to the <a href=""
                                                class="text-blue"><b>terms of service</b>
                                            </a>.
                                        </label>
                                    </div>
                                    <p class="text-red">
                                        By checking this box, I confirm that I have thoroughly reviewed the hazard
                                        identifications and job requirements, possess the necessary personal protective
                                        equipment (PPE), and have taken all appropriate precautionary measures. I also
                                        acknowledge that MPS is not liable for any consequences resulting from my
                                        negligence.
                                    </p>
                                </div>


                            </div>
                        </div>
                    </div>



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
