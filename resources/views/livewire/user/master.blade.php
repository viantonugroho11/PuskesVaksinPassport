<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sentral Vaksinasi</title>

    <!-- Icons font CSS-->
    <link href="{{asset('asset/user/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/user/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('asset/user/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/user/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('asset/user/css/main.css')}}" rel="stylesheet" media="all">
    @livewireStyles
</head>

<body>
    @livewireScripts
    @yield('content')
    <!-- Jquery JS-->
    <script src="{{asset('asset/user/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('asset/user/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('asset/user/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('asset/user/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('asset/user/js/global.js')}}"></script>
    {{-- <script src="{{ mix('js/app.js') }}"></script>  --}}
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->