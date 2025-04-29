@extends('admin.auth.layout')

@section('title', 'Forgot Password')

@section('content')
    <div class="card">
        <div class="card-body">

            <div class="p-1">
                <div class="text-center">
                    <h4 class="font-18 mt-3">Reset Password</h4>
                </div>
            </div>

            <div class="px-3 py-0">

                <form class="form-horizontal m-t-10" action="{{ route('admin.reset.password') }}" method="post"
                    id="reset_password_form">

                    @csrf

                    <input type="hidden" name="token" value="{{ request('token') }}">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"
                            value="{{ request('email') }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                            placeholder="Confirm password">
                    </div>

                    <div class="form-group row m-t-30">
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                Reset Password
                            </button>
                        </div>
                    </div>

                    <div class="form-group m-t-30 mb-2 row">
                        <div class="col-12 text-center">
                            <a href="{{ route('admin.login') }}" class="text-muted">
                                <i class="mdi mdi-login-variant"></i>
                                Back to Login
                            </a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#reset_password_form').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    },
                    password_confirmation: {
                        required: true,
                        equalTo: '#password'
                    },
                },
                messages: {
                    email: {
                        required: "Email Required",
                    },
                    password: {
                        required: "Password Required",
                    },
                    password_confirmation: {
                        required: "Confirm Password Required",
                        equalTo: "Confirm password does not match!",
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
