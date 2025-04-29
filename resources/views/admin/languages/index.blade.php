@extends('admin.layouts.main')

@section('title', 'Languages')

@section('styles')
    @include('admin.styles.datatable')
@endsection

@section('content')
    <x-breadcrumb title="Languages"></x-breadcrumb>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                        <h4 class="mt-0 mb-3 header-title">Languages</h4>
                        <a href="{{ route('admin.languages.create') }}" class="btn btn-md btn-primary mb-3">Add Language</a>
                    </div>

                    <table id="datatable" class="table table-bordered table-striped dt-responsive nowrap datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($languages->count())
                                @foreach ($languages as $language)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $language->full_name }}</td>
                                        <td>{{ $language->lang }}</td>
                                        <td>
                                            <a href="{{ route('admin.languages.edit', $language) }}"
                                                class="btn btn-sm btn-secondary">Edit</a>

                                            <a href="javascript:;"
                                                data-delete-action="{{ route('admin.languages.destroy', $language) }}"
                                                class="btn btn-sm btn-danger delete-record">Delete</a>
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
