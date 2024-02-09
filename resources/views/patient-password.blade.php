<?php $page="patient-password";?>
@extends('layout.mainlayout')
@section('content')
    <!-- Onboarding Password -->

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
                    <div class="col-lg-4">
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
                    <div class="col-lg-8">
                        <div class="onboarding-content-box content-wrap">
                            <div class="onboard-set">
                                <div class="onboarding-title pass-title">
                                    <h2>Create a passcode on your Doccure account</h2>
                                    <h6>Enter Password for your Account</h6>
                                </div>
                                <div class="onboarding-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group pass-group">
                                                <div class="input-placeholder form-focus passcode-wrap mail-box">
                                                    <label class="focus-label">Enter New Password<span>*</span></label>
                                                    <input type="password" class="form-control floating pass-icon"
                                                        required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-placeholder form-focus passcode-wrap mail-box">
                                                    <label class="focus-label">Enter Confirm
                                                        Password<span>*</span></label>
                                                    <input type="password" class="form-control floating pass-icon-1"
                                                        required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="onboarding-btn">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#patient-verified" >Continue</a>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade fade-custom" id="patient-verified" tabindex="-1"
                        aria-hidden="true">
                           <div class="modal-dialog id-upload modal-dialog-centered">
                               <div class="modal-content id-pop-content">
                                   <div class="modal-header id-pop-header justify-content-center">
                                       <img src="{{ URL::asset('/assets/img/icons/success-tick.svg')}}" alt="">
                                   </div>
                                   <div class="modal-body id-pop-body text-center">
                                       <h2>Your account has been Created</h2>
                                       <p>Please enter other Details to complete your Profile</p>
                                   </div>
                                   <div class="modal-footer id-pop-footer text-center">
                                       <div class="onboarding-btn pop-btn ">
                                           <a href="{{url('patient-personalize')}}">Continue</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Onboarding Password -->
@endsection