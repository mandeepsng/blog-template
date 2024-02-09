@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Membership @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') Membership @endslot
@endcomponent
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						
						<!-- Profile Sidebar -->
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="{{ URL::asset('/assets/img/patients/patient.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Richard Wilson</h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
												<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="{{url('patient-dashboard')}}">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="{{url('favourites')}}">
													<i class="fas fa-bookmark"></i>
													<span>Favourites</span>
												</a>
											</li> 
											<li>
												<a href="{{url('dependent')}}">
													<i class="fas fa-users"></i>
													<span>Dependent</span>
												</a>
											</li> 
											<li>
												<a href="{{url('chat')}}">
													<i class="fas fa-comments"></i>
													<span>Message</span>
													<small class="unread-msg">23</small>
												</a>
											</li>
                                            <li>
												<a href="{{url('patient-accounts')}}">
													<i class="fas fa-file-invoice-dollar"></i>
													<span>Accounts</span>
												</a>
											</li>
											<li>
												<a href="{{url('orders-list')}}">
													<i class="fas fa-list-alt"></i>
													<span>Orders</span>
                                                    <small class="unread-msg">7</small>
												</a>
											</li>
											<li>
												<a href="{{url('medical-records')}}">
													<i class="fas fa-clipboard"></i>
													<span>Add Medical Records</span>
												</a>
											</li>
											<li>
												<a href="{{url('medical-details')}}">
													<i class="fas fa-file-medical-alt"></i>
													<span>Medical Details</span>
												</a>
											</li>
											<li>
												<a href="{{url('profile-settings')}}">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="{{url('change-password')}}">
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
						</div>
						<!-- / Profile Sidebar -->
						
						<div class="col-md-7 col-lg-8 col-xl-9">

							<div class="row">
								<div class="col-sm-12">
									<div class="card">
                                        <div class="card-body">
                                            <div class="card card-table mb-0">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-center mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Plan Name</th>
                                                                    <th>Type</th>
                                                                    <th class="text-center">Amount</th>
                                                                    <th>Start Date</th>
                                                                    <th>End Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Monthly Plan</td>
                                                                    <td>Month</td>
                                                                    <td class="text-center">$150</td>
                                                                    <td>11 Nov 2019</td>
                                                                    <td>11 Dec 2019</td>
                                                                </tr>
																<tr>
                                                                    <td>2</td>
                                                                    <td>Yearly plan</td>
                                                                    <td>Year</td>
                                                                    <td class="text-center">$950</td>
                                                                    <td>11 Nov 2019</td>
                                                                    <td>10 Nov 2020</td>
                                                                </tr>
																<tr>
                                                                    <td>3</td>
                                                                    <td>Whole Body Check</td>
                                                                    <td>Month</td>
                                                                    <td class="text-center">$100</td>
                                                                    <td>11 Nov 2019</td>
                                                                    <td>11 Dec 2019</td>
                                                                </tr>
																<tr>
                                                                    <td>4</td>
                                                                    <td>Child Health Check</td>
                                                                    <td>Month</td>
                                                                    <td class="text-center">$100</td>
                                                                    <td>11 Nov 2019</td>
                                                                    <td>11 Dec 2019</td>
                                                                </tr>
																<tr>
                                                                    <td>5</td>
                                                                    <td>Senior citizen Health Check</td>
                                                                    <td>Month</td>
                                                                    <td class="text-center">$105</td>
                                                                    <td>11 Nov 2019</td>
                                                                    <td>11 Dec 2019</td>
                                                                </tr>
																<tr>
                                                                    <td>6</td>
                                                                    <td>Personalized Health Check</td>
                                                                    <td>Month</td>
                                                                    <td class="text-center">$105</td>
                                                                    <td>11 Nov 2019</td>
                                                                    <td>11 Dec 2019</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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

			</div>		
			<!-- /Page Content -->
			
@endsection