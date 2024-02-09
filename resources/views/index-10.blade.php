<?php $page="index-10";?>
@extends('layout.mainlayout_index1')
@section('content')	

<!-- Main Wrapper -->
	<div class="main-wrapper">
<!-- Home Banner -->
		<div class="home-one-banner">
			<div class="bg-shapes">
				<img src="{{ URL::asset('/assets/img/shapes/shape-10.png')}}" class="shape-01 aos" alt="img" data-aos="fade-right">
				<img src="{{ URL::asset('/assets/img/shapes/shape-7.png')}}" class="shape-03 aos" alt="img" data-aos="zoom-out">
				<img src="{{ URL::asset('/assets/img/shapes/shape-8.png')}}" class="shape-04 aos" alt="img" data-aos="fade-left">
				<img src="{{ URL::asset('/assets/img/shapes/shape-6.png')}}" class="shape-02 aos" alt="img" data-aos="fade-down">
			</div>
			<div class="container">

				<!-- Header -->
				<header class="header">
					<div class="nav-bg">
						<nav class="navbar navbar-expand-lg header-nav nav-transparent header-nav-one">
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
										<a class="nav-link login-blue-bg" href="{{url('login')}}">Sign In</a>
									</li>
									<li class="nav-item">
										<a class="nav-link signup-white-bg" href="{{url('register')}}">Sign Up</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</header>
				<!-- /Header -->

				<div class="row">
					<div class="col-lg-6 col-md-12 banner-left aos" data-aos="fade-up">
						<a class="smooth-menu" href="{{url('#appointments')}}">
							<div class="scroll-down">
								<div class="scroll-text">
									<p>scroll down</p>
								</div>
								<div class="scroll-center">
									<div class="scroll-mouse">
										<div class="scroll-wheel"></div>
									</div>
									<div>
										<span class="scroll-arrow-one"></span>
									</div>
									<div>
										<span class="scroll-arrow-two"></span>
									</div>
								</div>
							</div>
						</a>
						<div class="banner-info">
							<h2>Search Doctor,</h2>
							<h2><span>Make an Appointment</span></h2>
						</div>
						<div class="banner-details">
							<h4><img src="{{ URL::asset('/assets/img/banner-check.png')}}" class="me-2" alt="" > Instant Operation & Appointment</h4>
							<h4><img src="{{ URL::asset('/assets/img/banner-check.png')}}" class="me-2" alt="" > 100% Expert Doctors</h4>
							<p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
						<img src="{{ URL::asset('/assets/img/banner-img.png')}}" class="img-fluid dr-img" alt="">
					</div>
				</div>
			</div>
		</div>
		<!-- /Home Banner -->

		<!-- Appoinment -->
		<section class="appoinment-section" id="appointments">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="appoinment-wrapper">
							<div class="appoinment-box aos" data-aos="fade-up">
								<form action="search">
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group appoinment-location">
												<i class="feather-search"></i> <input type="text" class="form-control" placeholder="Search Doctors, Clinics, Etc ...">
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="appoinment-right">
												<div class="form-group appoinment-location">
													<i class="feather-map-pin"></i> <input type="text" class="form-control" placeholder="Search location">
												</div>
												<div class="form-group">
													<button type="submit" class="btn appoinment-btn">
														<i class="feather-search"></i>
													</button>
													<button type="submit" class="btn appoinment-search-btn">
														<i class="feather-sliders me-2"></i> Advanced Search
													</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="appointment-bg">
				<div class="custom-contain">
					<div class="row">
						<div class="col-xl-5 col-lg-4 col-md-12 aos" data-aos="fade-up">
							<div class="appointment-left">
								<img src="{{ URL::asset('/assets/img/appoinment-img.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-xl-7 col-lg-8 col-md-12">
							<div class="row justify-content-center">
								<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
									<div class="appointment-grid w-100">
										<div class="appointment-icon icon-primary">
											<i class="fas fa-bed"></i>
										</div>
										<div class="appointment-info">
											<a href="{{url('search')}}" class="appointment-link">Visit a Doctor</a>
											<p>We hire the best specialists to deliver top-notch diagnostic services for you.</p>
											<a href="{{url('search')}}" class="btn appointment-read-btn">Read More <i class="fas fa-arrow-right ms-2"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
									<div class="appointment-grid w-100">
										<div class="appointment-icon icon-green">
											<i class="fas fa-tablets"></i>
										</div>
										<div class="appointment-info">
											<a href="{{url('pharmacy-search')}}" class="appointment-link">Find a Pharmacy</a>
											<p>We provide the a wide range of medical services, so every person could have the opportunity.</p>
											<a href="{{url('pharmacy-search')}}" class="btn appointment-read-btn">Read More <i class="fas fa-arrow-right ms-2"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
									<div class="appointment-grid w-100">
										<div class="appointment-icon icon-red">
											<i class="fas fa-vial"></i>
										</div>
										<div class="appointment-info">
											<a href="#" class="appointment-link">Find a Lab</a>
											<p>We use the first-class medical equipment for timely diagnostics of various diseases.</p>
											<a href="#" class="btn appointment-read-btn">Coming Soon <i class="fas fa-arrow-right ms-2"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 d-flex aos" data-aos="fade-up">
									<div class="appointment-schedule w-100">
										<h2 class="schedule-title">Schedule</h2>
										<ul>
											<li><span>Monday – Friday</span> 8.00 – 13.00</li>
											<li><span>Saturday</span> 8.00 – 15.00</li>
											<li><span>Sunday</span> 8.00 – 18.00</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-8 col-md-8 d-flex aos" data-aos="fade-up">
									<div class="appointment-request w-100">
										<h2 class="schedule-title text-white">REQUEST AN APPOINTMENT</h2>
										<div class="d-flex align-items-center">
											<div class="appointment-img-holder">
												<img src="{{ URL::asset('/assets/img/phone-call.png')}}" alt="">
											</div>
											<div class="appointment-info-holder">
												<p>Call us on</p>
												<h2>+1 (208) 567 0707</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Appoinment -->

		<!-- Service Section -->
		<section class="service-section">
			<div class="container aos" data-aos="fade-up">
				<div class="section-header text-center aos" data-aos="fade-up">
					<h2 class="color-primary">High Quality Service for you</h2>
					<p class="sub-title color-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
						<div class="service-grid">
							<div class="effect-oscar">
								<img src="{{ URL::asset('/assets/img/services/services-01.jpg')}}" class="img-fluid services-img" alt="">
								<div class="services-caption">
									<div class="services-inner">
										<div class="service-grid-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon6.svg')}}" class="img-fluid" alt="">
										</div>
										<p>Orthopedic</p>
										<a href="{{url('doctor-profile')}}" class="service-link">
											<i class="fas fa-arrow-right"></i>
										</a>
									</div>
								</div>			
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
						<div class="service-grid">
							<div class="effect-oscar">
								<img src="{{ URL::asset('/assets/img/services/services-02.jpg')}}" class="img-fluid services-img" alt="">
								<div class="services-caption">
									<div class="services-inner">
										<div class="service-grid-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon3.svg')}}" class="img-fluid" alt="">
										</div>
										<p>Cardiologist</p>
										<a href="{{url('doctor-profile')}}" class="service-link">
											<i class="fas fa-arrow-right"></i>
										</a>
									</div>
								</div>			
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
						<div class="service-grid">
							<div class="effect-oscar">
								<img src="{{ URL::asset('/assets/img/services/services-03.jpg')}}" class="img-fluid services-img" alt="">
								<div class="services-caption">
									<div class="services-inner">
										<div class="service-grid-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon4.svg')}}" class="img-fluid" alt="">
										</div>
										<p>Dentist</p>
										<a href="{{url('doctor-profile')}}" class="service-link">
											<i class="fas fa-arrow-right"></i>
										</a>
									</div>
								</div>			
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
						<div class="service-grid">
							<div class="effect-oscar">
								<img src="{{ URL::asset('/assets/img/services/services-04.jpg')}}" class="img-fluid services-img" alt="">
								<div class="services-caption">
									<div class="services-inner">
										<div class="service-grid-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon2.svg')}}" class="img-fluid" alt="">
										</div>
										<p>Neurology</p>
										<a href="{{url('doctor-profile')}}" class="service-link">
											<i class="fas fa-arrow-right"></i>
										</a>
									</div>
								</div>			
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Service Section -->

		<!-- Doctor Section -->
		<section class="doctor-section">
			<div class="doctor-right-img aos" data-aos="fade-up">
				<img src="{{ URL::asset('/assets/img/doctors/doctor-img.jpg')}}" class="img-fluid" alt="">
			</div>
			<div class="container">
				<div class="section-header text-center aos" data-aos="fade-up">
					<h2 class="color-primary">Book Our Doctor</h2>
					<p class="sub-title color-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="doctor-book-slider slider">
							<div class="doctor-profile-widget">
								<a href="{{url('doctor-profile')}}">
									<img src="{{ URL::asset('/assets/img/doctors/book-doctor-01.jpg')}}" class="img-fluid book-doctor" alt="">
								</a>
								<div class="pro-content">
									<div class="provider-info">
										<div class="pro-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon2.svg')}}" class="img-fluid" alt="">
										</div>
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">Edward Willey 
												<img src="{{ URL::asset('/assets/img/doctor-check.png')}}" alt="">
											</a>
										</h3>
										<p>Neurologist Specialist</p>
										<div>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">4.9 ( 82 )</span>
											</div>
										</div>
										<div class="content-info">
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
											<div class="booking-btn">
												<a href="{{url('booking')}}" class="btn book-btn">
													Book Appointment
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="doctor-profile-widget">
								<a href="{{url('doctor-profile')}}">
									<img src="{{ URL::asset('/assets/img/doctors/book-doctor-02.jpg')}}" class="img-fluid book-doctor" alt="">
								</a>
								<div class="pro-content">
									<div class="provider-info">
										<div class="pro-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon3.svg')}}" class="img-fluid" alt="">
										</div>
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">Deborah Angel 
												<img src="{{ URL::asset('/assets/img/doctor-check.png')}}" alt="">
											</a>
										</h3>
										<p>Cardiology Specialist</p>
										<div>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">4.9 ( 82 )</span>
											</div>
										</div>
										<div class="content-info">
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
											<div class="booking-btn">
												<a href="{{url('booking')}}" class="btn book-btn">
													Book Appointment
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="doctor-profile-widget">
								<a href="{{url('doctor-profile')}}">
									<img src="{{ URL::asset('/assets/img/doctors/book-doctor-03.jpg')}}" class="img-fluid book-doctor" alt="">
								</a>
								<div class="pro-content">
									<div class="provider-info">
										<div class="pro-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon1.svg')}}" class="img-fluid" alt="">
										</div>
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">Merry Anderson 
												<img src="{{ URL::asset('/assets/img/doctor-check.png')}}" alt="">
											</a>
										</h3>
										<p>Gastrologic Specialist</p>
										<div>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">4.9 ( 82 )</span>
											</div>
										</div>
										<div class="content-info">
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
											<div class="booking-btn">
												<a href="{{url('booking')}}" class="btn book-btn">
													Book Appointment
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="doctor-profile-widget">
								<a href="{{url('doctor-profile')}}">
									<img src="{{ URL::asset('/assets/img/doctors/book-doctor-04.jpg')}}" class="img-fluid book-doctor" alt="">
								</a>
								<div class="pro-content">
									<div class="provider-info">
										<div class="pro-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon4.svg')}}" class="img-fluid" alt="">
										</div>
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">David Blackwell
												<img src="{{ URL::asset('/assets/img/doctor-check.png')}}" alt="">
											</a>
										</h3>
										<p>Dental Specialist</p>
										<div>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">4.9 ( 82 )</span>
											</div>
										</div>
										<div class="content-info">
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
											<div class="booking-btn">
												<a href="{{url('booking')}}" class="btn book-btn">
													Book Appointment
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="doctor-profile-widget">
								<a href="{{url('doctor-profile')}}">
									<img src="{{ URL::asset('/assets/img/doctors/book-doctor-01.jpg')}}" class="img-fluid book-doctor" alt="">
								</a>
								<div class="pro-content">
									<div class="provider-info">
										<div class="pro-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon2.svg')}}" class="img-fluid" alt="">
										</div>
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">Edward Willey 
												<img src="{{ URL::asset('/assets/img/doctor-check.png')}}" alt="">
											</a>
										</h3>
										<p>Dermatologist</p>
										<div>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">4.9 ( 82 )</span>
											</div>
										</div>
										<div class="content-info">
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
											<div class="booking-btn">
												<a href="{{url('booking')}}" class="btn book-btn">
													Book Appointment
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-end">
						<div class="slick-view-btn me-2">
							<a href="{{url('doctor-profile')}}" class="btn">View More <i class="fas fa-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Doctor Section -->

		<!-- Features Section -->
		<section class="features-section">
			<div class="container">
				<div class="section-header text-center aos" data-aos="fade-up">
					<h2 class="color-primary">Availabe Features in Our Clinic</h2>
					<p class="sub-title color-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="features-section-slider slider">
							<div class="features-grid hvr-bounce-to-bottom">
								<div class="features-cricle">
									<div class="features-round">
										<img src="{{ URL::asset('/assets/img/services/features-01.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>Operation</h4>
							</div>
							<div class="features-grid hvr-bounce-to-bottom">
								<div class="features-cricle">
									<div class="features-round">
										<img src="{{ URL::asset('/assets/img/services/features-02.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>Medical</h4>
							</div>
							<div class="features-grid hvr-bounce-to-bottom">
								<div class="features-cricle">
									<div class="features-round">
										<img src="{{ URL::asset('/assets/img/services/features-03.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>Patient Ward</h4>
							</div>
							<div class="features-grid hvr-bounce-to-bottom">
								<div class="features-cricle">
									<div class="features-round">
										<img src="{{ URL::asset('/assets/img/services/features-04.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>Laboratory</h4>
							</div>
							<div class="features-grid hvr-bounce-to-bottom">
								<div class="features-cricle">
									<div class="features-round">
										<img src="{{ URL::asset('/assets/img/services/features-01.svg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<h4>Operation</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-end">
						<div class="slick-view-btn me-2">
							<a href="#" class="btn">
								View More <i class="fas fa-arrow-right ms-2"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Features Section -->

		<!-- News Section -->
		<section class="news-letter-bg">
			<div class="container">
				<div class="news-bg">
					<div class="row">
						<div class="col-lg-8 col-md-12 news-left aos" data-aos="fade-up">
							<div>
								<h2>Grab Our Newsletter</h2>
								<P>To receive latest offers and discounts from the shop.</P>
							</div>
							<div>
								<form>
									<div class="form-group">
										<input type="text" class="form-control me-2" placeholder="Enter Your Email Address">
										<button type="submit" class="btn">Subscribe</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 aos" data-aos="fade-up">
							<div class="news-img">
								<img src="{{ URL::asset('/assets/img/blog/news-img.png')}}" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /News Section -->

		<!-- News Section -->
		<section class="news-section">
			<div class="container">
				<div class="section-header text-center aos" data-aos="fade-up">
					<h2 class="color-primary">Let’s See Our Latest News</h2>
					<p class="sub-title color-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="grid-news w-100">
							<div class="news-image">
								<a href="{{url('blog-details')}}">
									<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-11.jpg')}}" alt="News Image">
								</a>
							</div>
							<div class="news-content">
								<ul>
									<li>
										<div class="news-date">
											<a href="#">
												<i class="feather-calendar me-2"></i>
												<span>4 Dec 2021</span>
											</a>
										</div>
									</li>
									<li>
										<div class="news-date">
											<a href="#" class="news-light-btn">
												<i class="feather-tag me-2"></i>
												<span>Heath Care</span>
											</a>
										</div>
									</li>
								</ul>
								<h3 class="news-title">
									<a href="{{url('blog-details')}}">How to handle patient body in MRI</a>
								</h3>
								<p>
									<a href="{{url('blog-details')}}">Read News</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="grid-news w-100">
							<div class="news-image">
								<a href="{{url('blog-details')}}">
									<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-12.jpg')}}" alt="News Image">
								</a>
							</div>
							<div class="news-content">
								<ul>
									<li>
										<div class="news-date">
											<a href="#">
												<i class="feather-calendar me-2"></i>
												<span>10 Dec 2021</span>
											</a>
										</div>
									</li>
									<li>
										<div class="news-date">
											<a href="#" class="news-light-btn">
												<i class="feather-tag me-2"></i>
												<span>Surgery</span>
											</a>
										</div>
									</li>
								</ul>
								<h3 class="news-title">
									<a href="{{url('blog-details')}}">Doccure – Making your clinic painless visit?</a>
								</h3>
								<p>
									<a href="{{url('blog-details')}}">Read News</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="grid-news w-100">
							<div class="news-image">
								<a href="{{url('blog-details')}}">
									<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-13.jpg')}}" alt="News Image">
								</a>
							</div>
							<div class="news-content">
								<ul>
									<li>
										<div class="news-date">
											<a href="#">
												<i class="feather-calendar me-2"></i>
												<span>15 Dec 2021</span>
											</a>
										</div>
									</li>
									<li>
										<div class="news-date">
											<a href="#" class="news-light-btn">
												<i class="feather-tag me-2"></i>
												<span>General</span>
											</a>
										</div>
									</li>
								</ul>
								<h3 class="news-title">
									<a href="{{url('blog-details')}}">Benefits of consulting with an Online Doctor</a>
								</h3>
								<p>
									<a href="{{url('blog-details')}}">Read News</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="blog-details-btn text-center">
					<a href="{{url('blog-details')}}" class="btn view-more">View More <i class="fas fa-arrow-right ms-2"></i></a>
				</div>
			</div>
		</section>
		<!-- /News Section -->

 @endsection
	  