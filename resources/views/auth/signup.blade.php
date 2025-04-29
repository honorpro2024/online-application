@extends('layouts.app')

@section('title', 'Sign Up')

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
                            Sign Up
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>

    <section class="py-6">
        <div class="container">
            <form action="{{ route('signup') }}" method="post" id="signup_form">
                @csrf
                <div class="mb-0 b-0">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h1 class="fw-bold text-center">
                                Sign Up
                            </h1>
                        </div>

                        <section class="tab-pane personal-information mb-5">
                            <div class="card border border-dark rounded">
                                <div class="card-header bg-gray-200 border-bottom border-dark">
                                    Personal Information
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 form-group">
                                            <label for="name" class="form-label">Name</label>
                                            <input id="name" name="name" type="text" class="form-control"
                                                value="{{ old('name') }}" />
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" name="email" type="text" class="form-control"
                                                value="{{ old('email') }}" />
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <label for="password" class="form-label">Password</label>
                                            <input id="password" name="password" type="password" class="form-control" />
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                                            <input id="password_confirmation" name="password_confirmation" type="password"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="mb-0">
                                                Already have an account?
                                                <a href="{{ route('login') }}">Login</a>
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

            $.validator.addMethod("strong_password", function(value, element) {
                let password = value;
                if (!(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%&])(.{12,}$)/.test(password))) {
                    return false;
                }
                return true;
            }, function(value, element) {
                let password = $(element).val();
                if (!(/^(.{12,}$)/.test(password))) {
                    return 'Password must be at least 12  characters long.';
                } else if (!(/^(?=.*[A-Z])/.test(password))) {
                    return 'Password must contain at least one uppercase.';
                } else if (!(/^(?=.*[a-z])/.test(password))) {
                    return 'Password must contain at least one lowercase.';
                } else if (!(/^(?=.*[0-9])/.test(password))) {
                    return 'Password must contain at least one digit.';
                } else if (!(/^(?=.*[@#$%&])/.test(password))) {
                    return "Password must contain special characters from @#$%&.";
                }
                return false;
            });

            $('#signup_form').validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        strong_password: true,
                    },
                    password_confirmation: {
                        required: true,
                        equalTo: '#password'
                    },
                },
                messages: {
                    name: {
                        required: "Name Required"
                    },
                    email: {
                        required: "Email Required",
                    },
                    password: {
                        required: "Password Required"
                    },
                    password_confirmation: {
                        required: "Confirm Password Required",
                        equalTo: "Confirm Password Does Not Match"
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
