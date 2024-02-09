
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Medical Details @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') Medical Details @endslot
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
											<li class="active">
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
                                        <div class="card-header">
                                            <h4 class="card-title float-start">Medical details</h4>
                                            <a href="{{url('#modal_medical_form')}}" class="btn btn-primary float-end" data-bs-toggle="modal">Add Details</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card card-table mb-0">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-center mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Name</th>
                                                                    <th>BMI</th>
                                                                    <th class="text-center">Heart Rate</th>
                                                                    <th class="text-center">FBC Status</th>
                                                                    <th>Weight</th>
                                                                    <th>Order date</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Richard Wilson</td>
                                                                    <td>23.7</td>
                                                                    <td class="text-center">89</td>
                                                                    <td class="text-center">140</td>
                                                                    <td>74Kg</td>
                                                                    <td>11 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
                                                                    <td>
                                                                        <div class="table-action">
                                                                            <a href="{{url('#edit_medical_form')}}" class="btn btn-sm bg-info-light" data-bs-toggle="modal">
                                                                                <i class="fas fa-edit"></i> Edit
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-trash-alt"></i> Delete
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Champagne</td>
                                                                    <td>25.2</td>
                                                                    <td class="text-center">92</td>
                                                                    <td class="text-center">135</td>
                                                                    <td>73Kg</td>
                                                                    <td>3 Nov 2019 <span class="d-block text-info">11.00 AM</span></td>
                                                                    <td>
                                                                        <div class="table-action">
                                                                            <a href="{{url('#edit_medical_form')}}" class="btn btn-sm bg-info-light" data-bs-toggle="modal">
                                                                                <i class="fas fa-edit"></i> Edit
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-trash-alt"></i> Delete
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Vena</td>
                                                                    <td>24.5</td>
                                                                    <td class="text-center">90</td>
                                                                    <td class="text-center">125</td>
                                                                    <td>73.5Kg</td>
                                                                    <td>1 Nov 2019 <span class="d-block text-info">1.00 PM</span></td>
                                                                    <td>
                                                                        <div class="table-action">
                                                                            <a href="{{url('#edit_medical_form')}}" class="btn btn-sm bg-info-light" data-bs-toggle="modal">
                                                                                <i class="fas fa-edit"></i> Edit
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-trash-alt"></i> Delete
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Tressie</td>
                                                                    <td>24.2</td>
                                                                    <td class="text-center">95</td>
                                                                    <td class="text-center">128</td>
                                                                    <td>10.2Kg</td>
                                                                    <td>30 Oct 2019 <span class="d-block text-info">9.00 AM</span></td>
                                                                    <td>
                                                                        <div class="table-action">
                                                                            <a href="{{url('#edit_medical_form')}}" class="btn btn-sm bg-info-light" data-bs-toggle="modal">
                                                                                <i class="fas fa-edit"></i> Edit
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-trash-alt"></i> Delete
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Christopher</td>
                                                                    <td>24.7</td>
                                                                    <td class="text-center">99</td>
                                                                    <td class="text-center">122</td>
                                                                    <td>12.8Kg</td>
                                                                    <td>28 Oct 2019 <span class="d-block text-info">6.00 PM</span></td>
                                                                    <td>
                                                                        <div class="table-action">
                                                                            <a href="{{url('#edit_medical_form')}}" class="btn btn-sm bg-info-light" data-bs-toggle="modal">
                                                                                <i class="fas fa-edit"></i> Edit
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                <i class="fas fa-trash-alt"></i> Delete
                                                                            </a>
                                                                        </div>
                                                                    </td>
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
</div>
@component('components.modal-popup') 
@endcomponent 		

@endsection