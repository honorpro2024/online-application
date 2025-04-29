<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
        @yield('title', 'Dashboard') | {{ config('app.name') }}
    </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Honor Providers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="{{ csrf_token() }}" name="csrf-token">

    <x-favicon></x-favicon>

    <!-- Basic Css files -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/plugins/izitoast/izitoast.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" type="text/css">

    @yield('styles')

</head>

<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{ route('admin.dashboard') }}" class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" height="40"
                        class="logo-large">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" height="22"
                        class="logo-sm">
                </a>
            </div>

            <nav class="navbar-custom">
                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input" type="search" placeholder="Search" />
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>

                <ul class="navbar-right d-flex list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                            <i class="mdi mdi-magnify noti-icon"></i>
                        </a>
                    </li>

                    <!-- User-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('assets/admin/images/users/user.png') }}" alt="user"
                                class="rounded-circle">
                            <span class="d-none d-md-inline-block ml-1">
                                {{ auth()->user()->name }}
                                <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                            <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                <i class="dripicons-user text-muted"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="dripicons-gear text-muted"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:;"
                                onclick="document.getElementById('logout-form').submit();">
                                <i class="dripicons-exit text-muted"></i>
                                <form action="{{ route('admin.logout') }}" class="d-inline-block" method="post"
                                    id="logout-form">
                                    @csrf
                                    Logout
                                </form>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layouts.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    @yield('content')

                </div> <!-- container-fluid -->

            </div> <!-- content -->

            <footer class="footer">
                © {{ date('Y') }} - {{ config('app.name') }}
            </footer>

        </div>

        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/admin/js/waves.js') }}"></script>

    <!-- Jquery Validate -->
    <script type="text/javascript" src="{{ asset('assets/admin/plugins/jquery-validate/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin/plugins/jquery-validate/additional-methods.min.js') }}"></script>

    <!-- iziToast -->
    <script type="text/javascript" src="{{ asset('assets/admin/plugins/izitoast/izitoast.min.js') }}"></script>

    <!-- Sweet-Alert  -->
    <script src="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

    @include('includes.flash')

    @yield('scripts')

</body>

</html>
