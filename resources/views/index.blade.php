@extends('layouts.master')
@section('title')
    Dashbaord
@endsection
@push('css')
    <!-- jquery.vectormap css -->
    <link href="{{ URL::asset('build/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">DR Mohamed Said Elsharkawy</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Medical Islands</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-tag-plus-outline"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Employee</div>
                        </div>
                    </div>
                    <h4 class="mt-4">60</h4>
                    <div class="row">
                        <div class="col-7">
                            <p class="mb-0"><span class="text-success me-2"> 60<i class="mdi mdi-arrow-up"></i>
                                </span></p>
                        </div>
                        <div class="col-5 align-self-center">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 62%"
                                    aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-account-multiple-outline"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Clients</div>

                        </div>
                    </div>
                    <h4 class="mt-4">6000</h4>
                    <div class="row">
                        <div class="col-7">
                            <p class="mb-0"><span class="text-success me-2"> 6000 <i class="mdi mdi-arrow-up"></i>
                                </span></p>
                        </div>
                        <div class="col-5 align-self-center">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 62%"
                                    aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-account-multiple-outline"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Projects</div>

                        </div>
                    </div>
                    <h4 class="mt-4">4000</h4>
                    <div class="row">
                        <div class="col-7">
                            <p class="mb-0"><span class="text-success me-2"> 4000 <i class="mdi mdi-arrow-up"></i>
                                </span></p>
                        </div>
                        <div class="col-5 align-self-center">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 62%"
                                    aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-account-multiple-outline"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Tasks</div>

                        </div>
                    </div>
                    <h4 class="mt-4">13000</h4>
                    <div class="row">
                        <div class="col-7">
                            <p class="mb-0"><span class="text-success me-2"> 13000 <i class="mdi mdi-arrow-up"></i>
                                </span></p>
                        </div>
                        <div class="col-5 align-self-center">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 62%"
                                    aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Tasks</h4>

                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">task number	</th>
                                    <th scope="col">task title</th>
                                    <th scope="col">client name	</th>
                                    <th scope="col">task date</th>
                                    <th scope="col">delivery date</th>
                                    <th scope="col">employee</th>
                                    <th scope="col">details</th>
                                    <th scope="col">add fatorah</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>13210</td>
                                    <td style="width: 250px; word-wrap: break-word; white-space: normal; overflow: hidden;">
                                        6023- Mohamed Elsayed Salama: Protocol > Thesis
                                    </td>
                                    <td>6023- Mohamed Elsayed Salama</td>
                                    <td>2024-08-12</td>
                                    <td>2024-08-17</td>
                                    <td>Ashraf Ali Rady</td>
                                    <td>قعد مع د ميرنا</td>
                                    <td><a href="#" class="btn btn-primary btn-sm">Fatorah</a></td>
                                    <td><span class="badge badge-soft-success font-size-12">Paid</span></td>
                                </tr>

                                <tr>
                                    <td>13210</td>
                                    <td style="width: 250px; word-wrap: break-word; white-space: normal; overflow: hidden;">
                                        1983- Salah Bedier: Paper submission to Paper to Evidence Based Women's Health Journal
                                    </td>
                                    <td>6023- Mohamed Elsayed Salama</td>
                                    <td>2024-08-12</td>
                                    <td>2024-08-17</td>
                                    <td>Ashraf Ali Rady</td>
                                    <td>قعد مع د ميرنا</td>
                                    <td><a href="#" class="btn btn-primary btn-sm">Fatorah</a></td>
                                    <td><span class="badge badge-soft-success font-size-12">Paid</span></td>
                                </tr>

                                <tr>
                                    <td>13210</td>
                                    <td style="width: 250px; word-wrap: break-word; white-space: normal; overflow: hidden;">
                                        3041- Athar Elsayed Elkafas : Publication هندي (International Journal of Dermatology, Venereology and Leprosy Sciences)	
                                    </td>
                                    <td>6023- Mohamed Elsayed Salama</td>
                                    <td>2024-08-12</td>
                                    <td>2024-08-17</td>
                                    <td>Ashraf Ali Rady</td>
                                    <td>قعد مع د ميرنا</td>
                                    <td><a href="#" class="btn btn-primary btn-sm">Fatorah</a></td>
                                    <td><span class="badge badge-soft-success font-size-12">Paid</span></td>
                                </tr>

                                <tr>
                                    <td>13210</td>
                                    <td style="width: 250px; word-wrap: break-word; white-space: normal; overflow: hidden;">
                                        6023- Mohamed Elsayed Salama: Protocol > Thesis
                                    </td>
                                    <td>6023- Mohamed Elsayed Salama</td>
                                    <td>2024-08-12</td>
                                    <td>2024-08-17</td>
                                    <td>Ashraf Ali Rady</td>
                                    <td>قعد مع د ميرنا</td>
                                    <td><a href="#" class="btn btn-primary btn-sm">Fatorah</a></td>
                                    <td><span class="badge badge-soft-success font-size-12">Paid</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->


@endsection
@push('script')
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ URL::asset('build/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
