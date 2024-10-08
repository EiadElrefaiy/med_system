@extends('layouts.master')
@section('title')
    Timeline
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Timeline</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Timeline</li>
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

                    <div class="timeline-count p-4">
                        <!-- Timeline row Start -->
                        <div class="row">

                            <!-- Timeline 1 -->
                            <div class="timeline-box col-lg-4">
                                <div class="timeline-spacing">
                                    <div class="item-lable bg-primary rounded">
                                        <p class="text-center text-white">April, 12</p>
                                    </div>
                                    <div class="timeline-line active">
                                        <div class="dot bg-primary"></div>
                                    </div>
                                    <div class="vertical-line">
                                        <div class="wrapper-line bg-light"></div>
                                    </div>
                                    <div class="bg-light p-4 rounded mx-3">
                                        <h5>Timeline Event One</h5>
                                        <p class="text-muted mt-1 mb-0">Sed ut perspiciatis unde omnis
                                            it voluptatem accusantium doloremque laudantium, totam rem
                                            aperiam, eaque ipsa quae ab illo inventore veritatis et
                                            quasi architecto beatae vitae dicta sunt explicabo. enim
                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                            fugit</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline 1 -->

                            <!-- Timeline 2 -->
                            <div class="timeline-box col-lg-4">
                                <div class="timeline-spacing">
                                    <div class="item-lable bg-primary rounded">
                                        <p class="text-center text-white">April, 13</p>
                                    </div>
                                    <div class="timeline-line active">
                                        <div class="dot bg-primary"></div>
                                    </div>
                                    <div class="vertical-line">
                                        <div class="wrapper-line bg-light"></div>
                                    </div>
                                    <div class="bg-light p-4 rounded mx-3">
                                        <h5>Timeline Event Two</h5>
                                        <p class="text-muted mt-1 mb-0">Vivamus ultrices massa tellus,
                                            sed convallis urna interdum eu. Pellentesque habitant morbi
                                            tristique eget justo sit amet est varius mollis et quis
                                            nisi. Suspendisse potenti. senectus et netus et malesuada
                                            fames ac turpis egestas. Donec vitae blandit ipsum. Donec ac
                                            tempus nulla.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- Timeline 2 -->

                            <!-- Timeline 3 -->
                            <div class="timeline-box col-lg-4">
                                <div class="timeline-spacing">
                                    <div class="item-lable bg-primary rounded">
                                        <p class="text-center text-white">April, 26</p>
                                    </div>
                                    <div class="timeline-line active">
                                        <div class="dot bg-primary"></div>
                                    </div>
                                    <div class="vertical-line">
                                        <div class="wrapper-line bg-light"></div>
                                    </div>
                                    <div class="bg-light p-4 rounded mx-3">
                                        <h5>Timeline Event Three</h5>
                                        <p class="text-muted mt-1">At vero eos dignissimos ducimus quos
                                            dolores et</p>

                                        <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt=""
                                            class="img-fluid rounded me-3" width="100">
                                        <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="" class="img-fluid rounded"
                                            width="100">

                                    </div>
                                </div>
                            </div>
                            <!-- Timeline 3 -->
                        </div>
                        <!-- Timeline row Over -->

                        <!-- Timeline row Start -->
                        <div class="row">
                            <!-- Timeline 6 -->
                            <div class="timeline-box col-lg-4">
                                <div class="timeline-spacing">
                                    <div class="item-lable bg-primary rounded">
                                        <p class="text-center text-white">April, 27</p>
                                    </div>
                                    <div class="timeline-line active">
                                        <div class="dot bg-primary"></div>
                                    </div>
                                    <div class="vertical-line">
                                        <div class="wrapper-line bg-light"></div>
                                    </div>
                                    <div class="bg-light  text-start p-4 rounded mx-3">
                                        <h5>Timeline Event End</h5>
                                        <p class="text-muted mb-0">Suspendisse tempor porttitor elit non
                                            maximus. Sed suscipit, purus in convallis condimentum, risus
                                            ex pellentesque sapien, vel tempor arcu dolor ut est. Nam ac
                                            felis id mauris fermentum luctus. Etiam iaculis mollis lacus
                                            a at posuere nisl pharetra auctor.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline 6 -->

                            <!-- Timeline 5 -->
                            <div class="timeline-box col-lg-4">
                                <div class="timeline-spacing">
                                    <div class="item-lable bg-primary rounded">
                                        <p class="text-center text-white">April, 28</p>
                                    </div>
                                    <div class="timeline-line active">
                                        <div class="dot bg-primary"></div>
                                    </div>
                                    <div class="vertical-line">
                                        <div class="wrapper-line bg-light"></div>
                                    </div>
                                    <div class="bg-light  text-start p-4 rounded mx-3">
                                        <h5>Timeline Event Four</h5>
                                        <p class="text-muted mb-0">Excepturi, obcaecati, quisquam id
                                            molestias eaque asperiores voluptatibus cupiditate error
                                            assumenda delectus odit similique earum voluptatem
                                            doloremque dolorem ipsam quae rerum quis. Odit, itaque,
                                            deserunt corporis vero ipsum nisi repellat ... <a href="#">Read
                                                more</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline 5 -->

                            <!-- Timeline 4 -->

                            <div class="timeline-box col-lg-4">
                                <div class="timeline-spacing">
                                    <div class="item-lable bg-primary rounded">
                                        <p class="text-center text-white">April, 30</p>
                                    </div>
                                    <div class="timeline-line active">
                                        <div class="dot bg-primary"></div>
                                    </div>
                                    <div class="vertical-line">
                                        <div class="wrapper-line bg-light"></div>
                                    </div>
                                    <div class="bg-light text-start p-4 rounded mx-3">
                                        <h5>Timeline Event five</h5>
                                        <p class="text-muted mb-0">printing and typesetting industry.
                                            been the industry'scrambled it to make a type specimen book.
                                        </p>
                                        <button type="button"
                                            class="btn btn-info btn-rounded waves-effect waves-light mt-4">See
                                            more detail</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline 4 -->
                        </div>
                        <!-- Timeline row Over -->



                        <!-- Timeline row Over -->
                    </div>

                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->
@endsection
@push('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
