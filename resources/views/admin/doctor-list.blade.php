@extends('layout.mainlayout_admin')
@section('content')	
@component('admin/components.page-header') 
    @slot('li_1') Doctors @endslot
    @slot('li_2') Order by @endslot               
@endcomponent

					<!-- Doctor List -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Doctors</h5>
										</div>
										<div class="col-auto d-flex flex-wrap">
											<div class="form-custom me-2">
												<div id="tableSearch"  class="dataTables_wrapper"></div>
											</div>
											<div class="multipleSelection">
												<div class="selectBox">
													<p class="mb-0 me-2"><i class="feather-filter me-1"></i> Filter By Speciality </p>
													<span class="down-icon"><i class="feather-chevron-down"></i></span>
												</div>						  
												<div id="checkBoxes">
													<form action="doctor-list">
														<p class="lab-title">Specialities</p>
														<div class="selectBox-cont">
															<label class="custom_check w-100">
																<input type="checkbox" name="year" checked>
																<span class="checkmark"></span> Urology
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> Neurology
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> Orthopedic
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> Cardiologist
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> Dentist
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> Gynacologist
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> Pediatrist
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> Orthopedic
															</label>
														</div>
														<button type="submit" class="btn w-100 btn-primary">Apply</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body p-0">				
									<div class="table-responsive">									
										<table class="datatable table table-borderless hover-table" id="data-table">
											<thead class="thead-light">
												<tr>
												   <th>ID</th>
												   <th>Doctor</th>
												   <th>Specialities</th>
												   <th>Member Since</th>
												   <th>Number of Appointments</th>
												   <th>Total Income</th>
												   <th>Account Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#doctorlist" data-bs-toggle="modal" class="user-name">Dr. Rayan</a>
														</h2>
													</td>
													<td>Gyanoclogist</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>545</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status1">
															<input type="checkbox" class="toggle-switch-input" id="status1">
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
												<tr>
													<td>#8774</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos"  href="#" data-bs-target="#doctorlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#doctorlist" data-bs-toggle="modal" class="user-name">Dr. Monroe</a>
														</h2>
													</td>
													<td>Hair Specialities</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>654</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status2">
															<input type="checkbox" class="toggle-switch-input" id="status2" checked>
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-07.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#doctorlist" data-bs-toggle="modal" class="user-name">Dr. Lester</a>
														</h2>
													</td>
													<td>Orthopaedics</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>787</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status3">
															<input type="checkbox" class="toggle-switch-input" id="status3" checked>
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a class="empty-user" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal"><i class="feather-user"></i> </a>
															<a href="#" data-bs-target="#doctorlist" data-bs-toggle="modal" class="user-name">Dr. Clint</a>
														</h2>
													</td>
													<td>Orthopaedics</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>454</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status4">
															<input type="checkbox" class="toggle-switch-input" id="status4" checked>
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
												<tr>
													<td>#3456</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-12.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#doctorlist" data-bs-toggle="modal" class="user-name">Dr. John</a>
														</h2>
													</td>
													<td>Neurologist</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>545</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status5">
															<input type="checkbox" class="toggle-switch-input" id="status5">
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
												<tr>
													<td>#4547</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-06.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#doctorlist" data-bs-toggle="modal" class="user-name">Dr. Linda</a>
														</h2>
													</td>
													<td>Gyanoclogist</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>545</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status5">
															<input type="checkbox" class="toggle-switch-input" id="status5">
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
												<tr>
													<td>#8775</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-04.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#doctorlist" data-bs-toggle="modal" class="user-name">Dr. Sofia Brient</a>
														</h2>
													</td>
													<td>Hair Specialities</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>654</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status6">
															<input type="checkbox" class="toggle-switch-input" id="status6" checked>
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
												<tr>
													<td>#7364</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#doctorlist" data-bs-toggle="modal" class="user-name">Dr. Richard</a>
														</h2>
													</td>
													<td>Cardiologist</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>654</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status7">
															<input type="checkbox" class="toggle-switch-input" id="status7" checked>
															<span class="toggle-switch-label">
																<span class="toggle-switch-indicator"></span>
															</span>
														</label>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							
							<div id="tablepagination"  class="dataTables_wrapper"></div>
						</div>
					</div>
					<!-- /Doctor List -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup') 
@endcomponent 

@endsection