@extends('admin.layouts.main')

@section('title', 'Profile')

@section('content')

    <x-breadcrumb title="Profile"></x-breadcrumb>

    <div class="row">

        <div class="col-lg-6">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title mb-3">Edit Profile</h4>

                    <form action="{{ route('admin.profile') }}" method="post" id="profile_form">

                        @csrf

                        <div class="form-group">
                            <label>Name</label>
                            <div>
                                <input type="text" class="form-control" placeholder="Name..." name="name"
                                    value="{{ auth()->user()->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <div>
                                <input type="email" class="form-control" placeholder="Email address..." name="email"
                                    value="{{ auth()->user()->email }}">
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Update Profile
                                </button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

        <div class="col-lg-6">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title mb-3">Change Password</h4>

                    <form action="{{ route('admin.password.update') }}" method="post" id="password_form">

                        @csrf

                        <div class="form-group">
                            <label>Current Password</label>
                            <div>
                                <input type="password" class="form-control" placeholder="Current Password..."
                                    name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>New Password</label>
                            <div>
                                <input type="password" class="form-control" placeholder="New Password..."
                                    name="new_password">
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Update Password
                                </button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            $('#profile_form').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    name: {
                        required: "Name Required",
                    },
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

            $('#password_form').validate({
                rules: {
                    password: {
                        required: true,
                    },
                    new_password: {
                        required: true,
                    },
                },
                messages: {
                    password: {
                        required: "Password Required",
                    },
                    new_password: {
                        required: "New Password Required",
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
