@extends('admin.layouts.main')

@section('content')
    <x-breadcrumb title="Dashboard"></x-breadcrumb>

    <div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card mini-stats">
                <div class="p-3 rounded mini-stats-content text-white">
                    <h4 class="float-right mt-0">{{ $users }}</h4>
                    <h5 class="mt-0 mb-3">Users</h5>
                    <p class="text-white mb-0">
                        <a href="{{ route('admin.users.index') }}" class="text-white">
                            View All Users
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->
@endsection
