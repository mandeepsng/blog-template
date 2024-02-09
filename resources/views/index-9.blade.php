<?php $page="index-9";?>
@extends('layout.mainlayout_index8')
@section('content')	
<!-- Home Banner -->
			<section class="home-search-section">
				<div class="container">
                    <div class="wrapper-content">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="doctor-search">
                                    <div class="banner-header aos" data-aos="fade-up">
                                        <h2>Search Doctor, <br> <span class="highlighter">Make an Appointment</span></h2>
                                    </div>
                                    <div class="doctor-form aos" data-aos="fade-up">
                                        <form action="#" class="doctor-search-form">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="form-custom">
                                                            <input type="text" class="form-control" value="" placeholder="Location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-custom">
                                                            <input type="text" class="form-control" value="" placeholder="Gender">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-custom">
                                                            <select class="form-select form-control">
                                                                <option>Select Department</option>
                                                                <option>Pharmacy</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="{{url('search')}}" class="btn banner-btn mt-3">MAKE APPOINTMENT</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 aos" data-aos="fade-up">
                                <img src="{{ URL::asset('/assets/img/doctor-banner1.png')}}" class="img-fluid dr-img" alt="" >
                            </div>
                        </div>
                    </div>
				</div>
			</section>
			<!-- /Home Banner -->

            <!-- Facilities Sections-->
			<section class="facility-section">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7 col-md-6 aos" data-aos="fade-up">
							<img src="{{ URL::asset('/assets/img/shapes/blog-img01.png')}}" alt="" class="operat-img" />
						</div>
						<div class="col-lg-5 col-md-6">
							<div class="visit-doctor aos" data-aos="fade-up">
								<div class="inner-details">
									<div class="count">
										<h1>01</h1>
									</div>
									<div class="info">
										<h1>Visit a Doctor</h1>
										<p>We hire the best specialists to deliver top-notch diagnostic services for you.</p>
										<a href="{{url('booking')}}">Book Now <i class="fas fa-long-arrow-alt-right"></i> </a>
									</div>
									<img src="{{ URL::asset('/assets/img/icons/visit-01.png')}}" alt="" />
								</div>
							</div>
							<div class="visit-doctor aos" data-aos="fade-up">
								<div class="inner-details pharmacy">
									<div class="count">
										<h1>02</h1>
									</div>
									<div class="info">
										<h1>Find a Pharmacy</h1>
										<p>We provide the a wide range of medical services.</p>
										<a href="{{url('booking')}}">Book Now <i class="fas fa-long-arrow-alt-right"></i> </a>
									</div>
									<img src="{{ URL::asset('/assets/img/icons/visit-02.png')}}" alt="" />
								</div>
							</div>
							<div class="visit-doctor aos" data-aos="fade-up">
								<div class="inner-details lab">
									<div class="count">
										<h1>03</h1>
									</div>
									<div class="info">
										<h1>Find a Lab</h1>
										<p>We hire the best specialists to deliver top-notch diagnostic services for you.</p>
										<a href="{{url('booking')}}">Book Now <i class="fas fa-long-arrow-alt-right"></i> </a>
									</div>
									<img src="{{ URL::asset('/assets/img/icons/visit-03.png')}}" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Facilities Sections-->

			<!-- Clinic & Speciality-->
			<section class="clinic-speciality">
				<div class="container">
					<div class="row heading-wrapper">
						<div class="col-md-6 aos" data-aos="fade-up">
							<h1>Clinic & Specialities</h1>
						</div>
						<div class="col-md-6 text-end aos" data-aos="fade-up">
							<a href="{{url('doctor-profile')}}" class="nav-arrow"><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-lg-3 aos" data-aos="fade-up">
							<div class="clinic-wrap">
								<div class="clinic-img">
									<img src="{{ URL::asset('/assets/img/shapes/clinic-bg.png')}}" alt="" />
								</div>
								<div class="wrapper-overlay">
									<img src="{{ URL::asset('/assets/img/icons/clinic-hover-01.png')}}" alt="" />
									<h3>Orthopedic</h3>
									<div class="row row-sm">
										<div class="col-6">
											<p>124 <span>Doctors</span></p>
										</div>
										<div class="col-6">
											<p class="blue">24 <span>Clinics</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-3 aos" data-aos="fade-up">
							<div class="clinic-wrap">
								<div class="clinic-img">
									<img src="{{ URL::asset('/assets/img/shapes/clinic-bg.png')}}" alt="" />
								</div>
								<div class="wrapper-overlay">
									<img src="{{ URL::asset('/assets/img/icons/clinic-hover-06.png')}}" alt="" />
									<h3>Laboratry</h3>
									<div class="row row-sm">
										<div class="col-6">
											<p>124 <span>Doctors</span></p>
										</div>
										<div class="col-6">
											<p class="blue">24 <span>Clinics</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-3 aos" data-aos="fade-up">
							<div class="clinic-wrap">
								<div class="clinic-img">
									<img src="{{ URL::asset('/assets/img/shapes/clinic-bg.png')}}" alt="" />
								</div>
								<div class="wrapper-overlay">
									<img src="{{ URL::asset('/assets/img/icons/clinic-hover-04.png')}}" alt="" />
									<h3>Neurology</h3>
									<div class="row row-sm">
										<div class="col-6">
											<p>124 <span>Doctors</span></p>
										</div>
										<div class="col-6">
											<p class="blue">24 <span>Clinics</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-3 aos" data-aos="fade-up">
							<div class="clinic-wrap">
								<div class="clinic-img">
									<img src="{{ URL::asset('/assets/img/shapes/clinic-bg.png')}}" alt="" />
								</div>
								<div class="wrapper-overlay">
									<img src="{{ URL::asset('/assets/img/icons/cardiology.png')}}" alt="" />
									<h3>Cardiology</h3>
									<div class="row row-sm">
										<div class="col-6">
											<p>124 <span>Doctors</span></p>
										</div>
										<div class="col-6">
											<p class="blue">24 <span>Clinics</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Clinic & Speciality-->

			<!-- browse speciality-->
			<section class="browse-section brower-category">
				<div class="container">					
					<div class="row heading-wrapper">
						<div class="col-md-6 aos" data-aos="fade-up">
							<h1>Browse by Specialities</h1>
						</div>
						<div class="col-md-6 text-end aos" data-aos="fade-up">
							<a href="{{url('doctor-profile')}}" class="nav-arrow"><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-01.png')}}" alt=""/>
									</div>
									<h4>Urology</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-02.png')}}" alt=""/>
									</div>
									<h4>Neurology</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-03.png')}}" alt=""/>
									</div>
									<h4>Orthopedic</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-04.png')}}" alt=""/>
									</div>
									<h4>Cardiologist</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-01.png')}}" alt=""/>
									</div>
									<h4>Dentist</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-05.png')}}" alt=""/>
									</div>
									<h4>Heart surgery</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-01.png')}}" alt=""/>
									</div>
									<h4>Urology</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-02.png')}}" alt=""/>
									</div>
									<h4>Neurology</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-03.png')}}" alt=""/>
									</div>
									<h4>Orthopedic</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-04.png')}}" alt=""/>
									</div>
									<h4>Cardiologist</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-01.png')}}" alt=""/>
									</div>
									<h4>Dentist</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
							<div class="brower-box">
								<div>
									<div class="brower-img">
										<img src="{{ URL::asset('/assets/img/shapes/bro-05.png')}}" alt=""/>
									</div>
									<h4>Heart surgery</h4>
									<p>124 <span>Doctors</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /browse speciality-->

			<!-- Doctor Section-->
			<section class="doctor-divison provider-select">
				<div class="d-flex">
					<div class="doc-background aos" data-aos="fade-up">
						<h3>ARE YOU A DOCTOR?</h3>
						<p>The service allows you to get maximum visibility online and to manage appointments and contacts coming from the site, in a simple and fast way.</p>
						<a href="{{url('booking')}}" class="doc-bok-btn">Book Now</a>
					</div>
					<div class="pat-background aos" data-aos="fade-up">
						<h3>ARE YOU A PATIENT?</h3>
						<p>The service allows you to get maximum visibility online and to manage appointments and contacts coming from the site, in a simple and fast way.</p>
						<a href="{{url('booking')}}" class="doc-bok-btn">Book Now</a>
					</div>
				</div>
			</section>
			<!-- /Doctor Section-->

			<!-- Book Doctors-->
			<section class="book-doctor doc-booking">
				<div class="container">					
					<div class="row heading-wrapper">
						<div class="col-md-12 aos" data-aos="fade-up">
							<h1>Book Our Best Doctor</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 aos" data-aos="fade-up">
							<div class="book-slider slider">
								<div class="profile-widget">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doc-05.jpg')}}" alt="" />
									</a>
									<div class="pro-content">
										<div  class="row row-sm">	
											<div class="col-md-6">							
												<span class="amt">$20 - $50</span>
											</div>
										</div>
										<div class="provider-info">
											<h3><a href="{{url('doctor-profile')}}">Dr. Marvin Paul</a></h3>
											<h5>PSICOLOGIST </h5>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">3.5</span>
											</div>
											<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
								<div class="profile-widget">
									<a href="{{url('doctor-profile')}}">
										<img src="{{ URL::asset('/assets/img/doctors/book-doc-04.jpg')}}" alt="" />
									</a>
									<div class="pro-content">
										<div  class="row row-sm">	
											<div class="col-md-6">							
												<span class="amt">$20 - $50</span>
											</div>
										</div>
										<div class="provider-info">
											<h3><a href="{{url('doctor-profile')}}">Dr. Linda Tobin</a></h3>
											<h5>PSICOLOGIST </h5>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">3.5</span>
											</div>
											<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
								<div class="profile-widget">
									<a href="#">
										<img src="{{ URL::asset('/assets/img/doctors/book-doc-03.jpg')}}" alt="" />
									</a>
									<div class="pro-content">
										<div  class="row row-sm">	
											<div class="col-md-6">							
												<span class="amt">$20 - $50</span>
											</div>
										</div>
										<div class="provider-info">
											<h3><a href="{{url('doctor-profile')}}">Dr. Paul Richard</a></h3>
											<h5>PSICOLOGIST </h5>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">3.5</span>
											</div>
											<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
								<div class="profile-widget">
									<a href="#">
										<img src="{{ URL::asset('/assets/img/doctors/book-doc-01.jpg')}}" alt="" />
									</a>
									<div class="pro-content">
										<div  class="row row-sm">	
											<div class="col-md-6">							
												<span class="amt">$20 - $50</span>
											</div>
										</div>
										<div class="provider-info">
											<h3><a href="{{url('doctor-profile')}}">Dr. Ruby Perrin</a></h3>
											<h5>PSICOLOGIST </h5>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">3.5</span>
											</div>
											<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
								<div class="profile-widget">
									<a href="#">
										<img src="{{ URL::asset('/assets/img/doctors/book-doc-02.jpg')}}" alt="" />
									</a>
									<div class="pro-content">
										<div  class="row row-sm">	
											<div class="col-md-6">							
												<span class="amt">$20 - $50</span>
											</div>
										</div>
										<div class="provider-info">
											<h3><a href="{{url('doctor-profile')}}">Dr. Darren Elder</a></h3>
											<h5>PSICOLOGIST </h5>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">3.5</span>
											</div>
											<a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Book Doctors-->

			<!-- Blog Section-->
			<section class="blogs-section blog-container">
				<div class="container">	
					<div class="row heading-wrapper">
						<div class="col-md-6 aos" data-aos="fade-up">
							<h1>Our Latest Blog</h1>
						</div>
						<div class="col-md-6 text-end aos" data-aos="fade-up">
							<a href="{{url('blog-list')}}" class="nav-arrow"><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>		
					<div class="row">						
						<div class="col-md-6 col-lg-3 aos" data-aos="fade-up">
							<div class="blog-wrapper">
								<div class="wrap-image">
									<a href="{{url('blog-details')}}">
										<img src="{{ URL::asset('/assets/img/blog/blog-wrap-03.jpg')}}" alt="" />
									</a>
								</div>
								<div class="wrap-content">
									<p class="date-cart">25 <span>Jan 2021</span></p>
									<div class="d-flex">
										<div class="post-author">
											<a href="{{url('doctor-profile')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="Post Author"> 
												<span>Ruby Perrin</span>
											</a>
										</div>
									</div>
									<div class="wrap-content-body">
										<h3><a href="{{url('blog-details')}}">Doccure – Making your clinic painless visit?</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										<span class="sp-title">Urology</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 aos" data-aos="fade-up">
							<div class="blog-wrapper">
								<div class="wrap-image">
									<a href="{{url('blog-details')}}">
										<img src="{{ URL::asset('/assets/img/blog/blog-wrap-02.jpg')}}" alt="" />
									</a>
								</div>
								<div class="wrap-content">
									<div class="d-flex">
										<div class="post-author">
											<a href="{{url('doctor-profile')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="Post Author"> 
												<span>Ruby Perrin</span>
											</a>
										</div>
										<p class="date-cart">25 <span>Jan 2021</span></p>
									</div>
									<div class="wrap-content-body">
										<h3><a href="{{url('blog-details')}}">Doccure – Making your clinic painless visit?</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										<span class="sp-title">Urology</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 aos" data-aos="fade-up">
							<div class="blog-wrapper">
								<div class="wrap-image">
									<a href="{{url('blog-details')}}">
										<img src="{{ URL::asset('/assets/img/blog/blog-wrap-04.jpg')}}" alt="" />
									</a>
								</div>
								<div class="wrap-content">
									<div class="d-flex">
										<div class="post-author">
											<a href="{{url('doctor-profile')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="Post Author"> 
												<span>Ruby Perrin</span>
											</a>
										</div>
										<p class="date-cart">25 <span>Jan 2021</span></p>
									</div>
									<div class="wrap-content-body">
										<h3><a href="{{url('blog-details')}}">Doccure – Making your clinic painless visit?</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										<span class="sp-title">Urology</span>
									</div>
								</div>
							</div>
						</div>						
						<div class="col-md-6 col-lg-3 aos" data-aos="fade-up">
							<div class="blog-wrapper">
								<div class="wrap-image">
									<a href="{{url('blog-details')}}">
										<img src="{{ URL::asset('/assets/img/blog/blog-wrap-01.jpg')}}" alt="" />
									</a>
								</div>
								<div class="wrap-content">
									<div class="d-flex">
										<div class="post-author">
											<a href="{{url('doctor-profile')}}">
												<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="Post Author"> 
												<span>Ruby Perrin</span>
											</a>
										</div>
										<p class="date-cart">25 <span>Jan 2021</span></p>
									</div>
									<div class="wrap-content-body">
										<h3><a href="{{url('blog-details')}}">Doccure – Making your clinic painless visit?</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										<span class="sp-title">Urology</span>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</section>
			<!-- /Blog Section-->	
	
@endsection
	  