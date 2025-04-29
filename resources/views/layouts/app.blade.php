<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <x-favicon></x-favicon>

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/libs.bundle.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.bundle.css') }}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- iziToast -->
    <link rel="stylesheet" href="{{ asset('assets/izitoast/css/iziToast.min.css') }}">

    <!-- Title -->
    <title>@yield('title', 'Home') | {{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('styles')
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo.png') }}" class="navbar-brand-img" alt="{{ config('app.name') }}"
                    style="max-height: 3.125rem;">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-x"></i>
                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ms-auto">

                </ul>

                @auth
                    <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                @else
                    <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="{{ route('login') }}">
                        Login
                    </a>
                @endauth


            </div>

        </div>
    </nav>

    @yield('content')

    <!-- FOOTER -->
    <footer class="py-8 bg-gray-200">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 text-center">
                    <p class="mb-0">
                        Copyright © 2023 Honor Providers. All Rights Reserved.
                        <a href="https://www.honorproviders.com/privacy-policy" target="_blank">Legal and Privacy</a>
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>

    <!-- JAVASCRIPT -->

    <!-- Vendor JS -->
    <script src="{{ asset('assets/js/vendor.bundle.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.bundle.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- iziToast -->
    <script src="{{ asset('assets/izitoast/js/iziToast.min.js') }}"></script>

    @yield('scripts')

    @include('layouts.flash')

</body>

</html>
