<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Barbers') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="description" content="name of web site">
    <meta name="author" content="@me">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Homepage | Makeup</title>

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i"
          rel="stylesheet">

    <!-- STYLES -->
    <link type="text/css" rel="stylesheet" href="{{asset('storage/css/fontello.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('storage/css/skeleton.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('storage/css/base.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('storage/css/fotorama.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('storage/css/owl.carousel.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('storage/css/animate.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('storage/css/magnific-popup.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('storage/css/datepicker.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('storage/css/timepicker.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('storage/css/style.css')}}"/>
    <!--[if lt IE 9]> <script type="text/javascript" src="{{asset('storage/js/modernizr.custom.js')}}"></script> <![endif]-->
    <!-- /STYLES -->

</head>

<body>


<!-- WRAPPER ALL -->
<div class="makeup_fl_wrapper_all">

    <!-- CONTENT -->
    <div class="makeup_fl_content">
        <div class="container">


            <!-- VERTICAL MENU -->
            <div class="makeup_fl_ver_menu sticky_sidebar">
                <div class="vertical_menu">
                    <div class="makeup_fl_ver_menu_in">
                        <div class="makeup_fl_logo">
                            <img src="{{asset('storage/img/logo.png')}}" alt=""/>
                        </div>
                        <div class="makeup_fl_nav_list">
                            <ul>
                                <li><a href="/"><span>Homepage</span></a></li>
                                <li><a href="about.html"><span>About Us</span></a></li>
                                <li><a href="services.html"><span>Services</span></a></li>
                                <li><a href="gallery.html"><span>Gallery</span></a></li>
                                <li><a href="/blog"><span>Our Blog</span></a></li>
                                <li><a href="contact.html"><span>Contact Us</span></a></li>

                            </ul>
                        </div>
                        <div class="makeup_fl_booking_btn">
                            <div class="btn_s_a"><a href="modal/address..blade.php" class="ajax-popup-link"><i
                                        class="xcon-home"></i></a></div>
                            <div class="btn_b"><a href="#" class="ajax-popup-link">Book Online</a></div>
                            <div class="btn_s_b"><a href="modal/opening.blade.php" class="ajax-popup-link"><i
                                        class="xcon-clock-1"></i></a></div>
                        </div>
                        <div class="makeup_fl_social_icons">
                            <ul>
                                <li><a href="#"><i class="xcon-facebook"></i></a></li>
                                <li><a href="#"><i class="xcon-twitter"></i></a></li>
                                <li><a href="#"><i class="xcon-instagram"></i></a></li>
                                <li><a href="#"><i class="xcon-pinterest"></i></a></li>
                                <li><a href="#"><i class="xcon-gplus"></i></a></li>
                            </ul>
                        </div>
                        <div class="makeup_fl_cright">
                            <span>Copyright 2022. Built with love.<br/>Powered by @Me</span>
                        </div>
                        <div class="makeup_fl_totop_wrapper">
                            <div class="rotating"></div>
                            <a href="#" class="totop"><i class="xcon-angle-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /VERTICAL MENU -->


            <!-- CONTENT IN -->
            <div class="makeup_fl_content_in sticky_sidebar">
                <div class="makeup_fl_content_in_qq">

                    <!-- HEADER -->
                    <div class="makeup_fl_header">
                        <div class="makeup_fl_logo">
                            <img src="{{asset('storage/img/logo.png')}}" alt=""/>
                        </div>
                        <div class="makeup_fl_header_trigger">
                            <a href="#"></a>
                            <span class="one"></span>
                            <span class="two"></span>
                            <span class="three"></span>
                        </div>
                        <div class="makeup_fl_booking_btn">
                            <div class="btn_s_a"><a href="modal/address..blade.php" class="ajax-popup-link"><i
                                        class="xcon-home"></i></a></div>
                            <div class="btn_b"><a href="modal/booking.blade.php" class="ajax-popup-link">Book Online</a>
                            </div>
                            <div class="btn_s_b"><a href="modal/opening.blade.php" class="ajax-popup-link"><i
                                        class="xcon-clock-1"></i></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="makeup_fl_header_nav_list">
                            <ul>
                                <li class="mversion">
                                    <div class="makeup_fl_booking_btn">
                                        <div class="btn_s_a"><a href="modal/address..blade.php" class="ajax-popup-link"><i
                                                    class="xcon-home"></i></a></div>
                                        <div class="btn_b"><a href="modal/booking.blade.php" class="ajax-popup-link">Book
                                                Online</a></div>
                                        <div class="btn_s_b"><a href="modal/opening.blade.php"
                                                                class="ajax-popup-link"><i class="xcon-clock-1"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="/"><span>Homepage</span><br/><span class="row"></span></a></li>
                                <li><a href="about.html"><span>About Us</span></a></li>
                                <li><a href="services.html"><span>Services</span></a></li>
                                <li><a href="gallery.html"><span>Gallery</span></a></li>
                                <li><a href="/blog"><span>Our Blog</span></a></li>
                                <li><a href="contact.html"><span>Contact Us</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /HEADER -->
                    <div class="makeup_fl_content_wrap">
                        <div class="row" style="text-align: end">

                            @if (Route::has('login'))
                                <div class=" sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="rounded">Dashboard</a>
                                    @else
                                        <span class="container"><a href="{{ route('login') }}"
                                                                   style="text-decoration-line: none">Log in</a></span>

                                        @if (Route::has('register'))
                                            <span class="container"><a href="{{ route('register') }}"
                                                                       style="text-decoration-line: none">Register</a></span>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                        <br>

                        @yield('content')

                    </div>
                    <!-- FOOTER -->
                    <div class="makeup_fl_footer">
                        <div class="social_icons">
                            <ul>
                                <li><a href="#"><i class="xcon-facebook"></i></a></li>
                                <li><a href="#"><i class="xcon-twitter"></i></a></li>
                                <li><a href="#"><i class="xcon-linkedin"></i></a></li>
                                <li><a href="#"><i class="xcon-pinterest"></i></a></li>
                                <li><a href="#"><i class="xcon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="cright">
                            <span>&copy; Copyright by <a href="https://themeforest.net/user/friendslaboratory">FriendsLaboratory</a> 2017</span>
                        </div>
                        <div class="makeup_fl_totop_wrapper">
                            <div class="rotating"></div>
                            <a href="/" class="totop"><i class="xcon-angle-up"></i></a>
                        </div>
                    </div>
                    <!-- /FOOTER -->

                </div>
            </div>
            <!-- /CONTENT IN -->

        </div>
    </div>
    <!-- /CONTENT -->

</div>
<!-- /WRAPPER ALL -->


<!-- SCRIPTS -->
<script type="text/javascript" src="{{asset('storage/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('storage/js/carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('storage/js/plugins.js')}}"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="{{asset('storage/js/ie8.js')}}"></script> <![endif]-->
<script type="text/javascript" src="{{asset('storage/js/init.js')}}"></script>
<!-- /SCRIPTS -->

</body>
</html>
