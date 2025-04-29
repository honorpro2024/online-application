<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
        @yield('title') | {{ config('app.name') }}
    </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Honor Providers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <x-favicon></x-favicon>

    <!-- Basic Css files -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/plugins/izitoast/izitoast.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div class="accountbg"></div>

    <div class="wrapper-page">

        <div class="logo-admin text-center">
            <img src="{{ asset('assets/img/logo.png') }}" height="50" alt="logo">
        </div>

        @yield('content')

    </div>
    <!-- end wrapper-page -->

    <!-- jQuery  -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/admin/js/waves.js') }}"></script>

    <!-- Jquery Validate -->
    <script type="text/javascript" src="{{ asset('assets/admin/plugins/jquery-validate/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin/plugins/jquery-validate/additional-methods.min.js') }}">
    </script>

    <!-- iziToast -->
    <script type="text/javascript" src="{{ asset('assets/admin/plugins/izitoast/izitoast.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>

    @include('includes.flash')
    
    @yield('scripts')

</body>

</html>
