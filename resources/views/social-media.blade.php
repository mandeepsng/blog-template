@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Social Media @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') Social Media @endslot
@endcomponent

			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Dr. Darren Elder</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="{{url('doctor-dashboard')}}">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="{{url('appointments')}}">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li>
												<a href="{{url('my-patients')}}">
													<i class="fas fa-user-injured"></i>
													<span>My Patients</span>
												</a>
											</li>
											<li>
												<a href="{{url('schedule-timings')}}">
													<i class="fas fa-hourglass-start"></i>
													<span>Schedule Timings</span>
												</a>
											</li>
											<li>
												<a href="{{url('available-timings')}}">
													<i class="fas fa-clock"></i>
													<span>Available Timings</span>
												</a>
											</li>
											<li>
												<a href="{{url('invoices')}}">
													<i class="fas fa-file-invoice"></i>
													<span>Invoices</span>
												</a>
											</li>
											<li>
												<a href="{{url('accounts')}}">
													<i class="fas fa-file-invoice-dollar"></i>
													<span>Accounts</span>
												</a>
											</li>
											<li>
												<a href="{{url('reviews')}}">
													<i class="fas fa-star"></i>
													<span>Reviews</span>
												</a>
											</li>
											<li>
												<a href="{{url('chat-doctor')}}">
													<i class="fas fa-comments"></i>
													<span>Message</span>
													<small class="unread-msg">23</small>
												</a>
											</li>
											<li>
												<a href="{{url('doctor-profile-settings')}}">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li class="active">
												<a href="{{url('social-media')}}">
													<i class="fas fa-share-alt"></i>
													<span>Social Media</span>
												</a>
											</li>
											<li>
												<a href="{{url('doctor-change-password')}}">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="{{url('index')}}">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
								
									<!-- Social Form -->
									<form>                                                                                           
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Facebook URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Twitter URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Instagram URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Pinterest URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Linkedin URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Youtube URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="submit-section">
											<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
										</div>
									</form>
									<!-- /Social Form -->
									
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
            </div>
             
@endsection