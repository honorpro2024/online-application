@extends('layouts.app')

@section('title', 'Forgot Password')

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
                            Forgot Password
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>

    <section class="py-6">
        <div class="container">
            <form action="{{ route('forgot-password') }}" method="post" id="login_form">
                @csrf
                <div class="mb-0 b-0">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h1 class="fw-bold text-center">
                                Forgot Password
                            </h1>
                        </div>

                        <section class="tab-pane personal-information mb-5">
                            <div class="card border border-dark rounded">
                                <div class="card-header bg-gray-200 border-bottom border-dark">
                                    Reset password link will be sent in your email. Please check your spam or junk folder if
                                    you do not receive an email.
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12 mb-3 form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" name="email" type="text" class="form-control"
                                                value="{{ old('email') }}" />
                                        </div>

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="mb-0">
                                                Back to
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

            $('#login_form').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },

                },
                messages: {
                    email: {
                        required: "Email Required",
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
