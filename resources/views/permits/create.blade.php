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
            <form action="{{ route('permits.store') }}" method="post">
                @csrf
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border text-blue">
                            <strong>JOB LOCATION</strong>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Start Date:</label>

                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text"
                                                    class="form-control{{ $errors->first('start_date') ? ' form-error' : '' }} pull-right"
                                                    id="datepicker" name="start_date" value="{{ old('start_date') }}">
                                            </div>
                                            <!-- /.input group -->
                                            @error('start_date')
                                                <div class="text-red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>End Date:</label>

                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text"
                                                    class="form-control{{ $errors->first('end_date') ? ' form-error' : '' }} pull-right"
                                                    id="Edatepicker" name="end_date" value="{{ old('end_date') }}">
                                            </div>
                                            <!-- /.input group -->
                                            @error('end_date')
                                                <div class="text-red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{--  <div class="col-md-4">
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
                                </div>  --}}
                                    <div class="col-md-4">
                                        {{--  <div class="form-group">
                                        <label for="job_location">Job Location</label>
                                        <input type="text" class="form-control" id="job_location"
                                            placeholder="Job Location">
                                    </div>  --}}
                                        <div class="form-group">
                                            <label>Job Location</label>
                                            <select
                                                class="form-control{{ $errors->first('job_location') ? ' form-error' : '' }} select2"
                                                style="width: 100%;" name="job_location">
                                                <option>Select Job Location</option>
                                                <option value="Location 1">Alaska</option>
                                                <option value="Location 2">California</option>
                                                <option value="Location 3">Delaware</option>
                                                <option value="Location 4">Tennessee</option>
                                                <option value="Location 5">Texas</option>
                                                <option value="Location 6">Washington</option>
                                            </select>
                                            @error('job_location')
                                                <div class="text-red">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sub_location">Sub Location</label>
                                            <input type="text"
                                                class="form-control{{ $errors->first('sub_location') ? ' form-error' : '' }}"
                                                id="sub_location" placeholder="Sub Location" name="sub_location"
                                                value="{{ old('sub_location') }}">
                                            @error('sub_location')
                                                <div class="text-red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <select class="form-control select2" style="width: 100%;" name="department">
                                                <option>Select Department</option>
                                                <option value="department 1">Alaska</option>
                                                <option value="department 2">California</option>
                                                <option value="department 3">Delaware</option>
                                                <option value="department 4">Tennessee</option>
                                                <option value="department 5">Texas</option>
                                                <option value="department 6">Washington</option>
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
                                            <textarea class="form-control{{ $errors->first('equipment_details') ? ' form-error' : '' }}" rows="2"
                                                placeholder="Enter ..." name="equipment_details">{{ old('equipment_details') }}</textarea>
                                            @error('equipment_details')
                                                <div class="text-red">{{ $message }}</div>
                                            @enderror
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
                                                name="job_description" placeholder="Job Description"
                                                value="{{ old('job_description') }}">
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
                                                placeholder="Name of Receiver" name="receiver_name"
                                                value="{{ old('receiver_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="contract_company">Contract Company / MPS
                                                Employer</label>
                                            <input type="text" class="form-control" id="contract_company"
                                                placeholder="Contract Company / MPS Employer" name="contract_company"
                                                value="{{ old('contract_company') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="staff_id">Staff ID</label>
                                            <input type="text" class="form-control" id="staff_id"
                                                placeholder="Staff ID" name="staff_id" value="{{ old('staff_id') }}">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-8">

                                        <div class="form-group">
                                            <label>Workers names</label>
                                            {{-- <div class="row">
                                            <div class="customer_records">
                                                <input name="customer_name" type="text" class="form-control">
                                                <button class="extra-fields-customer">Add
                                                    worker</button>
                                            </div>

                                            <div class="customer_records_dynamic"></div>

                                        </div>  --}}

                                            <div id="username-container">
                                                <input type="text" id="usernames"
                                                    placeholder="Type a name and press Enter" />
                                                <div id="username-tags"></div>
                                                <input type="hidden" name="workers_names" id="usernamesArray" />
                                            </div>

                                            {{--  <textarea class="form-control" rows="2" placeholder="Enter names separated by commas..."></textarea>  --}}
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="risk_assessment">Risk Assessment / Job Safety Analysis</label>
                                            <input type="file" id="risk_assessment" name="risk_assessment">

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
                                            <select class="form-control select2 select2-hidden-accessible"
                                                multiple="multiple" data-placeholder="Select Permit(s)"
                                                style="width: 100%;" tabindex="-1" aria-hidden="true"
                                                name="permit_required[]">
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
                                            <input class="form-check-input" type="checkbox"
                                                name="hazard_identification[]" value="Fall from height" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1">
                                                Fall from height
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                {{ old('hazard_identification') == 'on' ? 'checked' : '' }}
                                                name="hazard_identification[]" value="Hazardous substance"
                                                id="checkbox2">
                                            <label class="form-check-label" for="checkbox2">
                                                Hazardous substance
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Buried services"
                                                id="checkbox3" name="hazard_identification[]">
                                            <label class="form-check-label" for="checkbox3">
                                                Buried services
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>




                        </div>
                        <!-- /.box-body -->

                        <div class="box-header with-border text-blue">
                            <strong>JOB REQUIREMENTS</strong>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="job_requirements1"
                                                id="job_requirements1" name="job_requirements[]">
                                            <label class="form-check-label" for="job_requirements1">
                                                Fall from height
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="job_requirements2"
                                                id="job_requirements2" name="job_requirements[]">
                                            <label class="form-check-label" for="job_requirements2">
                                                Hazardous substance
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="job_requirements3"
                                                id="job_requirements3" name="job_requirements[]">
                                            <label class="form-check-label" for="job_requirements3">
                                                Buried services
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="job_requirements4"
                                                id="job_requirements4" name="job_requirements[]">
                                            <label class="form-check-label" for="job_requirements4">
                                                Gas / Fumes
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="job_requirements5"
                                                id="job_requirements5" name="job_requirements[]">
                                            <label class="form-check-label" for="job_requirements5">
                                                Environmental pollution
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="job_requirements6"
                                                id="job_requirements6" name="job_requirements[]">
                                            <label class="form-check-label" for="job_requirements6">
                                                High/Low Temp
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="job_requirements8"
                                                id="job_requirements8" name="job_requirements[]">
                                            <label class="form-check-label" for="job_requirements8">
                                                Lone working
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="job_requirement9"
                                                id="job_requirement9" name="job_requirements[]">
                                            <label class="form-check-label" for="job_requirement9">
                                                Overhead service
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="job_requirements7"
                                                id="job_requirements7" name="job_requirements[]">
                                            <label class="form-check-label" for="job_requirements7">
                                                Oxygen deficiency
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>




                        </div>
                        <!-- /.box-body -->

                        <div class="box-header with-border text-blue">
                            <strong>PPE REQUIREMENTS</strong>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ppe_requirements1"
                                                id="ppe_requirements1" name="ppe_requirements[]">
                                            <label class="form-check-label" for="ppe_requirements1">
                                                Fall from height
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ppe_requirements2"
                                                id="ppe_requirements2" name="ppe_requirements[]">
                                            <label class="form-check-label" for="ppe_requirements2">
                                                Hazardous substance
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ppe_requirements3"
                                                id="ppe_requirements3" name="ppe_requirements[]">
                                            <label class="form-check-label" for="ppe_requirements3">
                                                Buried services
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ppe_requirements4"
                                                id="ppe_requirements4" name="ppe_requirements[]">
                                            <label class="form-check-label" for="ppe_requirements4">
                                                Gas / Fumes
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ppe_requirements5"
                                                id="ppe_requirements5" name="ppe_requirements[]">
                                            <label class="form-check-label" for="ppe_requirements5">
                                                Environmental pollution
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ppe_requirements6"
                                                id="ppe_requirements6" name="ppe_requirements[]">
                                            <label class="form-check-label" for="ppe_requirements6">
                                                High/Low Temp
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </div>




                        </div>
                        <!-- /.box-body -->
                        <div class="box-header with-border text-blue">
                            <strong>PRECAUTIONARY MEASURES</strong>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="precautionary_measure0" id="precautionary_measure0"
                                                name="precautionary_measure[]">
                                            <label class="form-check-label" for="precautionary_measure0">
                                                Fall from height
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="precautionary_measure1" id="precautionary_measure1"
                                                name="precautionary_measure[]">
                                            <label class="form-check-label" for="precautionary_measure1">
                                                Hazardous substance
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="precautionary_measure2" id="precautionary_measure2"
                                                name="precautionary_measure[]">
                                            <label class="form-check-label" for="precautionary_measure2">
                                                Buried services
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="precautionary_measure3" id="precautionary_measure3">
                                            <label class="form-check-label" for="precautionary_measure3">
                                                Gas / Fumes
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="precautionary_measure4" id="precautionary_measure4"
                                                name="precautionary_measure[]">
                                            <label class="form-check-label" for="precautionary_measure4">
                                                Environmental pollution
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="precautionary_measure5" id="precautionary_measure5"
                                                name="precautionary_measure[]">
                                            <label class="form-check-label" for="precautionary_measure5">
                                                High/Low Temp
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="precautionary_measure6" id="precautionary_measure6"
                                                name="precautionary_measure[]">
                                            <label class="form-check-label" for="precautionary_measure6">
                                                Lone working
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="precautionary_measure7" id="precautionary_measure7"
                                                name="precautionary_measure[]">
                                            <label class="form-check-label" for="precautionary_measure7">
                                                Overhead service
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
                                                <input type="checkbox" name="is_disclaimer" value="1"> I agree to
                                                the <a href="" class="text-blue"><b>terms of service</b>
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


                        <div class="box-header">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"
                                        aria-hidden="true" style="font-size: 12px !important; padding-right: 4px"></i>
                                    <b>SUBMIT</b></button>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </form>
        </div>
        <!-- /.col -->
        </div>

        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
