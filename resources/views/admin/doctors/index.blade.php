@extends('admin.layouts.main')

@section('title','Doctors')

@section('styles')
    @include('admin.styles.datatable')
@endsection

@section('content')
    <x-breadcrumb title="Doctors"></x-breadcrumb>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                        <h4 class="mt-0 mb-3 header-title">Doctor</h4>
                        <a href="{{ route('admin.doctors.create') }}" class="btn btn-md btn-primary mb-3">
                            Add Doctor
                        </a>
                    </div>

                    <table id="datatable" class="table table-bordered table-striped dt-responsive nowrap datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($doctors->count())
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $doctor->fullName() }}</td>
                                        <td>{{ $doctor->title }}</td>
                                        <td>{{ $doctor->category->name }}</td>
                                        <td><p class="badge {{ ($doctor->live_status=='offline') ? 'badge-danger' : 'badge-success' }}">{{ ucwords($doctor->live_status) }}</p></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">View</a>
                                            <a href="{{ route('admin.doctors.edit',$doctor) }}" class="btn btn-sm btn-secondary">Edit</a>
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
