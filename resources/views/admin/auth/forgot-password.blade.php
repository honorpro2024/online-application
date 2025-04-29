@extends('admin.auth.layout')

@section('title', 'Forgot Password')

@section('content')
    <div class="card">
        <div class="card-body">

            <div class="p-1">
                <div class="text-center">
                    <h4 class="font-18 mt-3">Forgot Password</h4>
                    <p class="text-muted">Enter your email and password reset link will be sent to you.</p>
                </div>
            </div>

            <div class="px-3 py-0">

                <form class="form-horizontal m-t-10" action="{{ route('admin.forgot.password') }}" method="post"
                    id="forgot_password_form">

                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>

                    <div class="form-group row m-t-30">
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                Submit
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
            $('#forgot_password_form').validate({
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
