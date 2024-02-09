<?php $page="index-13";?>
@extends('layout.mainlayout_index1')
@section('content')
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Home Banner -->
		<section class="home-four-banner">
			<!--Top Header -->
			<div class="home-four-top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="left-top aos" data-aos="fade-up">
								<ul>
									<li><i class="feather-phone me-1"></i> +1 315 369 5943</li>
									<li><i class="feather-mail me-1"></i> doccure@example.com</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 text-end">
							<div class="right-top aos" data-aos="fade-up">
								<ul>
									<li><a href="#" target="_blank"><i class="fab fa-facebook hi-icon"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-instagram hi-icon"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-twitter hi-icon"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Top Header -->
			<div class="container">

				<!-- Header -->
				<header class="header">
					<div class="nav-bg home-four-nav">
						<nav class="navbar navbar-expand-lg header-nav nav-transparent">
							<div class="navbar-header">
								<a id="mobile_btn" href="javascript:void(0);">	
									<span class="bar-icon blue-bar">
										<span></span>
										<span></span>
										<span></span>
									</span>
								</a>
								<a href="{{url('index')}}" class="navbar-brand logo">
									<img src="{{ URL::asset('/assets/img/logo-one.png')}}" class="img-fluid" alt="Logo">
								</a>
							</div>
							<div class="main-menu-wrapper">
								<div class="menu-header">
									<a href="{{url('index')}}" class="menu-logo">
										<img src="{{ URL::asset('/assets/img/logo-one.png')}}" class="img-fluid" alt="Logo">
									</a>
									<a id="menu_close" class="menu-close" href="javascript:void(0);">	<i class="fas fa-times"></i>
									</a>
								</div>
								<ul class="main-nav black-font grey-font">
								<li class="has-submenu <?php if($page=="index" || $page=="index-1" || $page=="index-2" || $page=="index-3" || $page=="index-5"|| $page=="index-4" || $page=="index-6" || $page=="index-7" || $page=="index-8" || $page=="index-9" || $page=="index-10" || $page=="index-11" || $page=="index-12" || $page=="index-13" || $page=="index-14") { echo 'active'; } ?>">
									<a href="">Home <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
									<li class="<?php if($page=="index") { echo 'active'; } ?>">
									<a href="{{url('index')}}">Home</a>
								    </li>
									<li class="<?php if($page=="index-2") { echo 'active'; } ?>"><a href="{{url('index-2')}}">Home 2</a></li>
									<li class="<?php if($page=="index-3") { echo 'active'; } ?>"><a href="{{url('index-3')}}">Home 3</a></li>
									<li class="<?php if($page=="index-4") { echo 'active'; } ?>"><a href="{{url('index-4')}}">Home 4</a></li>
									<li class="<?php if($page=="index-5") { echo 'active'; } ?>"><a href="{{url('index-5')}}">Home 5</a></li>
									<li class="<?php if($page=="index-6") { echo 'active'; } ?>"><a href="{{url('index-6')}}">Home 6</a></li>
									<li class="<?php if($page=="index-7") { echo 'active'; } ?>"><a href="{{url('index-7')}}">Home 7</a></li>
									<li class="<?php if($page=="index-8") { echo 'active'; } ?>"><a href="{{url('index-8')}}">Home 8</a></li>
									<li class="<?php if($page=="index-9") { echo 'active'; } ?>"><a href="{{url('index-9')}}">Home 9</a></li>
									<li class="<?php if($page=="index-10") { echo 'active'; } ?>"><a href="{{url('index-10')}}">Home 10</a></li>
									<li class="<?php if($page=="index-11") { echo 'active'; } ?>"><a href="{{url('index-11')}}">Home 11</a></li>
									<li class="<?php if($page=="index-12") { echo 'active'; } ?>"><a href="{{url('index-12')}}">Home 12</a></li>
									<li class="<?php if($page=="index-13") { echo 'active'; } ?>"><a href="{{url('index-13')}}">Home 13</a></li>
									<li class="<?php if($page=="index-14") { echo 'active'; } ?>"><a href="{{url('index-14')}}">Home 14</a></li>
									</ul>
								</li>
	                            <li class="has-submenu <?php if($page=="review" || $page=="register" || $page=="doctor-dashboard" || $page=="appointments" || $page=="schedule-timings" || $page=="my-patients" || $page=="patient-profile" || $page=="chat-doctor" || $page=="invoices" || $page=="doctor-profile-settings" || $page=="doctor-add-blog" || $page=="doctor-blog" || $page=="doctor-pending-blog" || $page=="edit-blog") { echo 'active'; } ?>">
									<a href="">Doctors <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li class="<?php if($page=="doctor-dashboard") { echo 'active'; } ?>"><a href="{{url('doctor-dashboard')}}">Doctor Dashboard</a></li>
										<li class="<?php if($page=="appointments") { echo 'active'; } ?>"><a href="{{url('appointments')}}">Appointments</a></li>
										<li class="<?php if($page=="schedule-timings") { echo 'active'; } ?>"><a href="{{url('schedule-timings')}}">Schedule Timing</a></li>
										<li class="<?php if($page=="my-patients") { echo 'active'; } ?>"><a href="{{url('my-patients')}}">Patients List</a></li>
										<li class="<?php if($page=="patient-profile") { echo 'active'; } ?>"><a href="{{url('patient-profile')}}">Patients Profile</a></li>
										<li class="<?php if($page=="chat-doctor") { echo 'active'; } ?>"><a href="{{url('chat-doctor')}}">Chat</a></li>
										<li class="<?php if($page=="invoices") { echo 'active'; } ?>"><a href="{{url('invoices')}}">Invoices</a></li>
										<li class="<?php if($page=="doctor-profile-settings") { echo 'active'; } ?>"><a href="{{url('doctor-profile-settings')}}">Profile Settings</a></li>
										<li class="<?php if($page=="review") { echo 'active'; } ?>"><a href="{{url('reviews')}}">Reviews</a></li>
										<li class="<?php if($page=="register") { echo 'active'; } ?>"><a href="{{url('doctor-register')}}">Doctor Register</a></li>
										<li class="has-submenu <?php if($page=="doctor-add-blog" || $page=="doctor-blog" || $page=="doctor-pending-blog" || $page=="edit-blog") { echo 'active'; } ?>">
											<a href="{{url('doctor-blog')}}">Blog</a>
											<ul class="submenu">
												<li class="<?php if($page=="doctor-blog" || $page=="doctor-pending-blog" || $page=="edit-blog") { echo 'active'; } ?>"><a href="{{url('doctor-blog')}}">Blog</a></li>
												<li><a href="{{url('blog-details')}}">Blog view</a></li>
												<li class="<?php if($page=="doctor-add-blog") { echo 'active'; } ?>"><a href="{{url('doctor-add-blog')}}">Add Blog</a></li>
											</ul>
										</li>
									</ul>
								</li>	
	                            <li class="has-submenu <?php if($page=="map-grid" || $page=="map-list" || $page=="map-list-1" || $page=="search1" || $page=="doctor-profile" || $page=="booking" || $page=="checkout" || $page=="booking-success" || $page=="patient-dashboard" || $page=="favourites" || $page=="chat" || $page=="profile-settings" || $page=="change-password") { echo 'active'; } ?>">
									<a href="">Patients <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li class="has-submenu <?php if($page=="map-grid" || $page=="map-list" || $page=="map-list-1") { echo 'active'; } ?>">
											<a href="#">Doctors</a>
											<ul class="submenu">
												<li class="<?php if($page=="map-grid") { echo 'active'; } ?>"><a href="{{url('map-grid')}}">Map Grid</a></li>
												<li class="<?php if($page=="map-list") { echo 'active'; } ?>"><a href="{{url('map-list')}}">Map List</a></li>
												<li class="<?php if($page=="map-list-1") { echo 'active'; } ?>"><a href="{{url('map-list-1')}}">Map List 1</a></li>
											</ul>
										</li>
										<li class="<?php if($page=="search1") { echo 'active'; } ?>"><a href="{{url('search')}}">Search Doctor</a></li>
										<li class="<?php if($page=="doctor-profile") { echo 'active'; } ?>"><a href="{{url('doctor-profile')}}">Doctor Profile</a></li>
										<li class="<?php if($page=="booking") { echo 'active'; } ?>"><a href="{{url('booking')}}">Booking</a></li>
										<li class="<?php if($page=="checkout") { echo 'active'; } ?>"><a href="{{url('checkout')}}">Checkout</a></li>
										<li class="<?php if($page=="booking-success") { echo 'active'; } ?>"><a href="{{url('booking-success')}}">Booking Success</a></li>
										<li class="<?php if($page=="patient-dashboard") { echo 'active'; } ?>"><a href="{{url('patient-dashboard')}}">Patient Dashboard</a></li>
										<li class="<?php if($page=="favourites") { echo 'active'; } ?>"><a href="{{url('favourites')}}">Favourites</a></li>
										<li class="<?php if($page=="chat") { echo 'active'; } ?>"><a href="{{url('chat')}}">Chat</a></li>
										<li class="<?php if($page=="profile-settings") { echo 'active'; } ?>"><a href="{{url('profile-settings')}}">Profile Settings</a></li>
										<li class="<?php if($page=="change-password") { echo 'active'; } ?>"><a href="{{url('change-password')}}">Change Password</a></li>
									</ul>
								</li>
	                            <li class="has-submenu <?php if($page=="voice-call" || $page=="video-call" || $page=="onboarding-email" || $page=="patient-email" || $page=="search" || $page=="calendar" || $page=="components" || $page=="invoices1" || $page=="invoice-view" || $page=="blank-page" || $page=="login" || $page=="register1" || $page=="forgot-pswd") { echo 'active'; } ?>">
									<a href="">Pages <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li class="<?php if($page=="voice-call") { echo 'active'; } ?>"><a href="{{url('voice-call')}}">Voice Call</a></li>
										<li class="<?php if($page=="video-call") { echo 'active'; } ?>"><a href="{{url('video-call')}}">Video Call</a></li>
										<li class="<?php if($page=="search") { echo 'active'; } ?>"><a href="{{url('search')}}">Search Doctors</a></li>
										<li class="<?php if($page=="calendar") { echo 'active'; } ?>"><a href="{{url('calendar')}}">Calendar</a></li>
										<li class="<?php if($page=="onboarding-email") { echo 'active'; } ?>"><a href="{{url('onboarding-email')}}">Doctor Onboarding</a></li>
										<li class="<?php if($page=="patient-email") { echo 'active'; } ?>"><a href="{{url('patient-email')}}">Patient Onboarding</a></li>
										<li class="<?php if($page=="components") { echo 'active'; } ?>"><a href="{{url('components')}}">Components</a></li>
										<li class="has-submenu <?php if($page=="invoices1" || $page=="invoice-view") { echo 'active'; } ?>">
											<a href="{{url('invoices')}}">Invoices</a>
											<ul class="submenu">
												<li class="<?php if($page=="invoices1") { echo 'active'; } ?>"><a href="{{url('invoices')}}">Invoices</a></li>
												<li class="<?php if($page=="invoice-view") { echo 'active'; } ?>"><a href="{{url('invoice-view')}}">Invoice View</a></li>
											</ul>
										</li>
										<li class="<?php if($page=="blank-page") { echo 'active'; } ?>"><a href="{{url('blank-page')}}">Starter Page</a></li>
										<li class="<?php if($page=="login") { echo 'active'; } ?>"><a href="{{url('login')}}">Login</a></li>
										<li class="<?php if($page=="register1") { echo 'active'; } ?>"><a href="{{url('register')}}">Register</a></li>
										<li class="<?php if($page=="forgot-pswd") { echo 'active'; } ?>"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
									</ul>
								</li>
	                            <li class="has-submenu <?php if($page=="blog-list" || $page=="blog-grid" || $page=="blog-details") { echo 'active'; } ?>">
	                            <a href="">Blog <i class="fas fa-chevron-down"></i></a>
	                            <ul class="submenu">
	                                <li class="<?php if($page=="blog-list") { echo 'active'; } ?>"><a href="{{url('blog-list')}}">Blog List</a></li>
	                                <li class="<?php if($page=="blog-grid") { echo 'active'; } ?>"><a href="{{url('blog-grid')}}">Blog Grid</a></li>
	                                <li class="<?php if($page=="blog-details") { echo 'active'; } ?>"><a href="{{url('blog-details')}}">Blog Details</a></li>
	                            </ul>
	                        </li>						
	                        <li>
								<a href="#" target="_blank">Admin</i></a>
								
							</li>
							<li class="login-link">
								<a href="{{url('login')}}">Login / Signup</a>
							</li>
						</ul>
								<ul class="nav header-navbar-rht right-menu">
									<li class="nav-item">
										<a class="nav-link theme-btn btn-four" href="{{url('login')}}">Sign In</a>
									</li>
									<li class="nav-item">
										<a class="nav-link theme-btn btn-four-light" href="{{url('register')}}">Sign Up</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</header>
				<!-- /Header -->

				<div class="row align-items-center">
					<div class="col-lg-5 col-md-12"></div>
					<div class="col-lg-7 col-md-12">
						<div class="home-four-doctor">
							<div class="home-four-header">
                                <h2>Search Doctor, Make an <span>Appointment</span></h2>
                            </div>
                            <div class="banner-four-form">
                                <form action="#" class="banner-four-search">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="" placeholder="Search Location">
                                                <i class="far fa-compass"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                             	<select class="select form-control">
                                                    <option>Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                                <i class="far fa-smile"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="select form-control">
                                                    <option>Department</option>
                                                    <option>Surgen</option>
                                                    <option>Cardiologist</option>
                                                    <option>Gynacologist</option>
                                                    <option>Pharmacy</option>
                                                </select>
                                                <i class="fas fa-user-check"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                        	<div class="form-group text-end mb-0">
                                            <a href="{{url('search')}}" class="btn theme-btn btn-four w-100">MAKE APPOINTMENT</a>
                                        	</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Home Banner -->

		<!-- Looking Section Four -->
		<section class="looking-section-four">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header-four text-center aos" data-aos="fade-up">
							<h2>What are you <span class="color-primary">looking</span> for?</h2>
						</div>
					</div>
				</div>
				<div class="row looking-row justify-content-center aos" data-aos="fade-up">
					<div class="col-lg-4 col-md-6 looking-col d-flex">
						<div class="looking-grid-four w-100">
							<div class="looking-box-four">
								<div class="looking-inner-box">
									<div class="looking-info-four">
										<a href="{{url('search')}}">
											<i class="fas fa-user-md me-2"></i> Visit a Doctor
										</a>
										<p>We hire the best specialists to deliver top-notch diagnostic services for you diagnostic services for you.</p>
									</div>
									<div class="looking-four-btn">
										<a href="{{url('booking')}}">
											Book Now <i class="fas fa-arrow-right ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex looking-col">
						<div class="looking-grid-four w-100">
							<div class="looking-box-four">
								<div class="looking-inner-box">
									<div class="looking-info-four">
										<a href="{{url('pharmacy-search')}}">
											<i class="fas fa-tablets me-2"></i> Find a Pharmacy
										</a>
										<p>We provide the a wide range of medical services, so every person could have the opportunity.</p>
									</div>
									<div class="looking-four-btn">
										<a href="{{url('booking')}}">
											Find Now <i class="fas fa-arrow-right ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex looking-col">
						<div class="looking-grid-four w-100">
							<div class="looking-box-four">
								<div class="looking-inner-box">
									<div class="looking-info-four">
										<a href="#">
											<i class="fas fa-vial me-2"></i> Find a Lab
										</a>
										<p>We use the first-class medical equipment for timely diagnostics of various diseases.</p>
									</div>
									<div class="looking-four-btn">
										<a href="{{url('booking')}}">
											Book Now <i class="fas fa-arrow-right ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Looking Section Four -->

		<!-- Clinic Section Four -->
		<section class="clinic-section-four">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header-four text-center aos" data-aos="fade-up">
							<h2>Clinic & <span class="color-primary">Specialities</span></h2>
							<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="clinic-grid-four w-100">
							<div class="clinic-img">
								<img src="{{ URL::asset('/assets/img/clinic/clinic-11.jpg')}}" class="img-fluid clinic-image" alt="">
								<div class="clinic-content">
									<h4>Urology</h4>
								</div>
								<div class="clinic-icon-inner">
									<div class="clinic-box-img">
										<img src="{{ URL::asset('/assets/img/icons/icon1.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
							</div>
							<div class="overlay">
								<div class="clinic-cricle">
									<div class="clinic-round">
										<img src="{{ URL::asset('/assets/img/icons/icon1.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>Urology</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="clinic-grid-four w-100">
							<div class="clinic-img">
								<img src="{{ URL::asset('/assets/img/clinic/clinic-12.jpg')}}" class="img-fluid clinic-image" alt="">
								<div class="clinic-content">
									<h4>Orthopedic</h4>
								</div>
								<div class="clinic-icon-inner">
									<div class="clinic-box-img">
										<img src="{{ URL::asset('/assets/img/icons/icon7.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
							</div>
							<div class="overlay">
								<div class="clinic-cricle">
									<div class="clinic-round">
										<img src="{{ URL::asset('/assets/img/icons/icon7.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>Orthopedic</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="clinic-grid-four w-100">
							<div class="clinic-img">
								<img src="{{ URL::asset('/assets/img/clinic/clinic-13.jpg')}}" class="img-fluid clinic-image" alt="">
								<div class="clinic-content">
									<h4>Dentist</h4>
								</div>
								<div class="clinic-icon-inner">
									<div class="clinic-box-img">
										<img src="{{ URL::asset('/assets/img/icons/icon4.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
							</div>
							<div class="overlay">
								<div class="clinic-cricle">
									<div class="clinic-round">
										<img src="{{ URL::asset('/assets/img/icons/icon4.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>Dentist</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="clinic-grid-four w-100">
							<div class="clinic-img">
								<img src="{{ URL::asset('/assets/img/clinic/clinic-14.jpg')}}" class="img-fluid clinic-image" alt="">
								<div class="clinic-content">
									<h4>Cardiologist</h4>
								</div>
								<div class="clinic-icon-inner">
									<div class="clinic-box-img">
										<img src="{{ URL::asset('/assets/img/icons/icon3.svg')}}" class="img-fluid clinic-inner-heart" alt="">
									</div>
								</div>
							</div>
							<div class="overlay">
								<div class="clinic-cricle">
									<div class="clinic-round">
										<img src="{{ URL::asset('/assets/img/icons/icon3.svg')}}" class="img-fluid clinic-heart-img" alt="">
									</div>
								</div>
								<h4>Cardiologist</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="clinic-grid-four w-100">
							<div class="clinic-img">
								<img src="{{ URL::asset('/assets/img/clinic/clinic-15.jpg')}}" class="img-fluid clinic-image" alt="">
								<div class="clinic-content">
									<h4>MRI Scans</h4>
								</div>
								<div class="clinic-icon-inner">
									<div class="clinic-box-img">
										<img src="{{ URL::asset('/assets/img/icons/icon8.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
							</div>
							<div class="overlay">
								<div class="clinic-cricle">
									<div class="clinic-round">
										<img src="{{ URL::asset('/assets/img/icons/icon8.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>MRI Scans</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="clinic-grid-four w-100">
							<div class="clinic-img">
								<img src="{{ URL::asset('/assets/img/clinic/clinic-16.jpg')}}" class="img-fluid clinic-image" alt="">
								<div class="clinic-content">
									<h4>Neurology</h4>
								</div>
								<div class="clinic-icon-inner">
									<div class="clinic-box-img">
										<img src="{{ URL::asset('/assets/img/icons/icon1.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
							</div>
							<div class="overlay">
								<div class="clinic-cricle">
									<div class="clinic-round">
										<img src="{{ URL::asset('/assets/img/icons/icon1.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>Neurology</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="clinic-grid-four w-100">
							<div class="clinic-img">
								<img src="{{ URL::asset('/assets/img/clinic/clinic-17.jpg')}}" class="img-fluid clinic-image" alt="">
								<div class="clinic-content">
									<h4>Laboratory</h4>
								</div>
								<div class="clinic-icon-inner">
									<div class="clinic-box-img">
										<img src="{{ URL::asset('/assets/img/icons/icon10.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
							</div>
							<div class="overlay">
								<div class="clinic-cricle">
									<div class="clinic-round">
										<img src="{{ URL::asset('/assets/img/icons/icon10.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>Laboratory</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="clinic-grid-four w-100">
							<div class="clinic-img">
								<img src="{{ URL::asset('/assets/img/clinic/clinic-18.jpg')}}" class="img-fluid clinic-image" alt="">
								<div class="clinic-content">
									<h4>Primary Checkup</h4>
								</div>
								<div class="clinic-icon-inner">
									<div class="clinic-box-img">
										<img src="{{ URL::asset('/assets/img/icons/icon11.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
							</div>
							<div class="overlay">
								<div class="clinic-cricle">
									<div class="clinic-round">
										<img src="{{ URL::asset('/assets/img/icons/icon11.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>Primary Checkup</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Clinic Section Four -->

		<!-- Doctor Section Four -->
		<section class="doctor-section-four">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header-four text-center aos" data-aos="fade-up">
							<h2 class="title-four">Book Our <span class="color-primary">Best Doctor</span></h2>
							<p class="sub-title color-grey">Access to expert physicians and surgeons, advanced technologies and top-quality surgery facilities right here.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="best-doctors-slider slider">
							<div class="best-doctors-grid">
								<div class="best-doctors-img">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doctor-09.jpg')}}" alt="" class="img-fluid">
									</a>
								</div>
								<div class="best-doctors-info">
									<h3><a href="{{url('doctor-profile')}}">Dr. Deborah Angel</a></h3>
									<p class="doctor-posting">MBBS, MS - General Surgery, MCh</p>
									<h5 class="doctors-amount">$20 - $50</h5>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">4.9 ( 82 )</span>
									</div>
									<div class="booking-btn">
										<a href="{{url('booking')}}" class="btn">
											<span>
												Book Appointment <i class="fas fa-arrow-right ms-2"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class="best-doctors-grid">
								<div class="best-doctors-img">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doctor-10.jpg')}}" alt="" class="img-fluid">
									</a>
								</div>
								<div class="best-doctors-info">
									<h3><a href="{{url('doctor-profile')}}">Dr. Darren Elder</a></h3>
									<p class="doctor-posting">MBBS, MD - General Medicine, DNB</p>
									<h5 class="doctors-amount">$30 - $70</h5>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">4.9 ( 82 )</span>
									</div>
									<div class="booking-btn">
										<a href="{{url('booking')}}" class="btn">
											<span>
												Book Appointment <i class="fas fa-arrow-right ms-2"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class="best-doctors-grid">
								<div class="best-doctors-img">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doctor-11.jpg')}}" alt="" class="img-fluid">
									</a>
								</div>
								<div class="best-doctors-info">
									<h3><a href="{{url('doctor-profile')}}">Dr. Sofia Brient</a></h3>
									<p class="doctor-posting">MBBS, MD - General Medicine, DNB</p>
									<h5 class="doctors-amount">$40 - $80</h5>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">4.9 ( 82 )</span>
									</div>
									<div class="booking-btn">
										<a href="{{url('booking')}}" class="btn">
											<span>
												Book Appointment <i class="fas fa-arrow-right ms-2"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class="best-doctors-grid">
								<div class="best-doctors-img">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doctor-12.jpg')}}" alt="" class="img-fluid">
									</a>
								</div>
								<div class="best-doctors-info">
									<h3><a href="{{url('doctor-profile')}}">Dr. Ruby Perrin</a></h3>
									<p class="doctor-posting">MBBS, MS - General Surgery, MCh</p>
									<h5 class="doctors-amount">$50 - $90</h5>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">4.9 ( 82 )</span>
									</div>
									<div class="booking-btn">
										<a href="{{url('booking')}}" class="btn">
											<span>
												Book Appointment <i class="fas fa-arrow-right ms-2"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class="best-doctors-grid">
								<div class="best-doctors-img">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doctor-11.jpg')}}" alt="" class="img-fluid">
									</a>
								</div>
								<div class="best-doctors-info">
									<h3><a href="{{url('doctor-profile')}}">Dr. Sofia Brient</a></h3>
									<p class="doctor-posting">MBBS, MD - General Medicine, DNB</p>
									<h5 class="doctors-amount">$40 - $80</h5>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">4.9 ( 82 )</span>
									</div>
									<div class="booking-btn">
										<a href="{{url('booking')}}" class="btn">
											<span>
												Book Appointment <i class="fas fa-arrow-right ms-2"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class="best-doctors-grid">
								<div class="best-doctors-img">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doctor-12.jpg')}}" alt="" class="img-fluid">
									</a>
								</div>
								<div class="best-doctors-info">
									<h3><a href="{{url('doctor-profile')}}">Dr. Ruby Perrin</a></h3>
									<p class="doctor-posting">MBBS, MS - General Surgery, MCh</p>
									<h5 class="doctors-amount">$50 - $90</h5>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">4.9 ( 82 )</span>
									</div>
									<div class="booking-btn">
										<a href="{{url('booking')}}" class="btn">
											<span>
												Book Appointment <i class="fas fa-arrow-right ms-2"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Doctor Section Four -->

		<!-- Features Clinic Four -->
		<section class="features-clinic-four">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header-four text-center aos" data-aos="fade-up">
							<h2 class="title-four">Available Features <span class="color-primary">in Our Clinic</span></h2>
							<p class="sub-title color-grey">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="clinic-big-img aos" data-aos="fade-up">
							<img src="{{ URL::asset('/assets/img/clinic/clinic-big-img.png')}}" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="owl-carousel features-clinic-slider-four owl-theme aos" data-aos="fade-up">
							<div class="item ">
								<div class="features-clinic-grid">
									<div class="features-clinic-img">
										<img src="{{ URL::asset('/assets/img/clinic/features-clinic-01.jpg')}}" alt="" class="img-fluid">
									</div>
									<div class="feature-clinic-overlay">
										<p>Medical</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="features-clinic-grid">
									<div class="features-clinic-img">
										<img src="{{ URL::asset('/assets/img/clinic/features-clinic-02.jpg')}}" alt="" class="img-fluid">
									</div>
									<div class="feature-clinic-overlay">
										<p>Patient Ward</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="features-clinic-grid">
									<div class="features-clinic-img">
										<img src="{{ URL::asset('/assets/img/clinic/features-clinic-03.jpg')}}" alt="" class="img-fluid">
									</div>
									<div class="feature-clinic-overlay">
										<p>Operation</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="features-clinic-grid">
									<div class="features-clinic-img">
										<img src="{{ URL::asset('/assets/img/clinic/features-clinic-04.jpg')}}" alt="" class="img-fluid">
									</div>
									<div class="feature-clinic-overlay">
										<p>Laboratory</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 d-flex justify-content-between align-items-center">
								<div class="owl-nav slide-nav-8 nav-control"></div>
								<div class="float-end">
									<div class="text-end">
										<a href="#" class="btn btn-one">View More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Features Clinic Four -->

		<!-- Blog Section Four -->
		<section class="blog-section-four">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header-four text-center aos" data-aos="fade-up">
							<h2 class="title-four">Our Latest <span class="color-primary">Blogs</span></h2>
							<p class="sub-title color-grey">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="grid-blog-four w-100">
							<div class="grid-blog-image">
								<a href="{{url('blog-details')}}">
									<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-01.jpg')}}" alt="News Image">
								</a>
								<div class="blog-title-four">
									<a href="{{url('blog-details')}}" class="btn">Health</a>
								</div>
								<div class="blog-date-four">
									<a href="#">
										<i class="feather-calendar me-2"></i>
										<span>4 Jan 2022</span>
									</a>
								</div>
							</div>
							<div class="blog-info-four">
								<a href="{{url('blog-details')}}">How to handle patient body in MRI</a>
							</div>
							<div class="blog-doctors-four">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<a href="{{url('doctor-profile')}}">
											<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="" class="me-2"><span>Dr. Ruby Perrin</span>
										</a>
									</div>
									<div>
										<p>Urology</p>
									</div>
								</div>
							</div>
							<div class="blog-four-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<div class="blog-four-arrow">
								<a href="{{url('blog-details')}}">
									<i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="grid-blog-four w-100">
							<div class="grid-blog-image">
								<a href="{{url('blog-details')}}">
									<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-02.jpg')}}" alt="News Image">
								</a>
								<div class="blog-title-four">
									<a href="{{url('blog-details')}}" class="btn">General</a>
								</div>
								<div class="blog-date-four">
									<a href="#">
										<i class="feather-calendar me-2"></i>
										<span>13 Feb 2022</span>
									</a>
								</div>
							</div>
							<div class="blog-info-four">
								<a href="{{url('blog-details')}}">Doccure – Making your clinic painless visit?</a>
							</div>
							<div class="blog-doctors-four">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<a href="{{url('doctor-profile')}}">
											<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="" class="me-2"><span>Dr. Darren Elder</span>
										</a>
									</div>
									<div>
										<p>Surgery</p>
									</div>
								</div>
							</div>
							<div class="blog-four-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<div class="blog-four-arrow">
								<a href="{{url('blog-details')}}">
									<i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="grid-blog-four w-100">
							<div class="grid-blog-image">
								<a href="{{url('blog-details')}}">
									<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-04.jpg')}}" alt="News Image">
								</a>
								<div class="blog-title-four">
									<a href="{{url('blog-details')}}" class="btn">Neurology</a>
								</div>
								<div class="blog-date-four">
									<a href="#">
										<i class="feather-calendar me-2"></i>
										<span>26 Mar 2022</span>
									</a>
								</div>
							</div>
							<div class="blog-info-four">
								<a href="{{url('blog-details')}}">Benefits of consulting with an Online Doctor</a>
							</div>
							<div class="blog-doctors-four">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<a href="{{url('doctor-profile')}}">
											<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg')}}" alt="" class="me-2">	<span>Dr. Angel</span>
										</a>
									</div>
									<div>
										<p>Cardiology</p>
									</div>
								</div>
							</div>
							<div class="blog-four-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<div class="blog-four-arrow">
								<a href="{{url('blog-details')}}">
									<i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="{{url('blog-details')}}" class="btn btn-one">View More</a>
				</div>
			</div>
		</section>
		<!-- /Blog Section Four -->


	   @endsection
	  