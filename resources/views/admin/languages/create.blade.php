@extends('admin.layouts.main')

@section('title', 'Add Language')

@section('content')

    <x-breadcrumb title="Add Language"></x-breadcrumb>

    <div class="row">

        <div class="col-lg-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title mb-3">Add Language</h4>

                    <form action="{{ route('admin.languages.store') }}" method="post" id="language_form">

                        @csrf

                        <div class="form-group">
                            <label>Name</label>
                            <div>
                                <input type="text" class="form-control" placeholder="Name..." name="full_name"
                                    value="{{ old('full_name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Code</label>
                            <div>
                                <input type="text" class="form-control" placeholder="Code..." name="lang"
                                    value="{{ old('lang') }}">
                            </div>
                        </div>

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
    <script>
        $(document).ready(function() {

            $('#language_form').validate({
                rules: {
                    full_name: {
                        required: true,
                    },
                    lang: {
                        required: true,
                    },
                },
                messages: {
                    full_name: {
                        required: "Name Required",
                    },
                    lang: {
                        required: "Code Required",
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
