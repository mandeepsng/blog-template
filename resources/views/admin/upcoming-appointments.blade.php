<?php $page="upcoming-appointments";?>
@extends('layout.mainlayout_admin')
@section('content')
@component('admin/components.page-header')                
@endcomponent
						
					<!-- Upcoming Appointments -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Upcoming Appointments</h5>
										</div>
										<div class="col-auto d-flex">
											<form action="upcoming-appointments">
												<div class="multipleSelection">
													<div class="selectBox">
														<p class="mb-0"><i class="feather-filter me-1"></i> Filter</p>
														<span class="down-icon"><i class="feather-chevron-down"></i></span>
													</div>						  
													<div id="checkBoxes">
														<div class="form-custom">
															<input type="text" class="form-control bg-grey" placeholder="Search by Patient">
															<i class="fas fa-search"></i>
														</div>
														<div class="form-custom">
															<input type="text" class="form-control bg-grey" placeholder="Search by Doctor">
															<i class="fas fa-search"></i>
														</div>
														<p class="lab-title">Consultation Type</p>
														<label class="custom_check w-100">
															<input type="checkbox" name="year">
															<span class="checkmark"></span> Video Call
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="year">
															<span class="checkmark"></span> Audio Call
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="year">
															<span class="checkmark"></span> Chat
														</label>
														<button type="submit" class="btn w-100 btn-primary">Apply</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="card-body p-0">				
									<div class="table-responsive">									
										<table class="datatable table table-borderless hover-table" id="data-tables">
											<thead class="thead-light">
												<tr>
												   <th>ID</th>
												   <th>Patient</th>
												   <th>Doctor</th>
												   <th>Disease</th>
												   <th>Consultation type</th>
												   <th>Date & Time</th>
												   <th>Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-07.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Bess Twishes</span> <span class="text-muted">Male, 40 Years Old</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name"><span class="text-muted">Dr. Rayan</span> <span class="tab-subtext">Gyanoclogist</span></a>
														</h2>
													</td>
													<td><span class="disease-name">Allergies & Asthma</span></td>
													<td class="status">
                                                        <span>Scheduled Appointment</span> 
                                                        <a class="d-block text-primary mt-2">
															<span class="d-flex align-items-center"><i class="feather-video me-2"></i> Video call</span>
														</a>
                                                    </td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$300.00</td>
												</tr>
												<tr>
													<td>#8774</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-04.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Bess Twishes</span> <span class="text-muted">Female,30 Years Old</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name"><span class="text-muted">Dr. Monroe</span> <span class="tab-subtext">Hair Specialities</span></a>
														</h2>
													</td>
													<td><span class="disease-name">Sleep Problem</span></td>
													<td class="status">
                                                        <span>Scheduled Appointment</span> 
                                                        <a class="d-block text-primary mt-2">
															<span class="d-flex align-items-center"><i class="feather-mic me-2"></i> Audio call</span>
														</a>
                                                    </td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$300.00</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Abdul Aziz Lazis</span> <span class="text-muted">Male, 25 Years Old</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name"><span class="text-muted">Dr. Lester</span> <span class="tab-subtext">Orthopaedics</span></a>
														</h2>
													</td>
													<td><span class="disease-name">Tooth Pain</span></td>
													<td class="status">
                                                        <span>Scheduled Appointment</span> 
                                                        <a class="d-block text-primary mt-2">
															<span class="d-flex align-items-center"><i class="feather-message-square me-2"></i> Chat</span>
														</a>
                                                    </td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$300.00</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Alex Siauw</span> <span class="text-muted">Male, 29 Years Old</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="empty-user" href="{{url('admin/profile')}}"><i class="feather-user"></i> </a>
															<a href="{{url('admin/profile')}}" class="user-name"><span class="text-muted">Dr. Clint</span> <span class="tab-subtext">Neurology</span></a>
														</h2>
													</td>
													<td><span class="disease-name">Pain  on knee</span></td>
													<td class="status">
                                                        <span>Scheduled Appointment</span> 
                                                        <a href="#" class="d-block text-primary mt-2">
															<span class="d-flex align-items-center"><i class="feather-mic me-2"></i> Audio Call</span>
														</a>
                                                    </td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$300.00</td>
												</tr>
												<tr>
													<td>#2323</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-13.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Gobbs Siauw</span> <span class="text-muted">Male, 40 Years Old</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-12.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name"><span class="text-muted">Dr. John</span> <span class="tab-subtext">Gyanoclogist</span></a>
														</h2>
													</td>
													<td><span class="disease-name">Allergies & Asthma</span></td>
													<td class="status">
                                                        <span>Scheduled Appointment</span> 
                                                        <a href="#" class="d-block text-primary mt-2">
															<span class="d-flex align-items-center"><i class="feather-video me-2"></i> Video call</span>
														</a>
                                                    </td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$300.00</td>
												</tr>
												<tr>
													<td>#8774</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-11.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Deborah</span> <span class="text-muted">Female,30 Years Old</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-06.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name"><span class="text-muted">Dr. Linda</span> <span class="tab-subtext">Hair Specialities</span></a>
														</h2>
													</td>
													<td><span class="disease-name">Sleep Problem</span></td>
													<td class="status">
                                                        <span>Scheduled Appointment</span> 
                                                        <a href="#" class="d-block text-primary mt-2">
															<span class="d-flex align-items-center"><i class="feather-mic me-2"></i> Audio call</span>
														</a>
                                                    </td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>$300.00</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							
							<div id="tablepagination"  class="dataTables_wrapper"></div>
						</div>
					</div>
					<!-- /Upcoming Appointments -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
	
@endsection