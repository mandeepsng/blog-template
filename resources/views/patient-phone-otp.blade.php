<?php $page="patient-phone-otp";?>
@extends('layout.mainlayout')
@section('content')
    <!-- Onboarding Phone Otp -->

    <div class="onboard-wrapper">
        <div class="left-panel">
            <div class="onboarding-logo text-center">
                <a href="{{url('index')}}"><img src="{{ URL::asset('/assets/img/onboard-img/onb-logo.png')}}" class="img-fluid" alt=""></a>
            </div>
            <div class="onboard-img">
                <img src="{{ URL::asset('/assets/img/onboard-img/onb-slide-img.png')}}" class="img-fluid" alt="">
            </div>
            <div class="onboarding-slider">
                <!-- Slider -->
                <div id="onboard-slider" class="owl-carousel owl-theme onboard-slider slider">
                    <!-- Slider Item -->
                    <div class="onboard-item text-center">
                        <div class="onboard-content">
                            <h3>Welcome to Doccure</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>
                    <!-- /Slider Item -->
                    <!-- Slider Item -->
                    <div class="onboard-item text-center">
                        <div class="onboard-content">
                            <h3>Welcome to Doccure</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>
                    <!-- /Slider Item -->
                    <!-- Slider Item -->
                    <div class="onboard-item text-center">
                        <div class="onboard-content">
                            <h3>Welcome to Doccure</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>
                    <!-- /Slider Item -->

                </div>
                <!-- /Slider -->
            </div>
        </div>
        <div class="right-panel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="right-panel-title text-center">
                            <a href="{{url('index')}}"> <img src="{{ URL::asset('/assets/img/onboard-img/onb-logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="on-board-wizard">
                            <ul>
                                <li>
                                    <a href="{{url('patient-email')}}">
                                        <div class="onboarding-progress active">
                                            <span>1</span>
                                        </div>
                                        <div class="onboarding-list">
                                            <h6>Registration</h6>
                                            <p>Enter Details for Register </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('patient-personalize')}}">
                                        <div class="onboarding-progress">
                                            <span>2</span>
                                        </div>
                                        <div class="onboarding-list">
                                            <h6>Profile Picture</h6>
                                            <p>Upload Profile picture</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('patient-details')}}">
                                        <div class="onboarding-progress">
                                            <span>3</span>
                                        </div>
                                        <div class="onboarding-list">
                                            <h6>Personal Details</h6>
                                            <p>Enter your Personal Details</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('patient-family-details')}}">
                                        <div class="onboarding-progress">
                                            <span>4</span>
                                        </div>
                                        <div class="onboarding-list">
                                            <h6>Select Members</h6>
                                            <p>Enter Details for Register </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('patient-dependant-details')}}">
                                        <div class="onboarding-progress">
                                            <span>5</span>
                                        </div>
                                        <div class="onboarding-list">
                                            <h6>Dependant details</h6>
                                            <p>Dependants Profile</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('patient-other-details')}}">
                                        <div class="onboarding-progress">
                                            <span>6</span>
                                        </div>
                                        <div class="onboarding-list">
                                            <h6>Other Detail</h6>
                                            <p>More information</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="onboarding-content-box content-wrap">
                            <div class="onboard-set">
                                <div class="onboarding-title">
                                    <h2>Enter 4-digit code sent to your phone.</h2>
                                    <h6>We’ve sent it to XXXXXXXXX784</h6>
                                </div>
                                <div class="onboarding-content passcode-wrap">
                                    <div class="d-flex digit-group">
                                        <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
                                        <input type="text" id="digit-2" name="digit-2" data-next="digit-3"
                                            data-previous="digit-1" />
                                        <input type="text" id="digit-3" name="digit-3" data-next="digit-4"
                                            data-previous="digit-2" />
                                        <input type="text" id="digit-4" name="digit-4" data-next="digit-5"
                                            data-previous="digit-3" />
                                    </div>
                                </div>
                                <div class="opt-resend">
                                    <a href="#" class="text-danger">Resend OTP</a>
                                </div>
                            </div>
                            <div class="onboarding-btn">
                                <a href="{{url('patient-password')}}">Continue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Onboarding Phone Otp -->
@endsection