@extends('layouts.master')
@section('title')
    Form Elements
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Form Elements</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Elements</li>
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

                    <h4 class="card-title">Textual inputs</h4>
                    <p class="card-title-desc">Here are examples of <code>.form-control</code> applied
                        to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>

                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
                        <div class="col-md-10">
                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" value="bootstrap@example.com"
                                id="example-email-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
                        <div class="col-md-10">
                            <input class="form-control" type="url" value="https://getbootstrap.com"
                                id="example-url-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                        <div class="col-md-10">
                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="42" id="example-number-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date
                            and time</label>
                        <div class="col-md-10">
                            <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00"
                                id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-month-input" class="col-md-2 col-form-label">Month</label>
                        <div class="col-md-10">
                            <input class="form-control" type="month" value="2019-08" id="example-month-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-week-input" class="col-md-2 col-form-label">Week</label>
                        <div class="col-md-10">
                            <input class="form-control" type="week" value="2019-W33" id="example-week-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-time-input" class="col-md-2 col-form-label">Time</label>
                        <div class="col-md-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-color-input" class="col-md-2 col-form-label">Color</label>
                        <div class="col-md-10">
                            <input class="form-control form-control-color mw-100" type="color" value="#3b5de7"
                                id="example-color-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Select</label>
                        <div class="col-md-10">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select</option>
                                <option>Large select</option>
                                <option>Small select</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="exampleDataList" class="col-md-2  col-form-label">Datalist
                            example</label>
                        <div class="col-md-10">
                            <input class="form-control" list="datalistOptions" id="exampleDataList"
                                placeholder="Type to search...">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sizing</h4>
                    <p class="card-title-desc">Set heights using classes like
                        <code>.form-control-lg</code> and <code>.form-control-sm</code>.
                    </p>
                    <div>
                        <div class="mb-3">
                            <label class="form-label">Default input</label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Form Control sm</label>
                            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                        </div>
                        <div>
                            <label class="form-label">Form Control lg</label>
                            <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Range Inputs</h4>
                    <p class="card-title-desc">Set horizontally scrollable range inputs using
                        <code>.form-control-range</code>.
                    </p>

                    <div>
                        <label for="customRange1" class="form-label">Example range</label>
                        <input type="range" class="form-range" id="customRange1">
                    </div>

                    <div class="mt-4">
                        <label for="customRange2" class="form-label">Min and max</label>
                        <input type="range" class="form-range" min="0" max="5" id="customRange2">
                    </div>

                    <div class="mt-4">
                        <label for="customRange3" class="form-label">Example range</label>
                        <input type="range" class="form-range" min="0" max="5" step="0.5"
                            id="customRange3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Checkboxes</h4>

                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <h5 class="font-size-14 mb-4">Form Checkboxes</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default Checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Checked Checkbox
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4 mt-lg-0">
                                <h5 class="font-size-14 mb-4">Form Check Right</h5>
                                <div>
                                    <div class="form-check form-check-right mb-2">
                                        <input class="form-check-input" type="checkbox" id="formCheckRight1">
                                        <label class="form-check-label" for="formCheckRight1">
                                            Form Checkbox Right
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-check form-check-right">
                                        <input class="form-check-input" type="checkbox" id="formCheckRight2" checked>
                                        <label class="form-check-label" for="formCheckRight2">
                                            Form Checkbox Right checked
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Radios</h4>

                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <h5 class="font-size-14 mb-4">Default Radios</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Default Radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Checked Radio
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-lg-0">
                                <h5 class="font-size-14 mb-4">Form radio right</h5>
                                <div class="form-check-right mb-2">
                                    <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                    <label class="form-check-label" for="customRadio1">Form Radio
                                        Right</label>
                                </div>
                                <div>
                                    <div class="form-check-right">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                            class="form-check-input" checked>
                                        <label class="form-check-label" for="customRadio2">Form Radio
                                            Checked Right</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Switches</h4>
                    <p class="card-title-desc">A switch has the markup of a custom checkbox but uses the
                        <code>.custom-switch</code> class to render a toggle switch. Switches also
                        support the <code>disabled</code> attribute.
                    </p>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label ms-1" for="flexSwitchCheckChecked">Checked switch
                            checkbox input</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                        <label class="form-check-label ms-1" for="flexSwitchCheckDisabled">Disabled
                            switch
                            checkbox input</label>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">File browser</h4>
                    <p class="card-title-desc">The file input is the most gnarly of the bunch and
                        requires additional JavaScript if you’d like to hook them up with functional
                        <em>Choose file…</em> and selected file name text.
                    </p>
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
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
