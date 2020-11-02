<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{$title}}App</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <meta name="keywords" content="Recueil informations">
    <meta name="description" content="Recueil informations">

    <meta itemprop=" name" content="Recueil informations">
    <meta itemprop="description" content="Recueil informations">
    <meta itemprop="image" content="{{asset('img/startup.jpg')}}">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/rubick.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/droid.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('css/fonts/pe-icon-7-stroke.css')}}" rel="stylesheet">
    <link href="{{asset('css/fonts/Rubik-Fonts.css')}}" rel="stylesheet" />

</head>

<body id="skrollr-body">


    <!-- <div class="loading ">
        <div class="loading-container">
            <p>Just a sec...</p>
            <img class="loader" src="{{asset('img/rubik.svg')}}" />
        </div>
    </div> -->
    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-burger" role="navigation">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li class="social-links">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-scroll="true" data-id="#workflow">
                            Infos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" data-scroll="true">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <div class="wrapper">
        <div class="section section-header">
            <div class="parallax pattern-image filter filter-gradient-purple">
                <img src="{{asset('img/startup.jpg')}}" />
                <div class="container">
                    <div class="content">
                        <p><span>by </span>Onyx Moffo
                            <p>
                                <h1>PlayIt</h1>
                                <div class="separator-container">
                                    <div class="separator line-separator">♫</div>
                                </div>
                            </p>
                        </p>
                    </div>
                </div>
            </div>
            <a href="#" data-scroll="true" data-id="#whoWeAre" class="scroll-arrow hidden-xs hidden-sm">
                <i class="fa fa-angle-down"></i>
            </a>
        </div>


        <div class="section section-we-do-1 radu" id="workflow">
            <div class="text-area">
                @yield("content")
            </div>
        </div>


        <footer class="footer footer-big footer-color-white" id="footerTrigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1 col-sm-3">
                        <div class="info add-animation-stopped animation-1">
                            <h5 class="title">Company</h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}">
                                            Login
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-md-2 col-md-offset-5 col-sm-3">
                        <div class="info add-animation-stopped animation-4">
                            <h5 class="title">Follow us on</h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#" class="btn btn-social btn-facebook btn-simple">
                                            <i class="fa fa-facebook-square"></i> Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                            <i class="fa fa-dribbble"></i> Dribbble
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-social btn-twitter btn-simple">
                                            <i class="fa fa-twitter"></i> Twitter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-social btn-reddit btn-simple">
                                            <i class="fa fa-google-plus-square"></i> Google+
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="copyright">
                    © {{ date('Y') }} OnyxCorp
                </div>
            </div>
        </footer>
    </div>
    <!-- end wrapper -->
    <div class="project-content" id="project_1">
        <div>
            <div class="project-details">
                <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
                <div class="container">
                    <div class="project-title">
                        <h5>Find out how</h5>
                        <h2>Great sound makes everything better</h2>
                        <div class="separator-container">
                            <div class="separator line-separator">♫</div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="project-text text-right">
                                    <p>We love that you're trying new things. Designed for music lovers who don't sacrifice sound for style, our headphones deliver pure audio in an ultra-lightweight and durable package.</p>
                                    <p>A solid metallic housing, matched with the newest gold, silver and space gray edition colors, will be your phone’s perfect match. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="project-image">
                                    <img src="{{asset('img/project-content/startup/controls.png')}}" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="project-text">
                                    <p>The tangle-free cable with built-in-mic will help you effortlessly switch between music and calls so that you can enjoy premium, uninterrupted sound.</p>
                                    <p>Each headphone is milled from a single, solid piece of material. Graphite brushed aluminum model shown.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-content" id="project_2">
        <div>
            <div class="project-details">
                <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
                <div class="container">
                    <div class="project-title">
                        <h5>The app</h5>
                        <h2>Hear the sound of the world</h2>
                        <div class="separator-container">
                            <div class="separator line-separator">♫</div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="project-text text-right">
                                    <p>More quick. More slick. One thumb is all you need.
                                    </p>
                                    <p>Tap to play and pause. Swipe to skip tracks. Slide the waveform to scrub. The app is beautifully simple to use. But your thumb won’t need to work too hard – it’s easier than ever to hear more of the world’s sounds.</p>
                                    <p> The tracks you’ve liked and discovered, and your favorite playlists can all be found in your Collection. Which means you can listen to what you love again and again. And again.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="project-image">
                                    <img src="{{asset('img/project-content/startup/app.png')}}" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="project-text">
                                    <p>More likes. More playlists. All in one place. </p>
                                    <p>More upfront. More personal. Straight from the source.</p>
                                    <p>The Profile screen organizes the tracks, playlists and likes of everyone on SoundCloud. Whether they’re posting original music or liking and reposting tracks. The important stuff can all be found right up front.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-content" id="project_3">
        <div>
            <div class="project-details">
                <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
                <div class="container">
                    <div class="project-title">
                        <h5>Watch out</h5>
                        <h2>Your eyes won't believe your ears.</h2>
                        <div class="separator-container">
                            <div class="separator line-separator">♫</div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="project-text text-right">
                                    <p>How do our speakers kick out huge, clear sound at any volume? </p>
                                    <p>Precision-tuned drivers, dual passive bass radiators, and multi-band compressors working in concert. Plus the unprecedented depth, detail, and realism of LiveAudio. That's how.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="project-image">
                                    <img src="{{asset('img/project-content/startup/speaker.png')}}" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="project-text">
                                    <p>Room-to-room, or coast-to-coast.</p>
                                    <p>Our speaker gives you sound big enough to fill any space, in a size small enough to carry around the house or take on your next trip.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-content" id="project_4">
        <div>
            <div class="project-details">
                <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
                <div class="container">
                    <div class="project-title">
                        <h5>Learn how to</h5>
                        <h2>Go with the moment</h2>
                        <div class="separator-container">
                            <div class="separator line-separator">♫</div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="project-text text-right">
                                    <p>Glam out. Premium sound and flawless style come together for the Play It headphones. Elevate your listening experience with this luxe collection of wireless products.</p>
                                    <p>If you're listening on your headphones, silence the noise from your daily commute or the drama from your loud neighbors with our no-compromise dual-mode Adaptive Noise Canceling (ANC).</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="project-image">
                                    <img src="{{asset('img/project-content/startup/headphones.png')}}" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="project-text">
                                    <p>Our Acoustic Engine in the headphones gives you an intimate, real encounter with your music. </p>
                                    <p>Take calls, skip songs, and change the volume right from the headphone. Or use the headphones's built-in speakerphone.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   core js files    -->
<script src="{{asset('js/jquery-1.11.2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>
<!--   file for adding vertical points where we activate the elements animation   -->
<script type="text/javascript" src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<!--  js library for devices recognition -->
<script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
<!--   file where we handle all the script from the Rubik page   -->
<script type="text/javascript" src="{{asset('js/rubick.js')}}"></script>
@include('flashy::message')

</html>