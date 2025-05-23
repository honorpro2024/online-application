@extends('layouts.app')

@section('content')
    <!-- WELCOME -->
    <section class="pt-4 pt-md-11">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">

                    <!-- Image -->
                    <img src="assets/img/illustrations/illustration-2.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0"
                        alt="..." data-aos="fade-up" data-aos-delay="100">

                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">

                    <!-- Heading -->
                    <h1 class="display-3 text-center text-md-start">
                        Welcome to <span class="text-primary">Honor</span>. <br>
                        Locum Tenens Provider
                    </h1>

                    <!-- Text -->
                    <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
                        Expert and personalized care isn't exclusive to patients. Let our team of locum tenens specialists
                        assist you in your search.
                    </p>

                    <!-- Buttons -->
                    <div class="text-center text-md-start">
                        <a href="#" class="btn btn-primary shadow lift me-1">
                            Get Started <i class="fe fe-arrow-right d-none d-md-inline ms-3"></i>
                        </a>
                        <a href="#" class="btn btn-primary-soft lift">
                            Contact Us
                        </a>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- FEATURES -->
    <section class="py-8 py-md-11 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4" data-aos="fade-up">

                    <!-- Icon -->
                    <div class="icon text-primary mb-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <path d="M7 3h10a4 4 0 110 8H7a4 4 0 110-8zm0 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA" />
                                <path d="M7 13h10a4 4 0 110 8H7a4 4 0 110-8zm10 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA"
                                    opacity=".3" />
                            </g>
                        </svg>
                    </div>

                    <!-- Heading -->
                    <h3>
                        Built for developers
                    </h3>

                    <!-- Text -->
                    <p class="text-muted mb-6 mb-md-0">
                        Landkit is built to make your life easier. Variables, build tooling, documentation, and reusable
                        components.
                    </p>

                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">

                    <!-- Icon -->
                    <div class="icon text-primary mb-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <path
                                    d="M5.5 4h4A1.5 1.5 0 0111 5.5v1A1.5 1.5 0 019.5 8h-4A1.5 1.5 0 014 6.5v-1A1.5 1.5 0 015.5 4zm9 12h4a1.5 1.5 0 011.5 1.5v1a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-1a1.5 1.5 0 011.5-1.5z"
                                    fill="#335EEA" />
                                <path
                                    d="M5.5 10h4a1.5 1.5 0 011.5 1.5v7A1.5 1.5 0 019.5 20h-4A1.5 1.5 0 014 18.5v-7A1.5 1.5 0 015.5 10zm9-6h4A1.5 1.5 0 0120 5.5v7a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-7A1.5 1.5 0 0114.5 4z"
                                    fill="#335EEA" opacity=".3" />
                            </g>
                        </svg>
                    </div>

                    <!-- Heading -->
                    <h3>
                        Designed to be modern
                    </h3>

                    <!-- Text -->
                    <p class="text-muted mb-6 mb-md-0">
                        Designed with the latest design trends in mind. Landkit feels modern, minimal, and beautiful.
                    </p>

                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">

                    <!-- Icon -->
                    <div class="icon text-primary mb-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <path
                                    d="M17.272 8.685a1 1 0 111.456-1.37l4 4.25a1 1 0 010 1.37l-4 4.25a1 1 0 01-1.456-1.37l3.355-3.565-3.355-3.565zm-10.544 0L3.373 12.25l3.355 3.565a1 1 0 01-1.456 1.37l-4-4.25a1 1 0 010-1.37l4-4.25a1 1 0 011.456 1.37z"
                                    fill="#335EEA" />
                                <rect fill="#335EEA" opacity=".3" transform="rotate(15 12 12)" x="11"
                                    y="4" width="2" height="16" rx="1" />
                            </g>
                        </svg>
                    </div>

                    <!-- Heading -->
                    <h3>
                        Documentation for everything
                    </h3>

                    <!-- Text -->
                    <p class="text-muted mb-0">
                        We've written extensive documentation for components and tools, so you never have to reverse
                        engineer anything.
                    </p>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

@endsection
