<?php $page="index-12";?>
@extends('layout.mainlayout_index4')
@section('content')		

<!-- Home Banner -->
		<section class="home-banner-three">
			<div class="owl-carousel home-three-slider owl-theme">
				<div class="item">
					<img src="{{ URL::asset('/assets/img/banner-4.jpg')}}" class="img-fluid" alt="">
				</div>
				<div class="item">
					<img src="{{ URL::asset('/assets/img/banner-4.jpg')}}" class="img-fluid" alt="">
				</div>
				<div class="item">
					<img src="{{ URL::asset('/assets/img/banner-4.jpg')}}" class="img-fluid" alt="">
				</div>
			</div>
			<div class="banner-wrapper-three">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-12" >
							<div class="banner-wrapper doc-form d-lg-block d-md-none banner-wrapper-left">
								<div class="app-form">
									<div class="banner-three-content">
										<h2>We Provide Solution</h2>
										<h2><span>To stressless Life</span></h2>
										<p>People who are more perfectionist are most likely to be depressed, Because they stress themselves out so much.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="banner-wrapper doc-form banner-wrapper-right">
								<div class="app-form app-form-one">
									<form action="#" class="doctor-form">
										<div class="row">
											<div class="col-md-12 col-lg-12">
												<div class="form-group">
													<label>Location</label>
													<input type="text" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-6 col-lg-4">
												<div class="form-group">
													<label>Gender</label>
													<select class="select form-control">
														<option>Male</option>
														<option>Female</option>
													</select>
												</div>
											</div>
											<div class="col-md-6 col-lg-8">
												<div class="form-group">
													<label>Department</label>
													<select class="select form-control">
														<option>Surgen</option>
														<option>Cardiologist</option>
														<option>Gynacologist</option>
													</select>
												</div>
											</div>
											<div class="col-md-12 col-lg-12">
												<a href="{{url('search')}}" class="btn btn-one w-100">Search</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Home Banner -->

		<!-- Looking Section Three -->
		<section class="looking-section-three">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-three aos" data-aos="fade-up">
							<h2 class="mb-0">What are you looking for?</h2>
						</div>
					</div>
				</div>
				<div class="row justify-content-center aos" data-aos="fade-up">
					<div class="col-lg-4 col-md-6 d-flex">
						<div class="looking-box w-100 hvr-bounce-to-bottom">
							<div class="looking-icon">
								<div class="icon-inner">
									<i class="fas fa-user-md"></i>
								</div>
							</div>
							<div class="looking-info">
								<a href="{{url('search')}}" class="looking-link">Visit a Doctor</a>
								<p>We hire the best specialists to deliver top-notch diagnostic services for you.</p>
							</div>
							<div class="looking-btn">
								<a href="{{url('booking')}}" class="btn btn-one w-100"><span>Book Now</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex">
						<div class="looking-box w-100 hvr-bounce-to-bottom">
							<div class="looking-icon">
								<div class="icon-inner">
									<i class="fas fa-tablets"></i>
								</div>
							</div>
							<div class="looking-info">
								<a href="{{url('pharmacy-search')}}" class="looking-link">Find a Pharmacy</a>
								<p>We provide the a wide range of medical services, so every person could have the opportunity.</p>
							</div>
							<div class="looking-btn">
								<a href="{{url('booking')}}" class="btn btn-one w-100"><span>Find Now</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex">
						<div class="looking-box w-100 hvr-bounce-to-bottom">
							<div class="looking-icon">
								<div class="icon-inner">
									<i class="fas fa-vial"></i>
								</div>
							</div>
							<div class="looking-info">
								<a href="#" class="looking-link">Find a Lab</a>
								<p>We use the first-class medical equipment for timely diagnostics of various diseases.</p>
							</div>
							<div class="looking-btn">
								<a href="{{url('booking')}}" class="btn btn-one w-100"><span>Book Now</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Looking Section Three -->

		<!-- Browse Specialities Section -->
		<section class="browse-section-three">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-three aos" data-aos="fade-up">
							<h2>Browse by Specialities</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="browse-grid w-100">
							<div class="browse-img">
								<img src="{{ URL::asset('/assets/img/browse/browse-img1.jpg')}}" class="img-fluid" alt="">
								<div class="overlay"></div>
								<div class="browse-content">
									<h4>Orthopedic</h4>
									<p>50 Doctors</p>
								</div>
								<div class="browse-icon">
									<div class="browse-inner">
										<div class="browse-box-img">
											<img src="{{ URL::asset('/assets/img/icons/icon7.svg')}}" class="browse-inner-img" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="browse-grid w-100">
							<div class="browse-img">
								<img src="{{ URL::asset('/assets/img/browse/browse-img2.jpg')}}" class="img-fluid" alt="">
								<div class="overlay"></div>
								<div class="browse-content">
									<h4>Cardiologist</h4>
									<p>140 Doctors</p>
								</div>
								<div class="browse-icon">
									<div class="browse-inner">
										<div class="browse-box-img">
											<img src="{{ URL::asset('/assets/img/icons/icon3.svg')}}" class="browse-inner-img browse-inner-one" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="browse-grid w-100">
							<div class="browse-img">
								<img src="{{ URL::asset('/assets/img/browse/browse-img3.jpg')}}" class="img-fluid" alt="">
								<div class="overlay"></div>
								<div class="browse-content">
									<h4>Dentist</h4>
									<p>80 Doctors</p>
								</div>
								<div class="browse-icon">
									<div class="browse-inner">
										<div class="browse-box-img">
											<img src="{{ URL::asset('/assets/img/icons/icon4.svg')}}" class="browse-inner-img" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="browse-grid w-100">
							<div class="browse-img">
								<img src="{{ URL::asset('/assets/img/browse/browse-img4.jpg')}}" class="img-fluid" alt="">
								<div class="overlay"></div>
								<div class="browse-content">
									<h4>MRI Scans</h4>
									<p>68 Doctors</p>
								</div>
								<div class="browse-icon">
									<div class="browse-inner">
										<div class="browse-box-img">
											<img src="{{ URL::asset('/assets/img/icons/icon8.svg')}}" class="browse-inner-img" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="browse-grid w-100">
							<div class="browse-img">
								<img src="{{ URL::asset('/assets/img/browse/browse-img5.jpg')}}" class="img-fluid" alt="">
								<div class="overlay"></div>
								<div class="browse-content">
									<h4>Urology</h4>
									<p>124 Doctors</p>
								</div>
								<div class="browse-icon">
									<div class="browse-inner">
										<div class="browse-box-img">
											<img src="{{ URL::asset('/assets/img/icons/icon1.svg')}}" class="browse-inner-img" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="browse-grid w-100">
							<div class="browse-img">
								<img src="{{ URL::asset('/assets/img/browse/browse-img6.jpg')}}" class="img-fluid" alt="">
								<div class="overlay"></div>
								<div class="browse-content">
									<h4>Neurology</h4>
									<p>21 Doctors</p>
								</div>
								<div class="browse-icon">
									<div class="browse-inner">
										<div class="browse-box-img">
											<img src="{{ URL::asset('/assets/img/icons/icon9.svg')}}" class="browse-inner-img" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="browse-grid w-100">
							<div class="browse-img">
								<img src="{{ URL::asset('/assets/img/browse/browse-img7.jpg')}}" class="img-fluid" alt="">
								<div class="overlay"></div>
								<div class="browse-content">
									<h4>Laboratory</h4>
									<p>78 Doctors</p>
								</div>
								<div class="browse-icon">
									<div class="browse-inner">
										<div class="browse-box-img">
											<img src="{{ URL::asset('/assets/img/icons/icon10.svg')}}" class="browse-inner-img" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="browse-grid w-100">
							<div class="browse-img">
								<img src="{{ URL::asset('/assets/img/browse/browse-img8.jpg')}}" class="img-fluid" alt="">
								<div class="overlay"></div>
								<div class="browse-content">
									<h4>Primary Checkup</h4>
									<p>46 Doctors</p>
								</div>
								<div class="browse-icon">
									<div class="browse-inner">
										<div class="browse-box-img">
											<img src="{{ URL::asset('/assets/img/icons/icon11.svg')}}" class="browse-inner-img" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Browse Specialities Section -->

		<!-- Doctor and Patient -->
		<section class="doctor-details-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="doctor-grid w-100">
							<div class="doctor-details">
								<h4>ARE YOU A DOCTOR?</h4>
								<p>The service allows you to get maximum visibility online and to manage appointments and contacts coming from the site, in a simple and fast way.</p>
								<a href="{{url('booking')}}" class="btn btn-one">Book Now</a>
								<div class="doctor-details-img">
									<img src="{{ URL::asset('/assets/img/doctors/doctor-img1.png')}}" class="img-fluid" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 d-flex aos" data-aos="fade-up">
						<div class="doctor-grid w-100">
							<div class="doctor-details doctor-details-one">
								<h4>ARE YOU A PATIENT?</h4>
								<p>The service allows you to get maximum visibility online and to manage appointments and contacts coming from the site, in a simple and fast way.</p>
								<a href="{{url('booking')}}" class="btn btn-one">Book Now</a>
								<div class="doctor-details-img">
									<img src="{{ URL::asset('/assets/img/doctors/patient-img1.png')}}" class="img-fluid" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Doctor and Patient -->

		<!-- Doctor Section Three -->
		<section class="doctor-section-three">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-three aos" data-aos="fade-up">
							<h2>Book Our Best Doctor</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel best-our-doctors owl-theme aos" data-aos="fade-up">
							<div class="item">
								<div class="our-doctors-card">
									<div class="doctors-img">
										<a href="{{url('doctor-profile')}}">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-09.jpg')}}" alt="" class="img-fluid">
										</a>
									</div>
									<div class="pro-content">
										<div class="provider-info">
											<div class="doctors-amount">
												<span>$20 - $50</span>
											</div>
											<div class="total-patient">
												<p>
													<img src="{{ URL::asset('/assets/img/icons/patient-icon.png')}}" alt="" class="me-1">500+ Patients
												</p>
											</div>
											<h3 class="mb-2">
												<a href="{{url('doctor-profile')}}">Dr. Deborah Angel</a>
											</h3>
											<p class="doctor-post">MBBS, MD - General Medicine, DNB</p>
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
												<div class="booking-btn">
													<a href="{{url('booking')}}" class="btn book-btn">Book Appointment</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="our-doctors-card">
									<div class="doctors-img">
										<a href="{{url('doctor-profile')}}">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-10.jpg')}}" alt="" class="img-fluid">
										</a>
									</div>
									<div class="pro-content">
										<div class="provider-info">
											<div class="doctors-amount">
												<span>$30 - $60</span>
											</div>
											<div class="total-patient">
												<p>
													<img src="{{ URL::asset('/assets/img/icons/patient-icon.png')}}" alt="" class="me-1">100+ Patients
												</p>
											</div>
											<h3 class="mb-2">
												<a href="{{url('doctor-profile')}}">Dr. Darren Elder</a>
											</h3>
											<p class="doctor-post">MBBS, MS - General Surgery, MCh</p>
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
												<div class="booking-btn">
													<a href="{{url('booking')}}" class="btn book-btn">Book Appointment</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="our-doctors-card">
									<div class="doctors-img">
										<a href="{{url('doctor-profile')}}">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-11.jpg')}}" alt="" class="img-fluid">
										</a>
									</div>
									<div class="pro-content">
										<div class="provider-info">
											<div class="doctors-amount">
												<span>$40 - $70</span>
											</div>
											<div class="total-patient">
												<p>
													<img src="{{ URL::asset('/assets/img/icons/patient-icon.png')}}" alt="" class="me-1">200+ Patients
												</p>
											</div>
											<h3 class="mb-2">
												<a href="{{url('doctor-profile')}}">Dr. Sofia Brient</a>
											</h3>
											<p class="doctor-post">MBBS, MD - General Medicine, DNB</p>
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
												<div class="booking-btn">
													<a href="{{url('booking')}}" class="btn book-btn">Book Appointment</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="our-doctors-card">
									<div class="doctors-img">
										<a href="{{url('doctor-profile')}}">
											<img src="{{ URL::asset('/assets/img/doctors/book-doctor-12.jpg')}}" alt="" class="img-fluid">
										</a>
									</div>
									<div class="pro-content">
										<div class="provider-info">
											<div class="doctors-amount">
												<span>$50 - $80</span>
											</div>
											<div class="total-patient">
												<p>
													<img src="{{ URL::asset('/assets/img/icons/patient-icon.png')}}" alt="" class="me-1">300+ Patients
												</p>
											</div>
											<h3 class="mb-2">
												<a href="{{url('doctor-profile')}}">Dr. Sofia Brient</a>
											</h3>
											<p class="doctor-post">MBBS, MS - General Surgery, MCh</p>
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
												<div class="booking-btn">
													<a href="{{url('booking')}}" class="btn book-btn">Book Appointment</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 d-flex justify-content-between align-items-center">
						<div class="owl-nav slide-nav-5 nav-control"></div>
						<div class="float-end">
							<div class="text-end">
								<a href="{{url('doctor-profile')}}" class="btn btn-one">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Doctor Section Three -->

		<!-- Features Clinic -->
		<section class="features-clinic">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-three aos" data-aos="fade-up">
							<h2>Available Features in Our Clinic</h2>
							<p>Meet our Experts & Book Online</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="owl-carousel features-clinic-slider owl-theme">
							<div class="item">
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
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 d-flex justify-content-between align-items-center">
						<div class="owl-nav slide-nav-6 nav-control"></div>
						<div class="float-end">
							<div class="text-end">
								<a href="#" class="btn btn-one">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Features Clinic -->

		<!-- Latest Blog Section -->
		<section class="latest-blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-three aos" data-aos="fade-up">
							<h2>Our Latest Blogs</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="owl-carousel latest-blog-slider owl-theme">
							<div class="item">
								<div class="latest-blog-grid">
									<div class="latest-blog-img">
										<a href="{{url('blog-details')}}">
											<img src="{{ URL::asset('/assets/img/blog/blog-04.jpg')}}" alt="" class="img-fluid">
										</a>
									</div>
									<div class="lastest-blog-info">
										<div class="lastest-blog-date">
											<h4>20 <span>Jan 2022</span></h4>
										</div>
										<h4 class="latest-blog-title">
											<a href="{{url('blog-details')}}">Doccure – Making your clinic painless visit?</a>
										</h4>
										<p>Urology</p>
										<div class="lastest-post-author">
											<a href="{{url('doctor-profile')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="" class="me-2"> 
												<span>Dr. Ruby Perrin</span>
											</a>
										</div>
										<div class="lastest-blod-btn">
											<a href="{{url('blog-details')}}" class="btn btn-one">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="latest-blog-grid">
									<div class="latest-blog-img">
										<a href="{{url('blog-details')}}">
											<img src="{{ URL::asset('/assets/img/blog/blog-wrap-02.jpg')}}" alt="" class="img-fluid">
										</a>
									</div>
									<div class="lastest-blog-info">
										<div class="lastest-blog-date">
											<h4>13 <span>Feb 2022</span></h4>
										</div>
										<h4 class="latest-blog-title">
											<a href="{{url('blog-details')}}">What are the benefits of Online Doctor Booking?</a>
										</h4>
										<p>Surgery</p>
										<div class="lastest-post-author">
											<a href="{{url('doctor-profile')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="" class="me-2"> 
												<span>Dr. Darren Elder</span>
											</a>
										</div>
										<div class="lastest-blod-btn">
											<a href="{{url('blog-details')}}" class="btn btn-one">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="latest-blog-grid">
									<div class="latest-blog-img">
										<a href="{{url('blog-details')}}">
											<img src="{{ URL::asset('/assets/img/blog/blog-wrap-03.jpg')}}" alt="" class="img-fluid">
										</a>
									</div>
									<div class="lastest-blog-info">
										<div class="lastest-blog-date">
											<h4>05 <span>Mar 2022</span></h4>
										</div>
										<h4 class="latest-blog-title">
											<a href="{{url('blog-details')}}">Benefits of consulting with an Online Doctor</a>
										</h4>
										<p>Cardiology</p>
										<div class="lastest-post-author">
											<a href="{{url('doctor-profile')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg')}}" alt="" class="me-2"> 
												<span>Dr. Deborah Angel</span>
											</a>
										</div>
										<div class="lastest-blod-btn">
											<a href="{{url('blog-details')}}" class="btn btn-one">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 d-flex justify-content-between align-items-center">
						<div class="owl-nav slide-nav-7 nav-control"></div>
						<div class="float-end">
							<div class="text-end">
								<a href="{{url('blog-details')}}" class="btn btn-one">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Latest Blog Section -->

		<!-- News Letter Section -->
		<section class="news-letter-section">
			<div class="container">
				<div class="row">
					<div class="col-md-7 news-left aos" data-aos="fade-up">
						<div class="news-info">
							<h2>Subscribe to our <span>Newsletter</span></h2>
							<p>Subscribe today for our exclusive offers, latest news and updates about health care programs.</p>
						</div>
						<div class="news-info news-info-one">
							<form>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Enter Your Email Address">
								</div>
								<div class="form-group mb-0">
									<button type="submit" class="btn btn-one">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-5 aos" data-aos="fade-up">
						<div class="news-letter-img">
							<img src="{{ URL::asset('/assets/img/blog/news-letter-img.png')}}" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- News Letter Section -->

	   @endsection
	  