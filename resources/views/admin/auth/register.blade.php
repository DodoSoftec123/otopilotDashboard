@extends('admin.layout.auth')

@section('content')
<section class="log-reg register reg-2">
    <div class="overlay">
        <div class="container">
            <div class="top-head-area">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-5 col">
                        <a class="back-home" href="{{ route('admin.home') }}">
                            <img src="{{ asset('assets/auth/img/left-icon.png') }}" alt="image">
                        </a>
                    </div>
                    <div class="col-sm-5 col">
                        <a href="{{ route('admin.home') }}">
                            <img src="{{ asset('assets/auth/img/logo.png') }}" style="height: 60px; width:auto;" alt="image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-5 pt-120">
                    <div class="left-area">
                        <div class="section-header">
                            <h3>Faster, cheaper global money transfers</h3>
                        </div>
                        <div class="single-item d-flex align-items-center">
                            <div class="icon-area">
                                <img src="{{ asset('assets/auth/img/feature-list-icon-1.png') }}" alt="icon">
                            </div>
                            <p>Same-day delivery to dozens of countries</p>
                        </div>
                        <div class="single-item d-flex align-items-center">
                            <div class="icon-area">
                                <img src="{{ asset('assets/auth/img/feature-list-icon-2.png') }}" alt="icon">
                            </div>
                            <p>50,000+ five-star reviews across
                                Trustpilot, the App Store and Google Play</p>
                        </div>
                        <div class="single-item d-flex align-items-center">
                            <div class="icon-area">
                                <img src="{{ asset('assets/auth/img/feature-list-icon-3.png') }}" alt="icon">
                            </div>
                            <p>Secure and authorised by the FCA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 z-1 text-center d-flex justify-content-center pb-120">
                    <div class="form-box">
                        <h4>Register with Otopilot</h4>
                        <p class="alr-acc dont-acc">Already have an account? <a href="{{ route('auth.login') }}">Log in now.</a></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="personal-tab" data-bs-toggle="tab"
                                    data-bs-target="#personal" type="button" role="tab" aria-controls="personal"
                                    aria-selected="true">Personal</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="business-tab" data-bs-toggle="tab" data-bs-target="#business"
                                    type="button" role="tab" aria-controls="business"
                                    aria-selected="false">Business</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="single-input d-flex align-items-center">
                                                <input type="text" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="single-input d-flex align-items-center">
                                                <input type="text" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="single-input d-flex align-items-center">
                                                <select>
                                                    <option value="1">Select Your Country</option>
                                                    <option value="2">United State</option>
                                                    <option value="3">United kingdom</option>
                                                    <option value="4">Canada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="single-input d-flex align-items-center">
                                                <input type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-input d-flex align-items-center">
                                                <input type="password" class="passInput" placeholder="Password">
                                                <img class="showPass" src="{{ asset('assets/auth/img/show-hide.png') }}" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="remember-forgot d-flex justify-content-between">
                                        <div class="form-group d-flex">
                                            <div class="checkbox_wrapper" >
                                                <input class="check-box" id="check1" type="checkbox">
                                                <label></label>
                                            </div>
                                            <label for="check1"><span class="check_span">Remember Me</span></label>
                                        </div>
                                        <div class="forget-pw">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>

                                    <div class="btn-area">
                                        <a href="{{ route('admin.home') }}" class="cmn-btn">Register Now</a>
                                    </div>
                                </form>
                                <div class="bottom-area">
                                    <div class="continue"><p>Or continue with</p></div>
                                    <div class="login-with d-flex align-items-center">
                                        <a href="javascript:void(0)"><img src="{{ asset('assets/auth/img/google.png') }}" alt="image"></a>
                                        <a href="javascript:void(0)"><img src="{{ asset('assets/auth/img/fb.png') }}" alt="image"></a>
                                    </div>
                                </div>
                                <div class="privacy">
                                    <p>By registering you accept our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="single-input d-flex align-items-center">
                                                <select>
                                                    <option value="1">Select Your Country</option>
                                                    <option value="2">United State</option>
                                                    <option value="3">United kingdom</option>
                                                    <option value="4">Canada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-input d-flex align-items-center">
                                                <input type="email" placeholder="Business email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-input country-code d-flex align-items-center">
                                                <select>
                                                    <option value="1">+ 44</option>
                                                    <option value="2">+ 82</option>
                                                    <option value="2">+ 34</option>
                                                </select>
                                                <input type="number" placeholder="0000 000000">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-input d-flex align-items-center">
                                                <input type="password" class="passInput" placeholder="Password">
                                                <img class="showPass" src="{{ asset('assets/auth/img/show-hide.png') }}" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-area">
                                        <a href="{{ route('admin.home') }}" class="cmn-btn">Register Now</a>
                                    </div>
                                </form>
                                <div class="bottom-area">
                                    <div class="continue"><p>Or continue with</p></div>
                                    <div class="login-with d-flex align-items-center">
                                        <a href="javascript:void(0)"><img src="{{ asset('assets/auth/img/google.png') }}" alt="image"></a>
                                        <a href="javascript:void(0)"><img src="{{ asset('assets/auth/img/fb.png') }}" alt="image"></a>
                                    </div>
                                </div>
                                <div class="privacy">
                                    <p>By registering you accept our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
