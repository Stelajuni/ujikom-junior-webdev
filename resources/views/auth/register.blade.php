@extends('layouts.auth')

@section('content')
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div id="container-inside">
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 align-self-center bg-primary rounded">
                    <div class="row m-0">
                        <div class="col-md-5 bg-white sign-in-page-data">
                            <div class="sign-in-from">
                                <h1 class="mb-0 text-center">Sign Up</h1>
                                <p class="text-center text-dark">Enter your email address and password to access admin
                                    panel.</p>
                                <form class="mt-4" action="{{ route('register') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Your Full Name</label>
                                        <input name="name" type="text" class="form-control mb-0"
                                            id="exampleInputEmail1" placeholder="Your Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Email address</label>
                                        <input name= "email" type="email" class="form-control mb-0"
                                            id="exampleInputEmail2" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input name="password" type="password" class="form-control mb-0"
                                            id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Password Confirmation</label>
                                        <input name="password_confirmation" type="password" class="form-control mb-0"
                                            id="password_confirmation" placeholder="Password">
                                    </div>
                                    <div class="d-inline-block w-100">
                                        <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I accept <a
                                                    href="#">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="sign-info text-center">
                                        <button type="submit" class="btn btn-primary d-block w-100 mb-2">Sign Up</button>
                                        <span class="text-dark d-inline-block line-height-2">Already Have Account ? <a
                                                href="{{ route('login') }}">Log In</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-7 text-center sign-in-page-image">
                            <div class="sign-in-detail text-white">
                                <a class="sign-in-logo mb-5" href="#"><img src="images/logonusantara.svg"
                                        class="img-fluid" alt="logo"></a>
                                <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                                    data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1"
                                    data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                    <div class="item">
                                        <img src="images/sign-up.svg" class="img-fluid mb-4" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
@endsection
