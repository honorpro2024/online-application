@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <nav class="bg-gray-200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb breadcrumb-scroll">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-gray-700">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Login
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>

    <section class="py-6">
        <div class="container">
            <form action="{{ route('login') }}" method="post" id="login_form">
                @csrf
                <div class="mb-0 b-0">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h1 class="fw-bold text-center">
                                Login
                            </h1>
                        </div>

                        <section class="tab-pane personal-information mb-5">
                            <div class="card border border-dark rounded">
                                <div class="card-header bg-gray-200 border-bottom border-dark">
                                    Enter your login details
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12 mb-3 form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" name="email" type="text" class="form-control"
                                                value="{{ old('email') }}" />
                                        </div>
                                        <div class="col-md-12 mb-3 form-group">
                                            <label for="password" class="form-label">Password</label>
                                            <input id="password" name="password" type="password" class="form-control" />
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" name="remember" type="checkbox"
                                                    value="1">
                                                <label class="form-check-label" for="remember">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <p class="text-end mb-0">
                                                <a href="{{ route('forgot-password') }}">Forgot Password?</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" class="btn btn-sm btn-primary">Login</button>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="mb-0">
                                                Don't have an account? 
                                                <a href="{{ route('signup') }}">Sign Up</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>

    <script>
        $(function() {

            $('#login_form').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Email Required",
                    },
                    password: {
                        required: "Password Required"
                    },
                },
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(placement).append(error)
                    } else {
                        error.insertAfter(element);
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });

        });
    </script>
@endsection
