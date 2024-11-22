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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
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

        .add-new-link {
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            /* outline: 1px solid #007bff; */
            padding: 5px 10px;
            border-radius: 2px;

        }

        .add-new-link i {
            font-size: 12px !important;
            margin-top: 2px;
        }

        .add-new-link:hover {
            color: #367fa9;
            outline: 1px solid #367fa9;
            /* Darker shade on hover */
        }

        .form-error,
        .form-error:focus {
            border: 1px solid #e74c3c;
        }

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
                <span class="logo-mini">MPS</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg" style="font-size: small;">Meridian Port Services</span>
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
                                <span class="hidden-xs">Admin</span>
                            </a>
                            <ul class="dropdown-menu" style="width: 100px;">
                                <!-- Menu Footer-->
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Sign out</a></li>
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
                        <a href="">
                            <i class="fa fa-dashboard"></i> <span>Home</span>
                        </a>
                    </li>

                    {{--  <li>
                        <a href="{{ route('permits.index') }}">
                            <i class="fa fa-pie-chart"></i> <span>Permits</span>
                        </a>
                    </li>  --}}
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-clipboard"></i>
                            <span>Permits</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('permits.index') }}"><i class="fa fa-circle-o"></i> Work
                                    Permits</a>
                            </li>
                            <li><a href=""><i class="fa fa-circle-o"></i>Approvals</a></li>
                            {{--  <li><a href=""><i class="fa fa-circle-o"></i>Jobs</a></li>  --}}
                        </ul>
                    </li>

                    <li>
                        <a href="">
                            <i class="fa fa-briefcase"></i> <span>Jobs</span>
                        </a>
                    </li>

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
                            {{--  <li><a href=""><i class="fa fa-circle-o"></i>Roles </a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i>Project </a></li>  --}}
                            <li><a href="{{ route('locations.index') }}"><i class="fa fa-circle-o"></i>Location</a>
                            </li>
                            <li><a href="{{ route('departments.index') }}"><i
                                        class="fa fa-circle-o"></i>Department</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i>Hazard Identification</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i>Job Requirements</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i>PPE Requirements</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i>Precautionary Measures</a></li>
                            {{--  <li><a href=""><i class="fa fa-circle-o"></i>Jobs</a></li>  --}}
                        </ul>
                    </li>

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


    <script>
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


        // new DataTable('#example', {
        //     info: true,
        //     ordering: true,
        //     paging: true,
        //     autoWidth: true
        // });
        // new DataTable('#example');
        //  new DataTable('#example', {
        //     columns: [{
        //             data: ''
        //         },

        //         {
        //             data: 'name'
        //         },
        //         {
        //             data: 'position'
        //         },
        //         {
        //             data: 'office'
        //         },
        //         {
        //             data: 'age'
        //         },
        //         {
        //             data: 'start_date'
        //         },
        //         {
        //             data: 'salary'
        //         }
        //     ]
        // });



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
    </script>


    <!-- Modal -->
    {{-- <div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-labelledby="addQuestionLabel">
        <div class="modal-dialog" role="document">
            <form action="{{ route('survey.getQuestion') }}" method="POST" id="QF">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <span class="modal-title" id="addQuestionLabel">New Question</span>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <textarea class="form-control" name="question" rows="3" placeholder="Enter ..."></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm btn-flat"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm btn-flat">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}





</body>

</html>
