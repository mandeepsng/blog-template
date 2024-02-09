<?php $page="index-2";?>
@extends('layout.mainlayout')
@section('content')	
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<!-- Home Banner -->
		<section class="section section-search-1">
			<div class="container">
				<!-- Header -->
				<header class="header">
					<nav class="navbar navbar-expand-lg header-nav nav-transparent">
						<div class="navbar-header">
							<a id="mobile_btn" href="javascript:void(0);">	<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
								</span>
							</a>
							<a href="{{url('index')}}" class="navbar-brand logo">
								<img src="{{ URL::asset('/assets/img/logo.png')}}" class="img-fluid" alt="Logo">
							</a>
						</div>
						<div class="main-menu-wrapper">
							<div class="menu-header">
								<a href="{{url('index')}}" class="menu-logo">
									<img src="{{ URL::asset('/assets/img/logo.png')}}" class="img-fluid" alt="Logo">
								</a>
								<a id="menu_close" class="menu-close" href="javascript:void(0);">	<i class="fas fa-times"></i>
								</a>
							</div>
							<ul class="main-nav white-font">
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
								<li class="has-submenu <?php if($page=="cart" || $page=="payment-success" || $page=="pharmacy-details" || $page=="pharmacy-index" || $page=="pharmacy-search" || $page=="product-all" || $page=="product-checkout" || $page=="product-description" || $page=="pharmacy-register") { echo 'active'; } ?>">
									<a href="">Pharmacy <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li class="<?php if($page=="pharmacy-index") { echo 'active'; } ?>"><a href="{{url('pharmacy-index')}}">Pharmacy</a></li>
										<li class="<?php if($page=="pharmacy-details") { echo 'active'; } ?>"><a href="{{url('pharmacy-details')}}">Pharmacy Details</a></li>
										<li class="<?php if($page=="pharmacy-search") { echo 'active'; } ?>"><a href="{{url('pharmacy-search')}}">Pharmacy Search</a></li>
										<li class="<?php if($page=="product-all") { echo 'active'; } ?>"><a href="{{url('product-all')}}">Product</a></li>
										<li class="<?php if($page=="product-description") { echo 'active'; } ?>"><a href="{{url('product-description')}}">Product Description</a></li>
										<li class="<?php if($page=="cart") { echo 'active'; } ?>"><a href="{{url('cart')}}">Cart</a></li>
										<li  class="<?php if($page=="product-checkout") { echo 'active'; } ?>"><a href="{{url('product-checkout')}}">Product Checkout</a></li>
										<li class="<?php if($page=="payment-success") { echo 'active'; } ?>"><a href="{{url('payment-success')}}">Payment Success</a></li>
										<li class="<?php if($page=="pharmacy-register") { echo 'active'; } ?>"><a href="{{url('pharmacy-register')}}">Pharmacy Register</a></li>
										
									</ul>
								</li>
	                            <li class="has-submenu <?php if($page=="voice-call" || $page=="video-call" || $page=="onboarding-email" || $page=="patient-email" || $page=="search" || $page=="calendar" || $page=="components" || $page=="invoices1" || $page=="invoice-view" || $page=="blank-page" || $page=="about-us" || $page=="contact-us" || $page=="login" || $page=="register1" || $page=="forgot-pswd") { echo 'active'; } ?>">
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
										<li class="<?php if($page=="about-us") { echo 'active'; } ?>"><a href="{{url('about-us')}}">About-Us</a></li>
										<li class="<?php if($page=="contact-us") { echo 'active'; } ?>"><a href="{{url('contact-us')}}">Contact-Us</a></li>
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
								<li class="has-submenu">
									<a href="#" target="_blank">Admin <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li><a href="{{url('admin/login')}}" target="_blank">Admin</a></li>
										<li><a href="{{url('pharmacy-admin/login')}}" target="_blank">Pharmacy Admin</a></li>
									</ul>
								</li>
								<li class="login-link"><a href="{{url('login')}}">Login / Signup</a>
								</li>
							</ul>
						</div>
						<ul class="nav header-navbar-rht">
							<li class="nav-item contact-item">
								<div class="header-contact-img"><i class="far fa-hospital"></i>	
								</div>
								<div class="header-contact-detail text-white">
									<p class="contact-header">Contact</p>
									<p class="contact-info-header white-font">+1 315 369 5943</p>
								</div>
							</li>
							<li class="nav-item"><a class="nav-link header-login border-0" href="{{url('login')}}">login / Signup </a>
							</li>
						</ul>
					</nav>
				</header>
				<!-- /Header -->

				<div class="row">
					<div class="col-md-6 aos" data-aos="fade-up">
						<img src="{{ URL::asset('/assets/img/dr-slider.png')}}" class="img-fluid dr-img" alt="" >
					</div>
					<div class="col-md-6 search-doctor aos" data-aos="fade-up">
						<div class="search-area">
							<h2 class="text-center">Search Doctor, Make an Appointment</h2>
							<form class="search-input">
								<div class="row">
									<div class="col-12 col-md-12">
										<div class="form-group">
											<label>Location</label>
											<input type="text" class="form-control" value="">
										</div>
									</div>
									<div class="col-12 col-md-12">
										<div class="form-group">
											<label>Gender</label>
											<select class="form-select form-control">
												<option>Male</option>
												<option>Fe Male</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-12">
										<div class="form-group">
											<label>Department</label>
											<select class="form-select form-control">
												<option>Surgen</option>
												<option>Cardiologist</option>
												<option>Gynacologist</option>
											</select>
										</div>
									</div>
								</div>
								<div class="submit-section">
									<button type="submit" class="btn btn-primary search-btn submit-btn">Search</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Home Banner -->

		<!-- Clinic and Specialities -->
		<section class="section section-specialities">
			<div class="container-fluid">
				<div class="section-header text-center aos" data-aos="fade-up">
					<h2>Clinic and Specialities</h2>
					<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="row justify-content-center aos" data-aos="fade-up">
					<div class="col-md-9">
						<!-- Slider -->
						<div class="specialities-slider slider">
							<!-- Slider Item -->
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="{{ URL::asset('/assets/img/specialities/specialities-01.png')}}" class="img-fluid" alt="Speciality">	<span><i class="fa fa-circle" aria-hidden="true"></i></span>
								</div>
								<p>Urology</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="{{ URL::asset('/assets/img/specialities/specialities-02.png')}}" class="img-fluid" alt="Speciality">	<span><i class="fa fa-circle" aria-hidden="true"></i></span>
								</div>
								<p>Neurology</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="{{ URL::asset('/assets/img/specialities/specialities-03.png')}}" class="img-fluid" alt="Speciality">	<span><i class="fa fa-circle" aria-hidden="true"></i></span>
								</div>
								<p>Orthopedic</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="{{ URL::asset('/assets/img/specialities/specialities-04.png')}}" class="img-fluid" alt="Speciality">	<span><i class="fa fa-circle" aria-hidden="true"></i></span>
								</div>
								<p>Cardiologist</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="{{ URL::asset('/assets/img/specialities/specialities-05.png')}}" class="img-fluid" alt="Speciality">	<span><i class="fa fa-circle" aria-hidden="true"></i></span>
								</div>
								<p>Dentist</p>
							</div>
							<!-- /Slider Item -->
						</div>
						<!-- /Slider -->
					</div>
				</div>
			</div>
		</section>
		<!-- Clinic and Specialities -->

		<!-- Category Section -->
		<section class="section section-category">
			<div class="container">
				<div class="section-header text-center aos" data-aos="fade-up">
					<h2>Browse by Specialities</h2>
					<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="category-box aos" data-aos="fade-up">
							<div class="category-image category-image-primary">
								<img src="{{ URL::asset('/assets/img/category/1.png')}}" alt="">
							</div>
							<div class="category-content">
								<h4>Urology</h4>
								<span>21 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box aos" data-aos="fade-up">
							<div class="category-image category-image-primary">
								<img src="{{ URL::asset('/assets/img/category/2.png')}}" alt="">
							</div>
							<div class="category-content">
								<h4>Neurology</h4>
								<span>18 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box aos" data-aos="fade-up">
							<div class="category-image category-image-primary">
								<img src="{{ URL::asset('/assets/img/category/3.png')}}" alt="">
							</div>
							<div class="category-content">
								<h4>Orthopedic</h4>
								<span>17 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box aos" data-aos="fade-up">
							<div class="category-image category-image-primary">
								<img src="{{ URL::asset('/assets/img/category/4.png')}}" alt="">
							</div>
							<div class="category-content">
								<h4>Cardiologist</h4>
								<span>12 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box aos" data-aos="fade-up">
							<div class="category-image category-image-primary">
								<img src="{{ URL::asset('/assets/img/category/5.png')}}" alt="">
							</div>
							<div class="category-content">
								<h4>Dentist</h4>
								<span>07 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box aos" data-aos="fade-up">
							<div class="category-image category-image-primary">
								<img src="{{ URL::asset('/assets/img/category/1.png')}}" alt="">
							</div>
							<div class="category-content">
								<h4>Urology</h4>
								<span>16 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box aos" data-aos="fade-up">
							<div class="category-image category-image-primary">
								<img src="{{ URL::asset('/assets/img/category/4.png')}}" alt="">
							</div>
							<div class="category-content">
								<h4>Cardiologist</h4>
								<span>18 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box aos" data-aos="fade-up">
							<div class="category-image category-image-primary">
								<img src="{{ URL::asset('/assets/img/category/3.png')}}" alt="">
							</div>
							<div class="category-content">
								<h4>Neurology</h4>
								<span>22 Doctors</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Category Section -->

		<!-- Popular Section -->
		<section class="section section-doctor">
			<div class="container-fluid">
				<div class="section-header text-center aos" data-aos="fade-up">
					<h2>Book Our Best Doctor</h2>
					<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="row">
					<div class="col-lg-12 aos" data-aos="fade-up">
						<div class="doctor-slider slider">
							<!-- Doctor Widget -->
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{url('doctor-profile')}}">
										<img class="img-fluid" alt="User Image" src="{{ URL::asset('/assets/img/doctors/doctor-01.jpg')}}">
									</a>
									<a href="javascript:void(0)" class="fav-btn">	<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
											<a href="{{url('doctor-profile')}}">Ruby Perrin</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
									<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
									<div class="rating">	<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<span class="d-inline-block average-rating">(17)</span>
									</div>
									<ul class="available-info">
										<li>	<i class="fas fa-map-marker-alt"></i> Florida, USA</li>
										<li>	<i class="far fa-clock"></i> Available on Fri, 22 Mar</li>
										<li>	<i class="far fa-money-bill-alt"></i> $300 - $1000	<i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">	<a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">	<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->
							<!-- Doctor Widget -->
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{url('doctor-profile')}}">
										<img class="img-fluid" alt="User Image" src="{{ URL::asset('/assets/img/doctors/doctor-02.jpg')}}">
									</a>
									<a href="javascript:void(0)" class="fav-btn">	<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
											<a href="{{url('doctor-profile')}}">Darren Elder</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
									<p class="speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
									<div class="rating">	<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(35)</span>
									</div>
									<ul class="available-info">
										<li>	<i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
										<li>	<i class="far fa-clock"></i> Available on Fri, 22 Mar</li>
										<li>	<i class="far fa-money-bill-alt"></i> $50 - $300	<i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">	<a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">	<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->
							<!-- Doctor Widget -->
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{url('doctor-profile')}}">
										<img class="img-fluid" alt="User Image" src="{{ URL::asset('/assets/img/doctors/doctor-03.jpg')}}">
									</a>
									<a href="javascript:void(0)" class="fav-btn">	<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
											<a href="{{url('doctor-profile')}}">Deborah Angel</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
									<p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
									<div class="rating">	<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(27)</span>
									</div>
									<ul class="available-info">
										<li>	<i class="fas fa-map-marker-alt"></i> Georgia, USA</li>
										<li>	<i class="far fa-clock"></i> Available on Fri, 22 Mar</li>
										<li>	<i class="far fa-money-bill-alt"></i> $100 - $400	<i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">	<a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">	<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->
							<!-- Doctor Widget -->
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{url('doctor-profile')}}">
										<img class="img-fluid" alt="User Image" src="{{ URL::asset('/assets/img/doctors/doctor-04.jpg')}}">
									</a>
									<a href="javascript:void(0)" class="fav-btn">	<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
											<a href="{{url('doctor-profile')}}">Sofia Brient</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
									<p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
									<div class="rating">	<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(4)</span>
									</div>
									<ul class="available-info">
										<li>	<i class="fas fa-map-marker-alt"></i> Louisiana, USA</li>
										<li>	<i class="far fa-clock"></i> Available on Fri, 22 Mar</li>
										<li>	<i class="far fa-money-bill-alt"></i> $150 - $250	<i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">	<a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">	<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->
							<!-- Doctor Widget -->
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{url('doctor-profile')}}">
										<img class="img-fluid" alt="User Image" src="{{ URL::asset('/assets/img/doctors/doctor-05.jpg')}}">
									</a>
									<a href="javascript:void(0)" class="fav-btn">	<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
											<a href="{{url('doctor-profile')}}">Marvin Campbell</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
									<p class="speciality">MBBS, MD - Ophthalmology, DNB - Ophthalmology</p>
									<div class="rating">	<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(66)</span>
									</div>
									<ul class="available-info">
										<li>	<i class="fas fa-map-marker-alt"></i> Michigan, USA</li>
										<li>	<i class="far fa-clock"></i> Available on Fri, 22 Mar</li>
										<li>	<i class="far fa-money-bill-alt"></i> $50 - $700	<i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">	<a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">	<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->
							<!-- Doctor Widget -->
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{url('doctor-profile')}}">
										<img class="img-fluid" alt="User Image" src="{{ URL::asset('/assets/img/doctors/doctor-06.jpg')}}">
									</a>
									<a href="javascript:void(0)" class="fav-btn">	<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
											<a href="{{url('doctor-profile')}}">Katharine Berthold</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
									<p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
									<div class="rating">	<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(52)</span>
									</div>
									<ul class="available-info">
										<li>	<i class="fas fa-map-marker-alt"></i> Texas, USA</li>
										<li>	<i class="far fa-clock"></i> Available on Fri, 22 Mar</li>
										<li>	<i class="far fa-money-bill-alt"></i> $100 - $500	<i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">	<a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">	<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->
							<!-- Doctor Widget -->
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{url('doctor-profile')}}">
										<img class="img-fluid" alt="User Image" src="{{ URL::asset('/assets/img/doctors/doctor-07.jpg')}}">
									</a>
									<a href="javascript:void(0)" class="fav-btn">	<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
											<a href="{{url('doctor-profile')}}">Linda Tobin</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
									<p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
									<div class="rating">	<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(43)</span>
									</div>
									<ul class="available-info">
										<li>	<i class="fas fa-map-marker-alt"></i> Kansas, USA</li>
										<li>	<i class="far fa-clock"></i> Available on Fri, 22 Mar</li>
										<li>	<i class="far fa-money-bill-alt"></i> $100 - $1000	<i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">	<a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">	<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->
							<!-- Doctor Widget -->
							<div class="profile-widget">
								<div class="doc-img">
									<a href="{{url('doctor-profile')}}">
										<img class="img-fluid" alt="User Image" src="{{ URL::asset('/assets/img/doctors/doctor-08.jpg')}}">
									</a>
									<a href="javascript:void(0)" class="fav-btn">	<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
											<a href="{{url('doctor-profile')}}">Paul Richard</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
									<p class="speciality">MBBS, MD - Dermatology , Venereology & Lepros</p>
									<div class="rating">	<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">(49)</span>
									</div>
									<ul class="available-info">
										<li>	<i class="fas fa-map-marker-alt"></i> California, USA</li>
										<li>	<i class="far fa-clock"></i> Available on Fri, 22 Mar</li>
										<li>	<i class="far fa-money-bill-alt"></i> $100 - $400	<i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">	<a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">	<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Doctor Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Popular Section -->

		<!-- Availabe Features -->
		<section class="section section-features">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5 features-img aos" data-aos="fade-up">
						<img src="{{ URL::asset('/assets/img/features/feature.png')}}" class="img-fluid" alt="Feature">
					</div>
					<div class="col-md-7 aos" data-aos="fade-up">
						<div class="section-header">
							<h2 class="mt-2">Availabe Features in Our Clinic</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						</div>
						<div class="features-slider slider">
							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="{{ URL::asset('/assets/img/features/feature-01.jpg')}}" class="img-fluid" alt="Feature">
								<p>Patient Ward</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="{{ URL::asset('/assets/img/features/feature-02.jpg')}}" class="img-fluid" alt="Feature">
								<p>Test Room</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="{{ URL::asset('/assets/img/features/feature-03.jpg')}}" class="img-fluid" alt="Feature">
								<p>ICU</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="{{ URL::asset('/assets/img/features/feature-04.jpg')}}" class="img-fluid" alt="Feature">
								<p>Laboratory</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="{{ URL::asset('/assets/img/features/feature-05.jpg')}}" class="img-fluid" alt="Feature">
								<p>Operation</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="{{ URL::asset('/assets/img/features/feature-06.jpg')}}" class="img-fluid" alt="Feature">
								<p>Medical</p>
							</div>
							<!-- /Slider Item -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Availabe Features -->

		<!-- Blog Section -->
		<section class="section section-blogs">
			<div class="container-fluid">
				<!-- Section Header -->
				<div class="section-header text-center aos" data-aos="fade-up">
					<h2>Blogs and News</h2>
					<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<!-- /Section Header -->
				<div class="row blog-grid-row">
					<div class="col-md-6 col-lg-3 col-sm-12">
						<!-- Blog Post -->
						<div class="blog grid-blog aos" data-aos="fade-up">
							<div class="blog-image">
								<a href="{{url('blog-details')}}">
									<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-01.jpg')}}" alt="Post Image">
								</a>
							</div>
							<div class="blog-content">
								<ul class="entry-meta meta-item">
									<li>
										<div class="post-author">
											<a href="{{url('doctor-profile')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="Post Author"> <span>Dr. Ruby Perrin</span>
											</a>
										</div>
									</li>
									<li><i class="far fa-clock"></i> 4 Dec 2019</li>
								</ul>
								<h3 class="blog-title"><a href="{{url('blog-details')}}">Doccure – Making your clinic painless visit?</a></h3>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
						<!-- /Blog Post -->
					</div>
					<div class="col-md-6 col-lg-3 col-sm-12">
						<!-- Blog Post -->
						<div class="blog grid-blog aos" data-aos="fade-up">
							<div class="blog-image">
								<a href="{{url('blog-details')}}">
									<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-02.jpg')}}" alt="Post Image">
								</a>
							</div>
							<div class="blog-content">
								<ul class="entry-meta meta-item">
									<li>
										<div class="post-author">
											<a href="{{url('doctor-profile')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="Post Author"> <span>Dr. Darren Elder</span>
											</a>
										</div>
									</li>
									<li><i class="far fa-clock"></i> 3 Dec 2019</li>
								</ul>
								<h3 class="blog-title"><a href="{{url('blog-details')}}">What are the benefits of Online Doctor Booking?</a></h3>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
						<!-- /Blog Post -->
					</div>
					<div class="col-md-6 col-lg-3 col-sm-12">
						<!-- Blog Post -->
						<div class="blog grid-blog aos" data-aos="fade-up">
							<div class="blog-image">
								<a href="{{url('blog-details')}}">
									<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-03.jpg')}}" alt="Post Image">
								</a>
							</div>
							<div class="blog-content">
								<ul class="entry-meta meta-item">
									<li>
										<div class="post-author">
											<a href="{{url('doctor-profile')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg')}}" alt="Post Author"> <span>Dr. Deborah Angel</span>
											</a>
										</div>
									</li>
									<li><i class="far fa-clock"></i> 3 Dec 2019</li>
								</ul>
								<h3 class="blog-title"><a href="{{url('blog-details')}}">Benefits of consulting with an Online Doctor</a></h3>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
						<!-- /Blog Post -->
					</div>
					<div class="col-md-6 col-lg-3 col-sm-12">
						<!-- Blog Post -->
						<div class="blog grid-blog aos" data-aos="fade-up">
							<div class="blog-image">
								<a href="{{url('blog-details')}}">
									<img class="img-fluid" src="{{ URL::asset('/assets/img/blog/blog-04.jpg')}}" alt="Post Image">
								</a>
							</div>
							<div class="blog-content">
								<ul class="entry-meta meta-item">
									<li>
										<div class="post-author">
											<a href="{{url('doctor-profile')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-04.jpg')}}" alt="Post Author"> <span>Dr. Sofia Brient</span>
											</a>
										</div>
									</li>
									<li><i class="far fa-clock"></i> 2 Dec 2019</li>
								</ul>
								<h3 class="blog-title"><a href="{{url('blog-details')}}">5 Great reasons to use an Online Doctor</a></h3>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
						<!-- /Blog Post -->
					</div>
				</div>
				<div class="view-all text-center aos" data-aos="fade-up">	
					<a href="{{url('blog-list')}}" class="btn btn-primary">View All</a>
				</div>
			</div>
		</section>
		<!-- /Blog Section -->
@endsection
	  