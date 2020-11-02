<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{{ $title }}Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('admin/css/paper-dashboard.css') }}" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('admin//css/demo.css') }}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/family.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('admin/css/themify-icons.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="brown" data-active-color="danger">
            <!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
            <div class="logo">
                <a href="https://www.creative-tim.com/" class="simple-text logo-mini">
                    App
                </a>

                <a href="https://www.creative-tim.com/" class="simple-text logo-normal">
                    Accueil
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="info">
                        <div class="photo">
                            <img src="{{ asset('admin/img/faces/face-2.jpg') }}" />
                        </div>

                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                {{ Auth::user()->name }}
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini">L</span>
                                        <span class="sidebar-normal">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="active">
                        <div class="collapse in" id="dashboardOverview">
                            <ul class="nav">
                                <li>
                                    <a href="{{ route('stats.index') }}">
                                        <span class="sidebar-mini">S</span>
                                        <span class="sidebar-normal">Stats</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                    </div>
                </div>
            </nav>

            <div class="content">
                @yield("content")
            </div>
        </div>
    </div>
</body>

<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
<script src="{{ asset('admin/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin/js/es6-promise-auto.min.js') }}"></script>
<script src="{{ asset('admin/js/moment.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap-datetimepicker.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap-selectpicker.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap-switch-tags.js') }}"></script>
<script src="{{ asset('admin/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('admin/js/chartist.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap-notify.js') }}"></script>
<script src="{{ asset('admin/js/sweetalert2.js') }}"></script>
<script src="{{ asset('admin/js/jquery-jvectormap.js') }}"></script>
<script src="{{ asset('admin/js/jquery.bootstrap.wizard.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap-table.js') }}"></script>
<script src="{{ asset('admin/js/jquery.datatables.js') }}"></script>
<script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('admin/js/paper-dashboard.js') }}"></script>
<script src="{{ asset('admin/js/jquery.sharrre.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }
        });

    });
</script>

</html>