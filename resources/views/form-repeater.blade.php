@extends('layouts.master')
@section('title')
    Form Repeater
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Form Repeater</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Repeater</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Example</h4>
                    <form class="repeater" enctype="multipart/form-data">
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="row">
                                <div class="mb-3 col-lg-2">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" name="untyped-input" class="form-control" />
                                </div>

                                <div class="mb-3 col-lg-2">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" class="form-control" />
                                </div>

                                <div class="mb-3 col-lg-2">
                                    <label class="form-label" for="subject">Subject</label>
                                    <input type="text" id="subject" class="form-control" />
                                </div>

                                <div class="mb-3 col-lg-2">
                                    <label class="form-label" for="resume">Resume</label>
                                    <input type="file" class="form-control-file" id="resume">
                                </div>

                                <div class="mb-3 col-lg-2">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea id="message" class="form-control"></textarea>
                                </div>

                                <div class="col-lg-2 align-self-center">
                                    <input data-repeater-delete type="button" class="btn btn-primary w-100"
                                        value="Delete" />
                                </div>
                            </div>

                        </div>
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Nested</h4>
                    <form class="outer-repeater">
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer">
                                <div class="mb-3">
                                    <label class="form-label" for="formname">Name :</label>
                                    <input type="text" class="form-control" id="formname"
                                        placeholder="Enter your Name...">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="formemail">Email :</label>
                                    <input type="email" class="form-control" id="formemail"
                                        placeholder="Enter your Email...">
                                </div>

                                <div class="inner-repeater mb-4">
                                    <div data-repeater-list="inner-group" class="inner mb-3">
                                        <label class="form-label">Phone no :</label>
                                        <div data-repeater-item class="inner mb-3 row">
                                            <div class="col-md-10 col-8">
                                                <input type="text" class="inner form-control"
                                                    placeholder="Enter your phone no..." />
                                            </div>
                                            <div class="col-md-2 col-4">
                                                <input data-repeater-delete type="button"
                                                    class="btn btn-primary w-100 inner" value="Delete" />
                                            </div>

                                        </div>
                                    </div>
                                    <input data-repeater-create type="button" class="btn btn-success inner"
                                        value="Add Number" />
                                </div>

                                <div class="mb-3">
                                    <label class="d-block mb-3">Gender :</label>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="flexRadioDefault1" name="flexRadioDefault1"
                                            class="form-check-input">
                                        <label class="form-check-label" for="flexRadioDefault1">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="flexRadioDefault2" name="flexRadioDefault1"
                                            class="form-check-input">
                                        <label class="form-check-label" for="flexRadioDefault2">Female</label>
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label for="formmessage">Message :</label>
                                    <textarea id="formmessage" class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
@push('script')
    <!-- form repeater js -->
    <script src="{{ URL::asset('build/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>

    <!-- form repeater init -->
    <script src="{{ URL::asset('build/js/pages/form-repeater.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
