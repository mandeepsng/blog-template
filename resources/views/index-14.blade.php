<?php $page="index-14";?>
@extends('layout.mainlayout_index9')
@section('content')		

<!-- Home Five Banner -->
			<section class="home-section-five">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12">
							<div class="banner-wrapper-five aos" data-aos="fade-up">
								<div class="section-search-five text-center">
									<span>World's Largest </span>
									<h2>Search Doctor, Make an Appointment</h2>
									<p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
									<div class="search-box-five">
										<form action="search"> 
											<div class="search-input-five">
												<i class="feather-compass bficon compass-icon"></i>
												<div class="form-group mb-0">
													<input type="text" class="form-control search-loc" placeholder="Search Location">
												</div>
											</div>
											<div class="search-input-five line-five">
												<i class="feather-user-check bficon"></i>
												<div class="form-group mb-0">
													<input type="text" class="form-control search-ortho" placeholder="Orthopedic"> 
												</div>
											</div>
											<div class="search-btn-five">
												<button class="btn search_service" type="submit">Search</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Home Five Banner -->

			<!-- Looking Section Five -->
			<section class="looking-section-five">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header section-header-five text-center aos" data-aos="fade-up">
								<h2 class="title-five">What are you looking for?</h2>
							</div>
						</div>
					</div>
					<div class="looking-bg-five">
						<div class="row justify-content-center">
							<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
								<div class="looking-grid-five looking-grid-blue w-100">
									<div class="looking-icon-five">
										<i class="fas fa-user-md"></i>
									</div>
									<div class="looking-info-five">
										<a href="{{url('search')}}">Visit a Doctor</a>
										<p>We hire the best specialists to deliver top-notch diagnostic services for you.</p>
									</div>
									<div class="looking-info-btn">
										<a href="{{url('booking')}}" class="btn btn-five">Book Now <i class="feather-arrow-right ms-1"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
								<div class="looking-grid-five looking-grid-green w-100">
									<div class="looking-icon-five">
										<i class="fas fa-tablets"></i>
									</div>
									<div class="looking-info-five">
										<a href="{{url('pharmacy-search')}}">Find a Pharmacy</a>
										<p>We provide the a wide range of medical services, so every person could have the opportunity.</p>
									</div>
									<div class="looking-info-btn">
										<a href="{{url('booking')}}" class="btn btn-five">Find Now <i class="feather-arrow-right ms-1"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
								<div class="looking-grid-five looking-grid-orange w-100">
									<div class="looking-icon-five">
										<i class="fas fa-vial"></i>
									</div>
									<div class="looking-info-five">
										<a href="#">Find a Lab</a>
										<p>We use the first-class medical equipment for timely diagnostics of various diseases timely diagnostics of various diseases diseases timely diagnostics of various diseases.</p>
									</div>
									<div class="looking-info-btn">
										<a href="{{url('booking')}}" class="btn btn-five">Book Now <i class="feather-arrow-right ms-1"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Looking Section Five -->

			<!-- Clinic Section Five -->
			<section class="clinic-section-five">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header section-header-five text-center aos" data-aos="fade-up">
								<h2 class="title-five">Clinic and Specialities</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up"> 
							<div class="clinic-grid-five w-100 hvr-bounce-to-bottom">
								<div class="clinic-grid-img">
									<div class="clinic-img-five">
										<img src="{{ URL::asset('/assets/img/clinic/clinic-icon1.png')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>Urology</p>
									<div class="clinic-five-btn">
										<a href="#" class="btn">Consult Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up">
							<div class="clinic-grid-five w-100 hvr-bounce-to-bottom">
								<div class="clinic-grid-img">
									<div class="clinic-img-five">
										<img src="{{ URL::asset('/assets/img/clinic/clinic-icon2.png')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>Orthopedic</p>
									<div class="clinic-five-btn">
										<a href="#" class="btn">Consult Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up">
							<div class="clinic-grid-five w-100 hvr-bounce-to-bottom">
								<div class="clinic-grid-img">
									<div class="clinic-img-five">
										<img src="{{ URL::asset('/assets/img/clinic/clinic-icon3.png')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>MRI Scans</p>
									<div class="clinic-five-btn">
										<a href="#" class="btn">Consult Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up">
							<div class="clinic-grid-five w-100 hvr-bounce-to-bottom">
								<div class="clinic-grid-img">
									<div class="clinic-img-five">
										<img src="{{ URL::asset('/assets/img/clinic/clinic-icon4.png')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>Dentist</p>
									<div class="clinic-five-btn">
										<a href="#" class="btn">Consult Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up">
							<div class="clinic-grid-five w-100 hvr-bounce-to-bottom">
								<div class="clinic-grid-img">
									<div class="clinic-img-five">
										<img src="{{ URL::asset('/assets/img/clinic/clinic-icon5.png')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>Cardiologist</p>
									<div class="clinic-five-btn">
										<a href="#" class="btn">Consult Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up">
							<div class="clinic-grid-five w-100 hvr-bounce-to-bottom">
								<div class="clinic-grid-img">
									<div class="clinic-img-five">
										<img src="{{ URL::asset('/assets/img/clinic/clinic-icon6.png')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>Neurology</p>
									<div class="clinic-five-btn">
										<a href="#" class="btn">Consult Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clinic-see-btn text-center aos" data-aos="fade-up">
						<a href="#" class="btn btn-six">See All Specialities</a>
					</div>
				</div>
			</section>
			<!-- Clinic Section Five -->

			<!-- Doctor Section Five -->
			<section class="doctor-section-five">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="doctor-grid-five w-100">
								<div class="doctor-details">
									<h4>ARE YOU A DOCTOR?</h4>
									<p>The service allows you to get maximum visibility online and to manage appointments and contacts coming from the site, in a simple and fast way.</p>
									<a href="{{url('booking')}}" class="btn">Book Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 doctor-img2 aos" data-aos="fade-up">
							<div class="doctor-grid-five w-100">
								<img src="{{ URL::asset('/assets/img/doctors/doctor-img2.png')}}" alt="" class="img-fluid">
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="doctor-grid-five w-100">
								<div class="doctor-details doctor-details-one">
									<h4>ARE YOU A PATIENT?</h4>
									<p>The service allows you to get maximum visibility online and to manage appointments and contacts coming from the site, in a simple and fast way.</p>
									<a href="{{url('booking')}}" class="btn">Book Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Doctor Section Five -->

			<!-- Browse Section Five -->
			<section class="browse-section-five">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header section-header-five text-center aos" data-aos="fade-up">
								<h2 class="title-five">Browse by Specialities</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
							<div class="specialist-card-five d-flex hvr-bounce-to-right">
								<div class="specialist-img-five">
									<img src="{{ URL::asset('/assets/img/icons/icon1.svg')}}" alt="" class="img-fluid">
								</div>
								<div class="specialist-info">
									<a href="#">Urology</a>
								</div>
								<div class="specialist-nav-five ms-auto">
									<a href="#"><i class="feather-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
							<div class="specialist-card-five d-flex hvr-bounce-to-right">
								<div class="specialist-img-five">
									<img src="{{ URL::asset('/assets/img/icons/icon7.svg')}}" alt="" class="img-fluid">
								</div>
								<div class="specialist-info">
									<a href="#">Orthopedic</a>
								</div>
								<div class="specialist-nav-five ms-auto">
									<a href="#"><i class="feather-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
							<div class="specialist-card-five d-flex hvr-bounce-to-right">
								<div class="specialist-img-five">
									<img src="{{ URL::asset('/assets/img/icons/icon4.svg')}}" alt="" class="img-fluid">
								</div>
								<div class="specialist-info">
									<a href="#">Dentist</a>
								</div>
								<div class="specialist-nav-five ms-auto">
									<a href="#"><i class="feather-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
							<div class="specialist-card-five d-flex hvr-bounce-to-right">
								<div class="specialist-img-five">
									<img src="{{ URL::asset('/assets/img/icons/icon3.svg')}}" alt="" class="img-fluid spec-img">
								</div>
								<div class="specialist-info">
									<a href="#">Cardiologist</a>
								</div>
								<div class="specialist-nav-five ms-auto">
									<a href="#"><i class="feather-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
							<div class="specialist-card-five d-flex hvr-bounce-to-right">
								<div class="specialist-img-five">
									<img src="{{ URL::asset('/assets/img/icons/icon8.svg')}}" alt="" class="img-fluid">
								</div>
								<div class="specialist-info">
									<a href="#">MRI Scans</a>
								</div>
								<div class="specialist-nav-five ms-auto">
									<a href="#"><i class="feather-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
							<div class="specialist-card-five d-flex hvr-bounce-to-right">
								<div class="specialist-img-five">
									<img src="{{ URL::asset('/assets/img/icons/icon9.svg')}}" alt="" class="img-fluid">
								</div>
								<div class="specialist-info">
									<a href="#">Neurology</a>
								</div>
								<div class="specialist-nav-five ms-auto">
									<a href="#"><i class="feather-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
							<div class="specialist-card-five d-flex hvr-bounce-to-right">
								<div class="specialist-img-five">
									<img src="{{ URL::asset('/assets/img/icons/icon10.svg')}}" alt="" class="img-fluid">
								</div>
								<div class="specialist-info">
									<a href="#">Laboratory</a>
								</div>
								<div class="specialist-nav-five ms-auto">
									<a href="#"><i class="feather-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
							<div class="specialist-card-five d-flex hvr-bounce-to-right">
								<div class="specialist-img-five">
									<img src="{{ URL::asset('/assets/img/icons/icon11.svg')}}" alt="" class="img-fluid">
								</div>
								<div class="specialist-info">
									<a href="#">Primary Checkup</a>
								</div>
								<div class="specialist-nav-five ms-auto">
									<a href="#"><i class="feather-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Browse Section Five -->

			<!-- Best Section Five -->
			<section class="best-section-five">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header section-header-five text-center aos" data-aos="fade-up">
								<h2 class="title-five">Book Our Best Doctor</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="doctors-grid-five w-100">
								<div class="doctors-img-five">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doctor-13.jpg')}}" alt="" class="img-fluid">
									</a>
									<div class="social-info">
										<div class="social-inner">
											<a href="#" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
										</div>
									</div>
								</div>
								<div class="best-doctors-info">
									<h3><a href="{{url('doctor-profile')}}">Dr. Deborah Angel</a></h3>
									<p class="doctor-posting">Cardiology Specialist</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">4.9 ( 82 )</span>
									</div>
									<div class="doctors-btn-five">
										<a href="{{url('booking')}}" class="btn w-100">Book Appointment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="doctors-grid-five w-100">
								<div class="doctors-img-five">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doctor-14.jpg')}}" alt="" class="img-fluid">
									</a>
									<div class="social-info">
										<div class="social-inner">
											<a href="#" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
										</div>
									</div>
								</div>
								<div class="best-doctors-info">
									<h3><a href="{{url('doctor-profile')}}">Dr. Edward Willey</a></h3>
									<p class="doctor-posting">Dermatologist</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">4.9 ( 82 )</span>
									</div>
									<div class="doctors-btn-five">
										<a href="{{url('booking')}}" class="btn w-100">Book Appointment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="doctors-grid-five w-100">
								<div class="doctors-img-five">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doctor-15.jpg')}}" alt="" class="img-fluid">
									</a>
									<div class="social-info">
										<div class="social-inner">
											<a href="#" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
										</div>
									</div>
								</div>
								<div class="best-doctors-info">
									<h3><a href="{{url('doctor-profile')}}">Dr. Merry Anderson</a></h3>
									<p class="doctor-posting">Gastrologic Specialist</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">4.9 ( 82 )</span>
									</div>
									<div class="doctors-btn-five">
										<a href="{{url('booking')}}" class="btn w-100">Book Appointment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="doctors-grid-five w-100">
								<div class="doctors-img-five">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doctor-16.jpg')}}" alt="" class="img-fluid">
									</a>
									<div class="social-info">
										<div class="social-inner">
											<a href="#" target="_blank"><i class="fab fa-facebook hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-linkedin hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-instagram hi-icon"></i></a>
											<a href="#" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
										</div>
									</div>
								</div>
								<div class="best-doctors-info">
									<h3><a href="{{url('doctor-profile')}}">Dr. David Blackwell</a></h3>
									<p class="doctor-posting">Cosmetic Specialist</p>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="d-inline-block average-rating">4.9 ( 82 )</span>
									</div>
									<div class="doctors-btn-five">
										<a href="{{url('booking')}}" class="btn w-100">Book Appointment</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="doctor-see-btn text-center aos" data-aos="fade-up">
						<a href="#" class="btn btn-six">See All Doctors</a>
					</div>
				</div>
			</section>
			<!-- /Best Section Five -->

			<!-- Clinic Section Five -->
			<section class="clinic-section-five">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header section-header-five text-center aos" data-aos="fade-up">
								<h2 class="title-five">Available Features in Our Clinic</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up"> 
							<div class="clinic-grid-five w-100 hvr-bounce-to-bottom pb-0">
								<div class="clinic-grid-img">
									<div class="clinic-img-five clinic-img-five1">
										<img src="{{ URL::asset('/assets/img/services/features-01.svg')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>Operation</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up">
							<div class="clinic-grid-five w-100 hvr-bounce-to-bottom pb-0">
								<div class="clinic-grid-img">
									<div class="clinic-img-five clinic-img-five1">
										<img src="{{ URL::asset('/assets/img/services/features-02.svg')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>Medical</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up">
							<div class="clinic-grid-five w-100 hvr-bounce-to-bottom pb-0">
								<div class="clinic-grid-img">
									<div class="clinic-img-five clinic-img-five1">
										<img src="{{ URL::asset('/assets/img/services/features-03.svg')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>Patient Ward</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up">
							<div class="clinic-grid-five w-100 hvr-bounce-to-bottom pb-0">
								<div class="clinic-grid-img">
									<div class="clinic-img-five clinic-img-five1">
										<img src="{{ URL::asset('/assets/img/services/features-04.svg')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>Test Room</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up">
							<div class="clinic-grid-five w-100 hvr-bounce-to-bottom pb-0">
								<div class="clinic-grid-img">
									<div class="clinic-img-five clinic-img-five1">
										<img src="{{ URL::asset('/assets/img/services/features-05.svg')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>ICU</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 d-flex aos" data-aos="fade-up">
							<div class="clinic-grid-five hvr-bounce-to-bottom w-100 pb-0">
								<div class="clinic-grid-img">
									<div class="clinic-img-five clinic-img-five1">
										<img src="{{ URL::asset('/assets/img/services/features-06.svg')}}" alt="">
									</div>
								</div>
								<div class="clinic-grid-info">
									<p>Laboratory</p>
								</div>
							</div>
						</div>
					</div>
					<div class="clinic-see-btn text-center aos" data-aos="fade-up">
						<a href="#" class="btn btn-six">See All Features</a>
					</div>
				</div>
			</section>
			<!-- Clinic Section Five -->

			<!-- News Letter Five -->
			<section class="news-letter-five">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="news-five">
								<div class="news-five-head aos" data-aos="fade-up">
									<h2>Grab Our Newsletter</h2>
									<p>To receive latest offers and discounts from the shop.</p>
								</div>
								<div class="row justify-content-center">
									<div class="col-lg-8 col-md-12">
										<div class="news-five-form aos" data-aos="fade-up">
											<form>
												<div class="form-group mb-0">
													<input type="text" class="form-control" placeholder="Enter Your Email Address">
													<button type="submit" class="btn">Subscribe</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- News Letter Five -->

			<!-- Blog Section Five -->
			<section class="blog-section-five">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header section-header-five text-center aos" data-aos="fade-up">
								<h2 class="title-five">Our Latest Blogs</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="blog-grid-five w-100">
								<div class="blog-five-img">
									<a href="{{url('blog-details')}}">
										<img src="{{ URL::asset('/assets/img/blog/blog-11.jpg')}}" class="img-fluid blog-details-img" alt="">
									</a>
									<div class="blog-item-info">
										<div class="blog-news-date">
											<a href="{{url('blog-details')}}">
												<i class="feather-calendar me-2"></i>
												<span>10 Dec 2021</span>
											</a>
										</div>
										<div class="blog-doctors-profile">
											<a href="{{url('blog-details')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="" class="me-2"> 
												<span>Ruby Perrin</span>
											</a>
										</div>
									</div>
								</div>
								<div class="blog-info-five">
									<h3 class="blog-news-title">
										<a href="{{url('blog-details')}}">How to handle patient body in MRI</a>
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="{{url('blog-details')}}" class="read-news">Read News</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="blog-grid-five w-100">
								<div class="blog-five-img">
									<a href="{{url('blog-details')}}">
										<img src="{{ URL::asset('/assets/img/blog/blog-12.jpg')}}" class="img-fluid blog-details-img" alt="">
									</a>
									<div class="blog-item-info">
										<div class="blog-news-date">
											<a href="{{url('blog-details')}}">
												<i class="feather-calendar me-2"></i>
												<span>03 Jan 2021</span>
											</a>
										</div>
										<div class="blog-doctors-profile">
											<a href="{{url('blog-details')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="" class="me-2"> 
												<span>Daren Elder</span>
											</a>
										</div>
									</div>
								</div>
								<div class="blog-info-five">
									<h3 class="blog-news-title">
										<a href="{{url('blog-details')}}">Doccure – Making your clinic painless visit?</a>
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="{{url('blog-details')}}" class="read-news">Read News</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
							<div class="blog-grid-five w-100">
								<div class="blog-five-img">
									<a href="{{url('blog-details')}}">
										<img src="{{ URL::asset('/assets/img/blog/blog-13.jpg')}}" class="img-fluid blog-details-img" alt="">
									</a>
									<div class="blog-item-info">
										<div class="blog-news-date">
											<a href="{{url('blog-details')}}">
												<i class="feather-calendar me-2"></i>
												<span>25 Feb 2021</span>
											</a>
										</div>
										<div class="blog-doctors-profile">
											<a href="{{url('blog-details')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg')}}" alt="" class="me-2"> 
												<span>Dr. Angel</span>
											</a>
										</div>
									</div>
								</div>
								<div class="blog-info-five">
									<h3 class="blog-news-title">
										<a href="{{url('blog-details')}}">Benefits of consulting with an Online Doctor</a>
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="{{url('blog-details')}}" class="read-news">Read News</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="blog-five-btn aos" data-aos="fade-up">
								<a href="{{url('blog-details')}}" class="btn btn-six">View More</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Blog Section Five -->

				
	   @endsection
	  

