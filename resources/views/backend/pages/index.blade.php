@extends('backend.layouts.master')

@section('title')
    Dashboard
@endsection

@section('page-right-side')
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i>
        Export
    </a>
@endsection

@section('admin-content')
    <!-- Content Row -->
    <div class="row">

        @if (Auth::user()->hasPermissionTo('category.view'))
            <!-- Categories Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Categories
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countCategories }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-th fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('scripts')
    <script>
        console.log('admin panel loaded.');
    </script>
    {{-- <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> --}}
@endsection
