@extends('admin.layouts.main')

@section('title', 'Doctor Categories')

@section('styles')
    @include('admin.styles.datatable')
@endsection

@section('content')
    <x-breadcrumb title="Doctor Categories"></x-breadcrumb>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                        <h4 class="mt-0 mb-3 header-title">Doctor Categories</h4>
                        <a href="{{ route('admin.doctor-categories.create') }}" class="btn btn-md btn-primary mb-3">
                            Add Category
                        </a>
                    </div>

                    <table id="datatable" class="table table-bordered table-striped dt-responsive nowrap datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($doctor_categories->count())
                                @foreach ($doctor_categories as $doctor_category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $doctor_category->name }}</td>
                                        <td>${{ $doctor_category->price }}</td>
                                        <td>
                                            @if ($doctor_category->image != '' &&
                                                file_exists(config('global.doctor_category_image_path') . $doctor_category->image))
                                                <img src="{{ asset(config('global.doctor_category_image_path') . $doctor_category->image) }}"
                                                    class="img-thumbnail" height="100" width="100">
                                            @else
                                                <p>No Image </p>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.doctor-categories.edit', $doctor_category) }}"
                                                class="btn btn-sm btn-secondary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('admin.scripts.datatable')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endsection
