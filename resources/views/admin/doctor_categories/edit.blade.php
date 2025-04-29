@extends('admin.layouts.main')

@section('title', 'Edit Doctor Category')

@section('content')

    <x-breadcrumb title="Edit Doctor Category"></x-breadcrumb>

    <div class="row">

        <div class="col-lg-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title mb-3">Edit Doctor Category</h4>

                    <form action="{{ route('admin.doctor-categories.update', $doctorCategory) }}" method="post"
                        id="doctor_category_form" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Name</label>
                            <div>
                                <input type="text" class="form-control" placeholder="Name..." name="name"
                                    value="{{ $doctorCategory->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <div>
                                <input type="text" class="form-control" placeholder="Price..." name="price"
                                    value="{{ $doctorCategory->price }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <div>
                                <input type="file" accept="image/*" name="image" class="filestyle" data-input="false"
                                    data-buttonname="btn-secondary" data-error="#error-image">
                            </div>
                            <div id="error-image"></div>
                        </div>

                        @if ($doctorCategory->image != '' &&
                            file_exists(config('global.doctor_category_image_path') . $doctorCategory->image))
                            <div class="form-group">
                                <img src="{{ asset(config('global.doctor_category_image_path') . $doctorCategory->image) }}"
                                    class="img-thumbnail" height="256" width="256">
                            </div>
                        @endif

                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
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
    <script src="{{ asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('#doctor_category_form').validate({
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
                        required: false,
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
