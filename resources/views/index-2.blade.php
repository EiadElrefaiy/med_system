@extends('layouts.master')
@section('title')
    Dashbaord 2
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Dashboard 2</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard 2</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-6">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div>
                                        <p class="text-muted fw-medium mt-1 mb-2">Orders</p>
                                        <h4>1,368</h4>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div>
                                        <div id="radial-chart-1"></div>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-0"><span class="badge badge-soft-success me-2"> 0.8% <i
                                        class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div>
                                        <p class="text-muted fw-medium mt-1 mb-2">Revenue</p>
                                        <h4>$ 32,695</h4>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div>
                                        <div id="radial-chart-2"></div>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-0"><span class="badge badge-soft-success me-2"> 0.6% <i
                                        class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sales Report</h4>
                    <div class="row">
                        <div class="col-sm-7">
                            <div>
                                <p class="mb-2">01 Jan - 31 Jan, 2020</p>
                                <h4>$ 27, 253</h4>

                                <p class="mt-4 mb-0"><span class="badge badge-soft-success me-2"> 0.6%
                                        <i class="mdi mdi-arrow-up"></i> </span> From previous period
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mt-4 mt-sm-0">
                                <div id="sales-report-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Year</a>
                            </li>
                        </ul>
                    </div>
                    <h4 class="card-title mb-4">Email Sent</h4>

                    <div id="mixed-chart" class="apex-charts"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">

        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <p class="mb-2">Online</p>
                            <h4 class="mb-0">3,524</h4>
                        </div>
                        <div class="col-4">
                            <div class="text-end">
                                <div>
                                    2.06 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                </div>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <p class="mb-2">Offline</p>
                            <h4 class="mb-0">5,362</h4>
                        </div>
                        <div class="col-4">
                            <div class="text-end">
                                <div>
                                    3.12 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                </div>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 78%"
                                        aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <p class="mb-2">Marketing</p>
                            <h4 class="mb-0">6,245</h4>
                        </div>
                        <div class="col-4">
                            <div class="text-end">
                                <div>
                                    2.12 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                </div>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Earning</h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <p>1 Jan - 31 Jan, 2020</p>
                                <p class="mb-2">Total Earning</p>
                                <h4>$ 12,362</h4>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mt-3">
                                        <p class="mb-2 text-truncate">This Month</p>
                                        <h5 class="d-inline-block align-middle mb-0">$ 9,245</h5> <span
                                            class="badge badge-soft-success">+ 1.5 %</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-3">
                                        <p class="mb-2 text-truncate">Last Month</p>
                                        <h5>$ 8,234</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary btn-sm">View more</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <div id="bar-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Yearly sales</h4>

                    <div id="radar-chart" class="apex-charts"></div>

                </div>
            </div>
        </div>

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Activity</h4>

                    <ul class="list-unstyled activity-wid">
                        <li class="activity-list">
                            <div class="activity-icon avatar-xs">
                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                    <i class="mdi mdi-calendar-edit"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <h5 class="font-size-14">20 Jan <i
                                            class="mdi mdi-arrow-right text-primary align-middle ms-2"></i>
                                    </h5>
                                </div>
                                <div class="flex-1">
                                    <div>
                                        Responded to need “Volunteer Activities"
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="activity-list">
                            <div class="activity-icon avatar-xs">
                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <h5 class="font-size-14">23 Jan <i
                                            class="mdi mdi-arrow-right text-primary align-middle ms-2"></i>
                                    </h5>
                                </div>
                                <div class="flex-1">
                                    <div>
                                        Added an interest “Volunteer Activities”
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="activity-list">
                            <div class="activity-icon avatar-xs">
                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                    <i class="mdi mdi-square-edit-outline"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <h5 class="font-size-14">24 Jan <i
                                            class="mdi mdi-arrow-right text-primary align-middle ms-2"></i>
                                    </h5>
                                </div>
                                <div class="flex-1 d-flex">
                                    <div>
                                        Everyone realizes why a new common language.. <a href="#">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="activity-list">
                            <div class="activity-icon avatar-xs">
                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <h5 class="font-size-14">26 Jan <i
                                            class="mdi mdi-arrow-right text-primary align-middle ms-2"></i>
                                    </h5>
                                </div>
                                <div class="flex-1">
                                    <div>
                                        Joined the group “Boardsmanship Forum”
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-primary btn-sm">View more <i
                                class="mdi mdi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Popular Products</h4>
                    <div class="d-flex">
                        <h5 class="me-2"><i class="mdi mdi-cellphone-android text-primary me-2"></i>
                            Mobile -</h5>
                        <p class="mb-0">62 Product sold</p>
                    </div>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="mdi mdi-monitor"></i>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Desktop</h5>
                                        <p class="text-truncate">45 Product sold</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="mdi mdi-laptop"></i>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Laptop</h5>
                                        <p class="text-truncate">57 Product sold</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="mdi mdi-tablet-android"></i>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Tablet</h5>
                                        <p class="text-truncate">31 Product sold</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <i class="mdi mdi-cellphone-android"></i>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Mobile</h5>
                                        <p class="text-truncate">62 Product sold</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="input-group input-group-sm">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Jan</option>
                                <option value="1">Dec</option>
                                <option value="2">Nov</option>
                                <option value="3">Oct</option>
                            </select>
                            <label class="input-group-text">Month</label>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Social source</h4>

                    <div class="d-flex align-items-start">
                        <div class="flex-1">
                            <p class="mb-2">Total Social source</p>
                            <h4>$ 8,974</h4>
                            <p class="mb-0"><span class="badge badge-soft-success me-2"> 0.6% <i
                                        class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                        </div>
                    </div>

                    <div class="mt-3 social-source">
                        <div class="d-flex align-items-center social-source-list">
                            <div class="avatar-xs me-4">
                                <span class="avatar-title rounded-circle">
                                    <i class="mdi mdi-facebook"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <p class="mb-1">Facebook</p>
                                <h5 class="mb-0">$ 2,352</h5>
                            </div>
                            <div class="ms-auto">
                                2.06 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                            </div>
                        </div>

                        <div class="media  d-flex align-items-center social-source-list">
                            <div class="avatar-xs me-4">
                                <span class="avatar-title rounded-circle bg-info">
                                    <i class="mdi mdi-twitter"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <p class="mb-1">Twitter</p>
                                <h5 class="mb-0">$ 1,925</h5>
                            </div>
                            <div class="ms-auto">
                                1.28 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                            </div>
                        </div>

                        <div class="d-flex align-items-center social-source-list">
                            <div class="avatar-xs me-4">
                                <span class="avatar-title rounded-circle bg-pink">
                                    <i class="mdi mdi-instagram"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <p class="mb-1">Instagram</p>
                                <h5 class="mb-0">$ 1,846</h5>
                            </div>
                            <div class="ms-auto">
                                1.04 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
@push('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/dashboard-2.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
