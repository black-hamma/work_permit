<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('dist/img/mps-logo.png') }}">
    <title>MPS | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    {{--  <!-- DataTables -->  --}}
    {{--  <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}" />  --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">

    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">


    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('toastr/build/toastr.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">


    <script src="{{ asset('toastr/build/toastr.min.js') }}"></script>


    <style>
        .select2-container .select2-selection--single {
            height: 34px;
            border: 1px solid #ccc;
        }

        .select2-container--default .select2-selection--single {
            border-radius: 0 !important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #3c8dbc;
            border-color: #367fa9;
            padding: 1px 10px;
            color: #fff;
        }

        .select2-container--default .select2-selection--multiple {
            /* border: 1px solid #d2d6de; */
            border-radius: 0;
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border: solid #ccc 1px;
            outline: 0;
        }

        .select2-container .select2-selection--multiple {
            min-height: 32px !important;

        }

        .datepicker table tr td.active:hover,
        .datepicker table tr td.active:hover:hover,
        .datepicker table tr td.active.disabled:hover,
        .datepicker table tr td.active.disabled:hover:hover,
        .datepicker table tr td.active:focus,
        .datepicker table tr td.active:hover:focus,
        .datepicker table tr td.active.disabled:focus,
        .datepicker table tr td.active.disabled:hover:focus,
        .datepicker table tr td.active:active,
        .datepicker table tr td.active:hover:active,
        .datepicker table tr td.active.disabled:active,
        .datepicker table tr td.active.disabled:hover:active,
        .datepicker table tr td.active.active,
        .datepicker table tr td.active:hover.active,
        .datepicker table tr td.active.disabled.active,
        .datepicker table tr td.active.disabled:hover.active,
        .open .dropdown-toggle.datepicker table tr td.active,
        .open .dropdown-toggle.datepicker table tr td.active:hover,
        .open .dropdown-toggle.datepicker table tr td.active.disabled,
        .open .dropdown-toggle.datepicker table tr td.active.disabled:hover {
            color: #ffffff;
            background: #285e8e;
            border-color: #285e8e;
        }

        #usernames {
            width: 100%;
            padding: 6px;
            margin-bottom: 5px;
            border-radius: 0px !important;
            border: 1px solid #ccc;
        }

        #usernames:focus {
            border-radius: 0px !important;
            border: 1px solid #3c8dbc;
            outline: none;
        }

        .username-tag {
            display: inline-block;
            background-color: #367fa9;
            color: #fff;
            border-radius: 3px;
            padding: 3px 25px 3px 10px;
            margin: 5px;
            font-size: 14px;
            cursor: pointer;
            position: relative;
        }

        .remove-btn {
            margin-left: 10px;
            cursor: pointer;
            font-weight: bold;
            position: absolute;
        }

        .form-error,
        .form-error:focus {
            border: 1px solid #e74c3c;
        }

        .modal-footer,
        .modal-header {
            padding: 10px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .switch>input:checked+.slider {
            background-color: #2196F3;
        }

        .switch>input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        //upload

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }

        .upload-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border: 2px dashed #007BFF;
            border-radius: 10px;
            text-align: center;
        }

        .upload-container:hover {
            background-color: #f0f8ff;
        }

        .upload-container input[type="file"] {
            display: none;
        }

        .upload-container label {
            font-size: 16px;
            color: #007BFF;
            cursor: pointer;
            text-decoration: underline;
        }

        .file-list {
            margin-top: 20px;
            list-style: none;
            padding: 0;
        }

        .file-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background: #f1f1f1;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .file-list li span {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 70%;
        }

        .file-list .file-remove-btn {
            background: #FF5C5C;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .file-list .file-remove-btn:hover {
            background: #ff3333;
        }

        .actions {
            margin-top: 20px;
        }

        .actions button {
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .actions button:hover {
            background: #0056b3;
        }



        //upload

        @media screen and (max-width: 767px) {
            div.dt-container div.dt-layout-row:not(.dt-layout-table) {
                display: flex;
            }
        }
    </style>


</head>

<body class="hold-transition skin-blue sidebar-mini fixed">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini" style="font-size: 10px">HSEMS</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg" style="font-size: small;">HSE Management System</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">

                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">2</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 2 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                                                        class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="{{ asset('dist/img/user3-128x128.jpg') }}"
                                                        class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                                <span class="hidden-xs">{{ auth()->user()->last_name }}</span>
                            </a>
                            <ul class="dropdown-menu" style="width: 100px;">
                                <!-- Menu Footer-->
                                <li><a href="#">Profile</a></li>
                                <li>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('sign_out').submit();">Sign
                                        out
                                    </a>
                                </li>

                                <form action="{{ route('logout') }}" method="POST" id="sign_out">
                                    @csrf

                                </form>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-clipboard"></i>
                            <span>Permits Request</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('permits.index') }}"><i class="fa fa-circle-o"></i>
                                    Job Safety Permits
                                </a>
                            </li>
                            <li><a href=""><i class="fa fa-circle-o"></i>Approvals</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="">
                            <i class="fa fa-briefcase"></i> <span>Jobs Monitoring</span>
                        </a>
                    </li>

                    @auth
                        @if (auth()->user()->is_admin == 1)
                            <li class="header">MANAGEMENT</li>

                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-gears"></i>
                                    <span>Basic</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{ route('users.index') }}">
                                            <i class="fa fa-circle-o"></i>
                                            Users
                                        </a>
                                    </li>

                                    <li><a href="{{ route('locations.index') }}"><i
                                                class="fa fa-circle-o"></i>Location</a>
                                    </li>
                                    <li><a href="{{ route('departments.index') }}"><i
                                                class="fa fa-circle-o"></i>Department</a></li>
                                    <li><a href="{{ route('hazards.index') }}"><i class="fa fa-circle-o"></i>Hazard
                                            Identification</a></li>
                                    <li><a href="{{ route('job-requirements.index') }}"><i class="fa fa-circle-o"></i>Job
                                            Requirements</a></li>
                                    <li><a href="{{ route('ppe-requirements.index') }}"><i class="fa fa-circle-o"></i>PPE
                                            Requirements</a></li>
                                    <li><a href="{{ route('precautionary-measures.index') }}">
                                            <i class="fa fa-circle-o"></i>Precautionary Measures</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    @endauth

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; {{ now()->year }}
                <a href="https://mps.com/">mps.com</a>.</strong> All rights reserved.
        </footer>

    </div>
    <!-- ./wrapper -->

    {{--  <!-- jQuery 2.2.0 -->  --}}
    <script src="{{ asset('plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/knob/jquery.knob.js') }}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    {{--  <!-- DataTables -->  --}}
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

    <!-- bootstrap datepicker -->
    <script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <!-- bootstrap time picker -->
    <script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>

    <!-- Slimscroll -->
    <script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>



    <script>
        // function showConfirm(id) {
        //     toastr.warning(`
    //     Are you sure you want to delete this item?
    //     <br><br>
    //     <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete(${id})">Yes</button>
    //     <button type="button" class="btn btn-secondary btn-sm" onclick="toastr.clear()">No</button>`,
        //         "Confirmation", {
        //             closeButton: true,
        //             allowHtml: true,
        //             timeOut: 0,
        //             extendedTimeOut: 0,
        //             tapToDismiss: true
        //         });
        // }

        // function confirmDelete(id) {
        //     document.getElementById(`delete-form-${id}`).submit();
        //     toastr.clear();
        // }
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "progressBar": true,

        }
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"


            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif

        $(".select2").select2();
        new DataTable('#example', {
            scrollX: true
        });

        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            format: 'MM/DD/YYYY h:mm A'
        });

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });
        $('#Edatepicker').datepicker({
            autoclose: true
        });

        $('.extra-fields-customer').click(function() {
            $('.customer_records').clone().appendTo('.customer_records_dynamic');
            $('.customer_records_dynamic .customer_records').addClass('single remove');
            $('.single .extra-fields-customer').remove();
            $('.single').append('<a href="#" class="remove-field btn-remove-customer">Remove Fields</a>');
            $('.customer_records_dynamic > .single').attr("class", "remove");

            $('.customer_records_dynamic input').each(function() {
                var count = 0;
                var fieldname = $(this).attr("name");
                $(this).attr('name', fieldname + count);
                count++;
            });

        });

        $(document).on('click', '.remove-field', function(e) {
            $(this).parent('.remove').remove();
            e.preventDefault();
        });


        const inputField = document.getElementById('usernames');
        const usernameTagsContainer = document.getElementById('username-tags');
        const usernamesArrayField = document.getElementById('usernamesArray');
        const usernameList = [];

        const renderUsernames = () => {
            usernameTagsContainer.innerHTML = '';
            usernameList.forEach((username, index) => {
                const tag = document.createElement('div');
                tag.className = 'username-tag';
                tag.textContent = username;

                const removeBtn = document.createElement('span');
                removeBtn.className = 'remove-btn';
                removeBtn.textContent = '×';
                removeBtn.addEventListener('click', () => removeUsername(index));

                tag.appendChild(removeBtn);
                usernameTagsContainer.appendChild(tag);
            });

            // Sync the hidden input field with the array
            usernamesArrayField.value = JSON.stringify(usernameList);
        };

        inputField.addEventListener('keydown', event => {
            if (event.key === 'Enter' && inputField.value.trim() !== '') {
                event.preventDefault();
                const newUsername = inputField.value.trim();
                if (!usernameList.includes(newUsername)) {
                    usernameList.push(newUsername);
                    renderUsernames();
                }
                inputField.value = '';
            }
        });

        const removeUsername = index => {
            usernameList.splice(index, 1);
            renderUsernames();
        };


        document.addEventListener('DOMContentLoaded', function() {
            const userTypeSelect = document.getElementById('job_company');
            const staffIdContainer = document.getElementById('staff_id_container');
            const contractorNameContainer = document.getElementById('contract_name_container');

            userTypeSelect.addEventListener('change', function() {
                if (this.value === 'mps_employee') {
                    staffIdContainer.style.display = 'block';
                    contractorNameContainer.style.display = 'none';
                } else if (this.value === 'contract_company') {
                    contractorNameContainer.style.display = 'block';
                    staffIdContainer.style.display = 'none';
                } else {
                    staffIdContainer.style.display = 'none';
                    contractorNameContainer.style.display = 'none';
                }
            });
        });

        //start file upload
        const fileInput = document.getElementById('fileInput');
        const fileList = document.getElementById('fileList');
        const clearAllButton = document.getElementById('clearAll');

        fileInput.addEventListener('change', () => {
            Array.from(fileInput.files).forEach(file => addFileToList(file));
        });

        function addFileToList(file) {
            const listItem = document.createElement('li');

            const fileInfo = document.createElement('span');
            fileInfo.textContent = `${file.name} (${(file.size / 1024).toFixed(2)} KB)`;

            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.classList.add('file-remove-btn');
            removeButton.addEventListener('click', () => listItem.remove());

            listItem.appendChild(fileInfo);
            listItem.appendChild(removeButton);
            fileList.appendChild(listItem);
        }

        clearAllButton.addEventListener('click', () => {
            fileList.innerHTML = '';
            fileInput.value = '';
        });

        //End file upload
    </script>




</body>

</html>
