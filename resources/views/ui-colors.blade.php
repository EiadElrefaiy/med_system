@extends('layouts.master')
@section('title')
    Colors
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Colors</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                        <li class="breadcrumb-item active">Colors</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">

                    <div class="color-box bg-primary p-4">
                        <h5 class="my-2 text-white">#3b5de7</h5>
                    </div>
                    <div class="color-box bg-primary bg-gradient p-4">
                        <h5 class="my-2 text-white">bg-gradient</h5>
                    </div>
                    <div class="color-box bg-soft-primary bg-gradient p-4">
                        <h5 class="my-2 text-primary">bg-soft-primary</h5>
                    </div>

                    <h5 class="mb-0 mt-3 text-primary">Primary</h5>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-success p-4">
                        <h5 class="my-2 text-white">#45cb85</h5>
                    </div>
                    <div class="color-box bg-success bg-gradient p-4">
                        <h5 class="my-2 text-white">bg-gradient</h5>
                    </div>
                    <div class="color-box bg-soft-success bg-gradient p-4">
                        <h5 class="my-2 text-success">bg-soft-success</h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-success">Success</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-info p-4">
                        <h5 class="my-2 text-white">#0caadc</h5>
                    </div>
                    <div class="color-box bg-info bg-gradient p-4">
                        <h5 class="my-2 text-white">bg-gradient</h5>
                    </div>
                    <div class="color-box bg-soft-info bg-gradient p-4">
                        <h5 class="my-2 text-info">bg-soft-info</h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-info">Info</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-warning p-4">
                        <h5 class="my-2 text-white">#eeb902</h5>
                    </div>
                    <div class="color-box bg-warning bg-gradient p-4">
                        <h5 class="my-2 text-white">bg-gradient</h5>
                    </div>
                    <div class="color-box bg-soft-warning bg-gradient p-4">
                        <h5 class="my-2 text-warning">bg-soft-warning</h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-warning">Warning</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-danger p-4">
                        <h5 class="my-2 text-white">#ff715b</h5>
                    </div>
                    <div class="color-box bg-danger bg-gradient p-4">
                        <h5 class="my-2 text-white">bg-gradient</h5>
                    </div>
                    <div class="color-box bg-soft-danger bg-gradient p-4">
                        <h5 class="my-2 text-danger">bg-soft-danger</h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-danger">Danger</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-dark p-4">
                        <h5 class="my-2 text-reset">#343a40</h5>
                    </div>
                    <div class="color-box bg-dark  bg-gradient p-4">
                        <h5 class="my-2 text-white">bg-gradient</h5>
                    </div>
                    <div class="color-box bg-soft-dark  bg-gradient p-4">
                        <h5 class="my-2 text-reset ">bg-soft-dark </h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-reset">Dark</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="color-box bg-secondary p-4">
                        <h5 class="my-2 text-light">#9095ad</h5>
                    </div>
                    <div class="color-box bg-secondary  bg-gradient p-4">
                        <h5 class="my-2 text-white">bg-gradient</h5>
                    </div>
                    <div class="color-box bg-soft-secondary  bg-gradient p-4">
                        <h5 class="my-2 text-secondary ">bg-soft-secondary </h5>
                    </div>
                    <h5 class="mb-0 mt-3 text-muted">Secondary</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
@push('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
