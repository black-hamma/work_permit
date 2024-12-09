<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WPMS | Change Password</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">


</head>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <div class="content-wrapper">
            <div class="container">

                <section class="content">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border text-blue">
                                    <strong>CHANGE PASSWORD</strong>
                                    <a href="{{ url()->previous() }}" class="btn btn-sm btn-danger pull-right">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        <b>BACK</b>
                                    </a>
                                </div>
                                <!-- /.box-header -->
                                <form action="{{ route('password.update') }}" method="POST">
                                    @csrf
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="password">New Password</label>
                                                        <input type="password"
                                                            class="form-control{{ $errors->first('password') ? ' form-error' : '' }}"
                                                            name="password" placeholder="New Password" required>
                                                    </div>
                                                    @error('password')
                                                        <div class="text-red">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="password_confirmation">Confirm Password</label>
                                                        <input type="password"
                                                            class="form-control{{ $errors->first('password_confirmation') ? ' form-error' : '' }}"
                                                            name="password_confirmation" placeholder="Confirm Password"
                                                            required>
                                                    </div>
                                                    @error('password_confirmation')
                                                        <div class="text-red">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-sm btn-success pull-right"
                                                            style="margin-right: 15px">
                                                            <i class="fa fa-save" aria-hidden="true"
                                                                style="font-size: 12px !important; padding-right: 5px"></i>
                                                            <b>Change Password</b>
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
                </section>
            </div>
        </div>
        <footer class="main-footer">
            <div class="container">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; {{ now()->year }}
                    <a href="https://mps.com/">mps.com</a>.</strong> All rights reserved.
            </div>
            <!-- /.container -->
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.0 -->
    <script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>
