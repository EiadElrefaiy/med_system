@extends('layouts.master')
@section('title')
    Invoice
@endsection
@section('content')

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Invoice</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Invoice</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-title">
                                    <h4 class="float-end font-size-16">Order # 12345</h4>
                                    <div class="mb-4">
                                        <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="logo" height="20" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <address>
                                            <strong>Billed To:</strong><br>
                                            John Smith<br>
                                            1234 Main<br>
                                            Apt. 4B<br>
                                            Springfield, ST 54321
                                        </address>
                                    </div>
                                    <div class="col-6 text-end">
                                        <address>
                                            <strong>Shipped To:</strong><br>
                                            Kenny Rigdon<br>
                                            1234 Main<br>
                                            Apt. 4B<br>
                                            Springfield, ST 54321
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mt-3">
                                        <address>
                                            <strong>Payment Method:</strong><br>
                                            Visa ending **** 4242<br>
                                            jsmith@email.com
                                        </address>
                                    </div>
                                    <div class="col-6 mt-3 text-end">
                                        <address>
                                            <strong>Order Date:</strong><br>
                                            October 16, 2019<br><br>
                                        </address>
                                    </div>
                                </div>
                                <div class="py-2 mt-3">
                                    <h3 class="font-size-15 fw-bold">Order summary</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-nowrap">
                                        <thead>
                                            <tr>
                                                <th style="width: 70px;">No.</th>
                                                <th>Item</th>
                                                <th class="text-end">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Qovex - Admin & Dashboard Template</td>
                                                <td class="text-end">$499.00</td>
                                            </tr>

                                            <tr>
                                                <td>02</td>
                                                <td>Qovex - Responsive Landing Template</td>
                                                <td class="text-end">$399.00</td>
                                            </tr>

                                            <tr>
                                                <td>03</td>
                                                <td>Veltrix - Admin & Dashboard Template</td>
                                                <td class="text-end">$499.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-end">Sub Total</td>
                                                <td class="text-end">$1397.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="border-0 text-end">
                                                    <strong>Shipping</strong>
                                                </td>
                                                <td class="border-0 text-end">$13.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="border-0 text-end">
                                                    <strong>Total</strong>
                                                </td>
                                                <td class="border-0 text-end">
                                                    <h4 class="m-0">$1410.00</h4>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-print-none">
                                    <div class="float-end">
                                        <a href="javascript:window.print()"
                                            class="btn btn-success waves-effect waves-light"><i
                                                class="fa fa-print"></i></a>
                                        <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                @endsection
                @push('script')
                    <script src="{{ URL::asset('build/js/app.js') }}"></script>
                @endpush
                