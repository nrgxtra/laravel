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

    <title>Admin | Makeup</title>

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
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('storage/img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('storage/admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('storage/admin/vendors/base/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('storage/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('storage/admin/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('storage/admin/images/favicon.png')}}"/>
</head>

<body>

<div class="container-scroller">
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">

        @include('admin.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('admin')
            </div>
        </div>
    </div>
</div>

<script src="{{asset('storage/vendors/base/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>
<script src="{{asset('js/template.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('js/dashboard.js')}}"></script>
<script src="{{asset('js/data-table.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.js')}}"></script>
<!-- End custom js for this page-->

<script src="{{asset('js/jquery.cookie.js')}}" type="text/javascript"></script>

</body>
</html>
