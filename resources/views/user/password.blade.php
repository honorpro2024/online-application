@extends('layouts.app')

@section('title', 'Security')

@section('content')
    <header class="bg-dark pt-9 pb-11 d-none d-md-block">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="fw-bold text-white mb-2">
                        Dashboard
                    </h1>

                    <p class="fs-lg text-white-75 mb-0">
                        {{ auth()->user()->name }}
                    </p>
                </div>
                <div class="col-auto">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-sm btn-gray-300-20" type="submit">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main class="pb-8 pb-md-11 mt-md-n6">
        <div class="container-md">
            <div class="row">
                <div class="col-12 col-md-3">
                    <x-sidebar-card></x-sidebar-card>
                </div>
                <div class="col-12 col-md-9">
                    <div class="card card-bleed shadow-light-lg mb-6">
                        <div class="card-header">
                            <h4 class="mb-0">
                                Password
                            </h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('password.update') }}" id="password_form">
                                @csrf
                                <div class="row">

                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="name">Current Password</label>
                                            <input class="form-control" name="current_password" id="current_password"
                                                type="password" placeholder="Current Password">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="name">New Password</label>
                                            <input class="form-control" name="new_password" id="new_password"
                                                type="password" placeholder="New Password">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="name">Confirm Password</label>
                                            <input class="form-control" name="confirm_password" id="confirm_password"
                                                type="password" placeholder="Confirm Password">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-auto mt-3">
                                        <button class="btn btn-sm w-100 btn-primary" type="submit">
                                            Update Password
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection



@section('scripts')
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>

    <script>
        $(function() {

            $('#password_form').validate({
                rules: {

                    current_password: {
                        required: true
                    },
                    new_password: {
                        required: true,
                    },
                    confirm_password: {
                        required: true,
                        equalTo: '#new_password'
                    }

                },
                messages: {

                    current_password: {
                        required: "Current Password Required"
                    },
                    new_password: {
                        required: "New Password Required",
                    },
                    confirm_password: {
                        required: "Confirm Password Required",
                        equalTo: "Confirm Password Does Not Match",
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
