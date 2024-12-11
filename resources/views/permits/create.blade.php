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
                            <a href="{{ route('permits.index') }}" class="btn btn-sm btn-danger pull-right">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                <b>BACK</b>
                            </a>
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
                                            <label for="job_location_id">Job Location</label>

                                            <select
                                                class="form-control{{ $errors->first('job_location_id') ? ' form-error' : '' }} select2"
                                                style="width: 100%;" name="job_location_id" id="job_location_id">
                                                <option value="">Select ...</option>
                                                @foreach ($locations as $location)
                                                    <option value="{{ $location->id }}"
                                                        {{ old('job_location_id') == $location->id ? 'selected' : '' }}>
                                                        {{ $location->location }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @error('job_location_id')
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
                                            <select
                                                class="form-control{{ $errors->first('department_id') ? ' form-error' : '' }} select2"
                                                style="width: 100%;" name="department_id" id="department_id">
                                                <option value="">Select ...</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}"
                                                        {{ old('department_id') == $location->id ? 'selected' : '' }}>
                                                        {{ $department->department }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @error('department_id')
                                                <div class="text-red">{{ $message }}</div>
                                            @enderror
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
                                            <input type="text"
                                                class="form-control{{ $errors->first('job_description') ? ' form-error' : '' }}"
                                                id="job_description" name="job_description" placeholder="Job Description"
                                                value="{{ old('job_description') }}">
                                            @error('job_description')
                                                <div class="text-red">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="receiver_name">Name of Receiver</label>
                                            <input type="text" class="form-control" id="receiver_name"
                                                placeholder="Name of Receiver" name="receiver_name"
                                                value="{{ old('receiver_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="job_company">Job Company</label>
                                            <select class="form-control" id="job_company" name="job_company">
                                                <option value="">Select ...</option>
                                                <option value="contract_company">Contract Company</option>
                                                <option value="mps_employee">MPS Employee</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4" id="staff_id_container" style="display: none;">
                                        <div class="form-group">
                                            <label for="staff_id">Staff ID</label>
                                            <input type="text" class="form-control" id="staff_id"
                                                placeholder="Staff ID" name="staff_id" value="{{ old('staff_id') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="contract_name_container" style="display: none;">
                                        <div class="form-group">
                                            <label for="contract_name">Contract Company Name</label>
                                            <input type="text" class="form-control"id="contract_name"
                                                placeholder="Contract Company Name" name="contract_name"
                                                value="{{ old('contract_name') }}">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">

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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Permit(s) Required</label>
                                            <select class="form-control select2 select2-hidden-accessible" multiple=""
                                                data-placeholder="Select Permit(s)" style="width: 100%;" tabindex="-1"
                                                aria-hidden="true" name="permit_required[]">
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="upload-container">
                                            <p>Drag and drop your files here or <label for="fileInput">click to
                                                    upload</label></p>
                                            <input type="file" id="fileInput" multiple
                                                accept=".pdf,.docx,.jpg,.jpeg,.png">
                                            <ul class="file-list" id="fileList"></ul>
                                            {{-- <div class="actions">
                                                <button id="clearAll">Clear All</button>
                                                <button id="submit">Submit</button>
                                            </div> --}}
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="risk_assessment">Risk Assessment / Job Safety Analysis</label>
                                            <input type="file" id="risk_assessment" name="risk_assessment">

                                            <p class="help-block">Select file to upload here.</p>
                                        </div> --}}
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
                                    @foreach ($job_requirements as $job_requirement)
                                        <div class="col-6 col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="{{ $job_requirement->id }}"
                                                    id="job_requirement-{{ $job_requirement->id }}"
                                                    name="job_requirements[]">
                                                <label class="form-check-label"
                                                    for="job_requirement-{{ $job_requirement->id }}">
                                                    {{ $job_requirement->job_requirement }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach

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
                                    @foreach ($ppe_requirements as $ppe_requirement)
                                        <div class="col-6 col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="{{ $ppe_requirement->id }}"
                                                    id="ppe_requirement-{{ $ppe_requirement->id }}"
                                                    name="ppe_requirements[]">
                                                <label class="form-check-label"
                                                    for="ppe_requirement-{{ $ppe_requirement->id }}">
                                                    {{ $ppe_requirement->ppe_requirement }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach

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
                                <div class="col-md-8">
                                    @foreach ($precautionary_measures as $precautionary_measure)
                                        <div class="col-6 col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="{{ $precautionary_measure->id }}"
                                                    id="precautionary_measure-{{ $precautionary_measure->id }}"
                                                    name="precautionary_measures[]">
                                                <label class="form-check-label"
                                                    for="precautionary_measure-{{ $precautionary_measure->id }}">
                                                    {{ $precautionary_measure->precautionary_measure }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="col-md-2">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox"> Remember Me
                                        </label>
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
                                                <input type="checkbox" name="disclaimer"> I agree to the <a
                                                    href="" class="text-blue"><b>terms of service</b>
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
