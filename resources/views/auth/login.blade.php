<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Login to Admin | App</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('admin/css/paper-dashboard.css') }}" rel="stylesheet" />

    <link href="{{ asset('admin/css/demo.css') }}" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('admin/css/themify-icons.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="collapse navbar-collapse text-right">
                <li>
                    <a href="{{ route('index') }}" style="color: white;">
                        HOME
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-color="" data-image="{{ asset('admin/img/background/background-2.jpg') }}">
            <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form method="POST" action="{{ route('login') }}">
                                <div class="card" data-background="color" data-color="blue">
                                    <div class="card-header">
                                        <h3 class="card-title">Login</h3>
                                        @csrf
                                    </div>
                                    <div class="card-content">
                                        <div class="form-group row">
                                            <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-12">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span style="color: red;">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-md-12 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-12">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span style="color: red;">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-fill btn-wd ">Let's go</button>
                                        <div class="forgot">
                                            <a href="#pablo">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright">
                        &copy; {{ date('Y') }} OnyxCorp
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
<script src="{{ asset('admin/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Forms Validations Plugin -->
<script src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>

<!-- Promise Library for SweetAlert2 working on IE -->
<script src="{{ asset('admin/js/es6-promise-auto.min.js') }}"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('admin/js/moment.min.js') }}"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="{{ asset('admin/js/bootstrap-datetimepicker.js') }}"></script>

<!--  Select Picker Plugin -->
<script src="{{ asset('admin/js/bootstrap-selectpicker.js') }}"></script>

<!--  Switch and Tags Input Plugins -->
<script src="{{ asset('admin/js/bootstrap-switch-tags.js') }}"></script>

<!-- Circle Percentage-chart -->
<script src="{{ asset('admin/js/jquery.easypiechart.min.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('admin/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('admin/js/bootstrap-notify.js') }}"></script>

<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('admin/js/sweetalert2.js') }}"></script>

<!-- Vector Map plugin -->
<script src="{{ asset('admin/js/jquery-jvectormap.js') }}"></script>

<!-- Wizard Plugin    -->
<script src="{{ asset('admin/js/jquery.bootstrap.wizard.min.js') }}"></script>

<!--  Bootstrap Table Plugin    -->
<script src="{{ asset('admin/js/bootstrap-table.js') }}"></script>

<!--  Plugin for DataTables.net  -->
<script src="{{ asset('admin/js/jquery.datatables.js') }}"></script>

<!--  Full Calendar Plugin    -->
<script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>

<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
<script src="{{ asset('admin/js/paper-dashboard.js') }}"></script>

<!--   Sharrre Library    -->
<script src="{{ asset('admin/js/jquery.sharrre.js') }}"></script>


<script src="{{ asset('admin/js/demo.js') }}"></script>
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>