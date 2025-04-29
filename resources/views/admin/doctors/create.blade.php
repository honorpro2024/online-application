@extends('admin.layouts.main')

@section('title', 'Add Doctor')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
@endsection

@section('content')

    <x-breadcrumb title="Add Doctor"></x-breadcrumb>

    <div class="row">

        <div class="col-lg-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title mb-3">Add Doctor</h4>

                    <form action="{{ route('admin.doctors.store') }}" method="post" id="doctor_form"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label>First Name</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="First Name..." name="first_name"
                                        value="{{ old('first_name') }}">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Last Name</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Last Name..." name="last_name"
                                        value="{{ old('last_name') }}">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Category</label>
                                <div>
                                    <select name="category_id" class="form-control select2">
                                        <option value="">Select Category</option>
                                        @if ($doctorCategories->count())
                                            @foreach ($doctorCategories as $doctorCategory)
                                                <option value="{{ $doctorCategory->id }}">{{ $doctorCategory->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Price</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Price..." name="price"
                                        value="{{ old('price') }}">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Image</label>
                                <div>
                                    <input type="file" accept="image/*" name="image" class="filestyle"
                                        data-input="false" data-buttonname="btn-secondary" data-error="#error-image">
                                </div>
                                <div id="error-image"></div>
                            </div>

                            <div class="form-group mb-0 col-md-12">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            // Select2
            $(".select2").select2();

            $('#doctor_form').validate({
                ignore: [],
                rules: {
                    name: {
                        required: true,
                    },
                    price: {
                        required: true,
                        number: true,
                    },
                    image: {
                        required: true,
                        accept: "image/jpg,image/jpeg,image/png",
                    },
                },
                messages: {
                    name: {
                        required: "Name Required",
                    },
                    price: {
                        required: "Price Required",
                    },
                    image: {
                        required: "Image Required",
                        accept: "Only jpg, jpeg, png images allowed"
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
