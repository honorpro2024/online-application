@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <!-- HEADER -->
    <header class="bg-dark pt-9 pb-11 d-none d-md-block">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Heading -->
                    <h1 class="fw-bold text-white mb-2">
                        Dashboard
                    </h1>

                    <!-- Text -->
                    <p class="fs-lg text-white-75 mb-0">
                        {{ auth()->user()->name }}
                    </p>

                </div>
                <div class="col-auto">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <!-- Button -->
                        <button class="btn btn-sm btn-gray-300-20" type="submit">
                            Log Out
                        </button>
                    </form>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </header>

    <!-- MAIN -->
    <main class="pb-8 pb-md-11 mt-md-n6">
        <div class="container-md">
            <div class="row">
                <div class="col-12 col-md-3">

                    <x-sidebar-card></x-sidebar-card>

                </div>
                <div class="col-12 col-md-9">

                    <!-- Card -->
                    <div class="card card-bleed shadow-light-lg mb-6">
                        <div class="card-header">

                            <!-- Heading -->
                            <h4 class="mb-0">
                                Basic Information
                            </h4>

                        </div>
                        <div class="card-body">

                            <!-- Form -->
                            <form method="post" action="{{ route('profile.update') }}" id="profile_form">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 col-md-6">

                                        <!-- Name -->
                                        <div class="form-group">
                                            <label class="form-label" for="name">Name</label>
                                            <input class="form-control" name="name" id="name" type="text" placeholder="Name"
                                                value="{{ auth()->user()->name }}">
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email</label>
                                            <input class="form-control" name="email" id="email" type="email" placeholder="Name"
                                                value="{{ auth()->user()->email }}">
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-auto mt-3">

                                        <!-- Button -->
                                        <button class="btn btn-sm w-100 btn-primary" type="submit">
                                            Save changes
                                        </button>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </main>

@endsection


@section('scripts')
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>

    <script>
        $(function() {

            $('#profile_form').validate({
                rules: {

                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    
                },
                messages: {

                    name: {
                        required: "Name Required"
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

        });
    </script>
@endsection