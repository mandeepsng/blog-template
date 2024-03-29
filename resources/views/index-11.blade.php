<?php $page="index-11";?>
@extends('layout.mainlayout_index2')
@section('content')		

		<!-- Banner Two -->
			<div class="home-banner-two">
				<span class="slider-counter-three"></span>
				<div class="home-banner-three-slider">
					<div class="profile-widget slider-img-one"></div>
					<div class="profile-widget slider-img-two"></div>
					<div class="profile-widget slider-img-three"></div>
					<div class="profile-widget slider-img-four"></div>
				</div>		
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-12">
							<div class="banner-two-form">
								<div class="app-form aos" data-aos="fade-up">
									<div class="search-doctor">
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
															<select class="select form-control">
																<option>Male</option>
																<option>Female</option>
															</select>
														</div>
													</div>
													<div class="col-12 col-md-12">
														<div class="form-group">
															<label>Department</label>
															<select class="select form-control">
																<option>Surgen</option>
																<option>Cardiologist</option>
																<option>Gynacologist</option>
															</select>
														</div>
													</div>
												</div>
												<div class="submit-section">
													<button type="submit" class="btn search-btn btn-two">Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
			<!-- /Banner Two -->

			<!-- Looking Section -->
			<section class="looking-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header aos" data-aos="fade-up">
								<h2 class="color-primary">What are you looking for?</h2>
								<p class="color-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="looking-grid w-100 hvr-bounce-to-right">
								<div class="looking-small-icon">
									<i class="fas fa-user-md"></i>
								</div>
								<div class="looking-info">
									<a href="{{url('search')}}" class="looking-link">Visit a Doctor</a>
									<p>We hire the best specialists to deliver top-notch diagnostic services for you.</p>
								</div>
								<div class="looking-big-icon">
									<i class="fas fa-user-md"></i>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="looking-grid w-100 hvr-bounce-to-right">
								<div class="looking-small-icon">
									<i class="fas fa-tablets"></i>
								</div>
								<div class="looking-info">
									<a href="{{url('pharmacy-search')}}" class="looking-link">Find a Pharmacy</a>
									<p>We provide the a wide range of medical services, so every person could have the opportunity.</p>
								</div>
								<div class="looking-big-icon">
									<i class="fas fa-tablets"></i>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="looking-grid w-100 hvr-bounce-to-right">
								<div class="looking-small-icon">
									<i class="fas fa-vial"></i>
								</div>
								<div class="looking-info">
									<a href="#" class="looking-link">Find a Lab</a>
									<p>We use the first-class medical equipment for timely diagnostics of various diseases.</p>
								</div>
								<div class="looking-big-icon">
									<i class="fas fa-vial"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Looking Section -->

			<!-- Best Doctor Section -->
			<section class="best-doctor-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header aos" data-aos="fade-up">
								<h2 class="color-primary">Book Our Best Doctor</h2>
								<p class="color-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="best-doctor-slider slider aos" data-aos="fade-up">
								<div class="best-doctor-widget">
									<div class="best-doctor-image">
										<a href="#">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-05.jpg')}}" class="img-fluid" alt="">
										</a>
										<div class="overlay">
											<div class="pro-icon">
												<img src="{{ URL::asset('/assets/img/icons/icon2.svg')}}" class="img-fluid" alt="">
											</div>
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
										</div>
									</div>
									<div class="item-info">
										<div class="doctor-verify-overlay d-flex">
											<a href="#">
												<span class="doctor-writter">Verified</span>
												<img src="{{ URL::asset('/assets/img/best-doctor-check.svg')}}" alt="">
											</a>
										</div>
										<div class="doctor-fav-btn">
											<a href="javascript:void(0)" class="fav-icon" tabindex="0">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
									</div>
									<div class="provider-info text-center">
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">Edward Willey</a>
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
											<div class="doctor-appointment-btn">
												<a href="{{url('booking')}}" class="btn btn-two">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
								<div class="best-doctor-widget">
									<div class="best-doctor-image">
										<a href="#">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-06.jpg')}}" class="img-fluid" alt="">
										</a>
										<div class="overlay">
											<div class="pro-icon">
												<img src="{{ URL::asset('/assets/img/icons/icon3.svg')}}" class="img-fluid" alt="">
											</div>
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
										</div>
									</div>
									<div class="item-info">
										<div class="doctor-verify-overlay d-flex">
											<a href="#">
												<span class="doctor-writter">Verified</span>
												<img src="{{ URL::asset('/assets/img/best-doctor-check.svg')}}" alt="">
											</a>
										</div>
										<div class="doctor-fav-btn">
											<a href="javascript:void(0)" class="fav-icon" tabindex="0">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
									</div>
									<div class="provider-info text-center">
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">Deborah Angel</a>
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
											<div class="doctor-appointment-btn">
												<a href="{{url('booking')}}" class="btn btn-two">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
								<div class="best-doctor-widget">
									<div class="best-doctor-image">
										<a href="#">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-07.jpg')}}" class="img-fluid" alt="">
										</a>
										<div class="overlay">
											<div class="pro-icon">
												<img src="{{ URL::asset('/assets/img/icons/icon1.svg')}}" class="img-fluid" alt="">
											</div>
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
										</div>
									</div>
									<div class="item-info">
										<div class="doctor-verify-overlay d-flex">
											<a href="#">
												<span class="doctor-writter">Verified</span>
												<img src="{{ URL::asset('/assets/img/best-doctor-check.svg')}}" alt="">
											</a>
										</div>
										<div class="doctor-fav-btn">
											<a href="javascript:void(0)" class="fav-icon" tabindex="0">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
									</div>
									<div class="provider-info text-center">
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">Merry Anderson</a>
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
											<div class="doctor-appointment-btn">
												<a href="{{url('booking')}}" class="btn btn-two">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
								<div class="best-doctor-widget">
									<div class="best-doctor-image">
										<a href="#">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-08.jpg')}}" class="img-fluid" alt="">
										</a>
										<div class="overlay">
											<div class="pro-icon">
												<img src="{{ URL::asset('/assets/img/icons/icon4.svg')}}" class="img-fluid" alt="">
											</div>
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
										</div>
									</div>
									<div class="item-info">
										<div class="doctor-verify-overlay d-flex">
											<a href="#">
												<span class="doctor-writter">Verified</span>
												<img src="{{ URL::asset('/assets/img/best-doctor-check.svg')}}" alt="">
											</a>
										</div>
										<div class="doctor-fav-btn">
											<a href="javascript:void(0)" class="fav-icon" tabindex="0">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
									</div>
									<div class="provider-info text-center">
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">David Blackwell</a>
										</h3>
										<p>Cosmetic Specialist</p>
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
											<div class="doctor-appointment-btn">
												<a href="{{url('booking')}}" class="btn btn-two">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
								<div class="best-doctor-widget">
									<div class="best-doctor-image">
										<a href="#">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-05.jpg')}}" class="img-fluid" alt="">
										</a>
										<div class="overlay">
											<div class="pro-icon">
												<img src="{{ URL::asset('/assets/img/icons/icon2.svg')}}" class="img-fluid" alt="">
											</div>
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
										</div>
									</div>
									<div class="item-info">
										<div class="doctor-verify-overlay d-flex">
											<a href="#">
												<span class="doctor-writter">Verified</span>
												<img src="{{ URL::asset('/assets/img/best-doctor-check.svg')}}" alt="">
											</a>
										</div>
										<div class="doctor-fav-btn">
											<a href="javascript:void(0)" class="fav-icon" tabindex="0">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
									</div>
									<div class="provider-info text-center">
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">Edward Willey</a>
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
											<div class="doctor-appointment-btn">
												<a href="{{url('booking')}}" class="btn btn-two">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
								<div class="best-doctor-widget">
									<div class="best-doctor-image">
										<a href="#">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-06.jpg')}}" class="img-fluid" alt="">
										</a>
										<div class="overlay">
											<div class="pro-icon">
												<img src="{{ URL::asset('/assets/img/icons/icon3.svg')}}" class="img-fluid" alt="">
											</div>
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
										</div>
									</div>
									<div class="item-info">
										<div class="doctor-verify-overlay d-flex">
											<a href="#">
												<span class="doctor-writter">Verified</span>
												<img src="{{ URL::asset('/assets/img/best-doctor-check.svg')}}" alt="">
											</a>
										</div>
										<div class="doctor-fav-btn">
											<a href="javascript:void(0)" class="fav-icon" tabindex="0">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
									</div>
									<div class="provider-info text-center">
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">Deborah Angel</a>
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
											<div class="doctor-appointment-btn">
												<a href="{{url('booking')}}" class="btn btn-two">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
								<div class="best-doctor-widget">
									<div class="best-doctor-image">
										<a href="#">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-07.jpg')}}" class="img-fluid" alt="">
										</a>
										<div class="overlay">
											<div class="pro-icon">
												<img src="{{ URL::asset('/assets/img/icons/icon1.svg')}}" class="img-fluid" alt="">
											</div>
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
										</div>
									</div>
									<div class="item-info">
										<div class="doctor-verify-overlay d-flex">
											<a href="#">
												<span class="doctor-writter">Verified</span>
												<img src="{{ URL::asset('/assets/img/best-doctor-check.svg')}}" alt="">
											</a>
										</div>
										<div class="doctor-fav-btn">
											<a href="javascript:void(0)" class="fav-icon" tabindex="0">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
									</div>
									<div class="provider-info text-center">
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">Merry Anderson</a>
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
											<div class="doctor-appointment-btn">
												<a href="{{url('booking')}}" class="btn btn-two">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
								<div class="best-doctor-widget">
									<div class="best-doctor-image">
										<a href="#">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-08.jpg')}}" class="img-fluid" alt="">
										</a>
										<div class="overlay">
											<div class="pro-icon">
												<img src="{{ URL::asset('/assets/img/icons/icon4.svg')}}" class="img-fluid" alt="">
											</div>
											<div class="social-info">
												<a href="" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
												<a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
											</div>
										</div>
									</div>
									<div class="item-info">
										<div class="doctor-verify-overlay d-flex">
											<a href="#">
												<span class="doctor-writter">Verified</span>
												<img src="{{ URL::asset('/assets/img/best-doctor-check.svg')}}" alt="">
											</a>
										</div>
										<div class="doctor-fav-btn">
											<a href="javascript:void(0)" class="fav-icon" tabindex="0">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
									</div>
									<div class="provider-info text-center">
										<h3 class="mb-1">
											<a href="{{url('doctor-profile')}}" tabindex="0">David Blackwell</a>
										</h3>
										<p>Cosmetic Specialist</p>
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
											<div class="doctor-appointment-btn">
												<a href="{{url('booking')}}" class="btn btn-two">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="aos" data-aos="fade-up">
								<a href="{{url('booking')}}" class="btn btn-two">View More</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Best Doctor Section -->

			<!-- Features Clinic Section -->
			<section class="features-clinic-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header aos" data-aos="fade-up">
								<h2 class="color-primary">Available Features in Our Clinic</h2>
								<p class="color-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div class="row clinic-row aos" data-aos="fade-up">
						<div class="col-lg-4 col-md-6 d-flex clinic-main-grid">
							<div class="clinic-grid w-100 hvr-bounce-to-right">
								<img src="{{ URL::asset('/assets/img/services/features-01.svg')}}" alt="">
								<h4>Operation</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex clinic-main-grid">
							<div class="clinic-grid w-100 hvr-bounce-to-right">
								<img src="{{ URL::asset('/assets/img/services/features-02.svg')}}" alt="">
								<h4>Medical</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex clinic-main-grid">
							<div class="clinic-grid w-100 hvr-bounce-to-right">
								<img src="{{ URL::asset('/assets/img/services/features-03.svg')}}" alt="">
								<h4>Patient Ward</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex clinic-main-grid">
							<div class="clinic-grid w-100 hvr-bounce-to-right">
								<img src="{{ URL::asset('/assets/img/services/features-04.svg')}}" alt="">
								<h4>Test Room</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex clinic-main-grid">
							<div class="clinic-grid w-100 hvr-bounce-to-right">
								<img src="{{ URL::asset('/assets/img/services/features-05.svg')}}" alt="">
								<h4>ICU</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex clinic-main-grid">
							<div class="clinic-grid w-100 hvr-bounce-to-right">
								<img src="{{ URL::asset('/assets/img/services/features-06.svg')}}" alt="">
								<h4>Laboratory</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Features Clinic Section -->

			<!-- High Service Section -->
			<section class="high-service-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header" data-aos="fade-up">
								<h2 class="color-primary">High Quality Service for you</h2>
								<p class="color-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2 col-md-4">
							<div class="high-service-box aos" data-aos="fade-up">
								<div class="service-box-inner">
									<div class="high-service-img">
										<span>
											<img src="{{ URL::asset('/assets/img/icons/icon1.svg')}}" class="img-fluid" alt="">
										</span>
									</div>
									<div class="overlay">
										<div class="pro-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon1.svg')}}" class="img-fluid" alt="">
										</div>
										<div class="pro-text">
											<h4>Urology</h4>
											<p>124 Doctors</p>
										</div>
									</div>
									<h4 class="high-service-head">Urology</h4>
									<p class="high-service-text">124 Doctors</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4">
							<div class="high-service-box aos" data-aos="fade-up">
								<div class="service-box-inner">
									<div class="high-service-img">
										<span>
											<img src="{{ URL::asset('/assets/img/icons/icon2.svg')}}" class="img-fluid" alt="">
										</span>
									</div>
									<div class="overlay">
										<div class="pro-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon2.svg')}}" class="img-fluid" alt="">
										</div>
										<div class="pro-text">
											<h4>Neurology</h4>
											<p>21 Doctors</p>
										</div>
									</div>
									<h4 class="high-service-head">Neurology</h4>
									<p class="high-service-text">21 Doctors</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4">
							<div class="high-service-box aos" data-aos="fade-up">
								<div class="service-box-inner">
									<div class="high-service-img">
										<span>
											<img src="{{ URL::asset('/assets/img/icons/icon6.svg')}}" class="img-fluid" alt="">
										</span>
									</div>
									<div class="overlay">
										<div class="pro-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon6.svg')}}" class="img-fluid" alt="">
										</div>
										<div class="pro-text">
											<h4>Orthopedic</h4>
											<p>50 Doctors</p>
										</div>
									</div>
									<h4 class="high-service-head">Orthopedic</h4>
									<p class="high-service-text">50 Doctors</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4">
							<div class="high-service-box aos" data-aos="fade-up">
								<div class="service-box-inner">
									<div class="high-service-img">
										<span>
											<img src="{{ URL::asset('/assets/img/icons/icon3.svg')}}" class="img-fluid service-img-small mt-2" alt="">
										</span>
									</div>
									<div class="overlay">
										<div class="pro-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon3.svg')}}" class="img-fluid service-img-big" alt="">
										</div>
										<div class="pro-text">
											<h4>Cardiologist</h4>
											<p>140 Doctors</p>
										</div>
									</div>
									<h4 class="high-service-head">Cardiologist</h4>
									<p class="high-service-text">140 Doctors</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4">
							<div class="high-service-box aos" data-aos="fade-up">
								<div class="service-box-inner">
									<div class="high-service-img">
										<span>
											<img src="{{ URL::asset('/assets/img/icons/icon4.svg')}}" class="img-fluid" alt="">
										</span>
									</div>
									<div class="overlay">
										<div class="pro-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon4.svg')}}" class="img-fluid" alt="">
										</div>
										<div class="pro-text">
											<h4>Dentist</h4>
											<p>80 Doctors</p>
										</div>
									</div>
									<h4 class="high-service-head">Dentist</h4>
									<p class="high-service-text">80 Doctors</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4">
							<div class="high-service-box aos" data-aos="fade-up">
								<div class="service-box-inner">
									<div class="high-service-img">
										<span>
											<img src="{{ URL::asset('/assets/img/icons/icon5.svg')}}" class="img-fluid" alt="">
										</span>
									</div>
									<div class="overlay">
										<div class="pro-icon">
											<img src="{{ URL::asset('/assets/img/icons/icon5.svg')}}" class="img-fluid" alt="">
										</div>
										<div class="pro-text">
											<h4>Ultrasound</h4>
											<p>56 Doctors</p>
										</div>
									</div>
									<h4 class="high-service-head">Ultrasound</h4>
									<p class="high-service-text">56 Doctors</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="high-btn aos" data-aos="fade-up">
								<a href="{{url('doctor-profile')}}" class="btn btn-two">View More</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /High Service Section -->

			<!-- Blog News Section -->
			<section class="blog-news-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header aos" data-aos="fade-up">
								<h2 class="color-primary">Blogs and News</h2>
								<p class="color-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="blog-news-grid w-100">
								<div class="blog-news-img">
									<a href="{{url('blog-details')}}">
										<img src="{{ URL::asset('/assets/img/blog/blog-01.jpg')}}" class="img-fluid" alt="">
									</a>
									<div class="overlay"></div>
									<div class="blog-news-date">
										<a href="{{url('blog-details')}}">
											<i class="feather-calendar me-2"></i>
											<span>10 Dec 2021</span>
										</a>
									</div>
								</div>
								<h3 class="blog-news-title">
									<a href="{{url('blog-details')}}">How to handle patient body in MRI</a>
								</h3>
								<div>
									<a href="{{url('blog-details')}}" class="blog-news-arrows">
										<i class="fas fa-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="blog-news-grid w-100">
								<div class="blog-news-img">
									<a href="{{url('blog-details')}}">
										<img src="{{ URL::asset('/assets/img/blog/blog-02.jpg')}}" class="img-fluid" alt="">
									</a>
									<div class="overlay"></div>
									<div class="blog-news-date">
										<a href="{{url('blog-details')}}">
											<i class="feather-calendar me-2"></i>
											<span>18 Dec 2021</span>
										</a>
									</div>
								</div>
								<h3 class="blog-news-title">
									<a href="{{url('blog-details')}}">Doccure – Making your clinic painless visit?</a>
								</h3>
								<div>
									<a href="{{url('blog-details')}}" class="blog-news-arrows">
										<i class="fas fa-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="blog-news-grid w-100">
								<div class="blog-news-img">
									<a href="{{url('blog-details')}}">
										<img src="{{ URL::asset('/assets/img/blog/blog-04.jpg')}}" class="img-fluid" alt="">
									</a>
									<div class="overlay"></div>
									<div class="blog-news-date">
										<a href="{{url('blog-details')}}">
											<i class="feather-calendar me-2"></i>
											<span>25 Dec 2021</span>
										</a>
									</div>
								</div>
								<h3 class="blog-news-title">
									<a href="{{url('blog-details')}}">Benefits of consulting with an Online Doctor</a>
								</h3>
								<div>
									<a href="{{url('blog-details')}}" class="blog-news-arrows">
										<i class="fas fa-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="high-btn aos" data-aos="fade-up">
								<a href="{{url('blog-details')}}" class="btn btn-two">View More</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Blog News Section -->

	   @endsection
	  