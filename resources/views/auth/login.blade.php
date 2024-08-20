@extends('layouts.master-without-nav')
@section('title')
    Login
@endsection
@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="/index" class="text-reset"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50 mb-0">Sign in to continue to Medical Island.</p>
                                <a href="/index" class="logo logo-admin mt-4">
                                    <img src="{{ URL::asset('build/images/logo.jpg') }}" alt="" height="54">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="user_username">Username <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('user_username') is-invalid @enderror"
                                               name="user_username" id="user_username" required
                                               autocomplete="user_username" autofocus placeholder="Enter username">
                                        @error('user_username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                
                                    <div class="mb-3">
                                        <label class="form-label" for="user_pass">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control @error('user_pass') is-invalid @enderror"
                                               id="user_pass" name="user_pass" required
                                               autocomplete="current-password" placeholder="Enter password">
                                        @error('user_pass')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                
                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Don't have an account ? <a href="#" class="fw-medium text-primary"> Signup
                                now </a> </p>
                        <p>©
                            {{ date('Y') }} Qovex. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                            Themesbrand
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
