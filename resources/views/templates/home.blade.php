
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>UET</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
            <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
            <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
            <link href="{{ asset('/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('/plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

</head>

<body class="skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="../../index2.html" class="navbar-brand"><b>UET</b></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        @yield('menu')
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search" />
                        </div>
                    </form>
                </div><!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <!-- user
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user user-menu">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <img src="../bootstrap/images/uet_logo_1.png" class="user-image" alt="User Image" />

                                <span class="hidden-xs">UET member</span>
                            </a>

                            <ul class="dropdown-menu">

                                <li class="user-header">
                                    <img src="../bootstrap/images/uet_logo_1.png" class="img-circle" alt="User Image" />
                                    <p>
                                        UET member
                                        <small>Member</small>
                                    </p>
                                </li>

                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Theo dõi</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Bạn bè</a>
                                    </div>

                                </li>

                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Thông tin</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Đăng suất</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>-->
            </div>
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Trang chủ
                    <small>uet-jobs</small>
                </h1>

            </section>
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    @yield('content')

                    <div class="col-md-4" >
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border" style="background-color:steelblue" >
                                <div class="box-title" style="color: white">
                                    Đăng nhập
                                </div>
                            </div>
                            <div>

                                <a href="{{ url('login') }}" class="fa fa-user" style="margin-left: 20px;font-size: 20px;margin-bottom: 20px;margin-top: 20px">
                                    Student login
                                </a>


                            </div>
                            <div>
                                <a href="{{ url('login') }}" class="fa fa-male" style="margin-left: 20px;font-size: 20px;margin-bottom: 20px">
                                    Guest login
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" >
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border" style="background-color:steelblue">
                                <div class="box-title" style="color: white">
                                    Liên hệ
                                </div>
                            </div>
                            <div>
                                <a href="#" class="fa fa-envelope" style="margin-left: 20px;font-size: 20px;margin-bottom: 20px;margin-top: 20px">
                                    abc@123
                                </a>
                            </div>
                            <div>
                                <a href="#" class="fa fa-phone" style="margin-left: 20px;font-size: 20px;margin-bottom: 20px">
                                </a>
                                0123456789
                            </div>
                            <div>
                                <a href="#" class="fa fa-clock-o" style="margin-left: 20px;font-size: 20px;margin-bottom: 20px">
                                </a>
                                9am - 5pm, Mon - Fri
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div><!-- /.container -->

    </div><!-- /.content-wrapper -->

</div><!-- ./wrapper -->

        <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{ asset('/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/knob/jquery.knob.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/fastclick/fastclick.min.js') }}"></script>
        <script src="{{ asset('/dist/js/app.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/dist/js/pages/dashboard.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/dist/js/demo.js') }}" type="text/javascript"></script></body>
</html>
