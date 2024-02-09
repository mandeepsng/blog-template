@extends('layout.mainlayout_admin')
@section('content')	
@component('admin/components.page-header') 
    @slot('li_1') Total Patients @endslot
    @slot('li_2') Order by @endslot               
@endcomponent
					
					<!-- Patients List -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Patients</h5>
										</div>
										<div class="col-auto custom-list d-flex">
											<div class="form-custom me-2">
												<div id="tableSearch"  class="dataTables_wrapper"></div>
											</div>
											<div class="multipleSelection">
												<div class="selectBox">
													<p class="mb-0"><i class="feather-filter me-1"></i> Filter </p>
													<span class="down-icon"><i class="feather-chevron-down"></i></span>
												</div>						  
												<div id="checkBoxes">
													<form action="patient-list">
														<p class="lab-title">By Account status</p>
														<div class="selectBox-cont">
															<label class="custom_check w-100">
																<input type="checkbox" name="acc" checked>
																<span class="checkmark"></span> Enabled
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="acc">
																<span class="checkmark"></span> Disabled
															</label>
															<p class="lab-title">By Blood Type</p>
															<label class="custom_check w-100">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> AB+
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> O-
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> B-
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> A+
															</label>
															<label class="custom_check w-100 mb-4">
																<input type="checkbox" name="year">
																<span class="checkmark"></span> B+
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
												   <th>Patient</th>
												   <th>Last Visit</th>
												   <th>Blood group</th>
												   <th>Total Income</th>
												   <th>Account Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-07.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><span class="user-name">Bess Twishes</span> <span class="text-muted">Male, 40 Years Old</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>AB+</td>
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
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-04.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><span class="user-name">Bess Twishes</span> <span class="text-muted">Female,30 Years Old</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>B+</td>
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
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><span class="user-name">Abdul Aziz Lazis</span> <span class="text-muted">Male, 25 Years Old</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>O-</td>
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
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><span class="user-name">Alex Siauw</span> <span class="text-muted">Male, 29 Years Old</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>A+</td>
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
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-13.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><span class="user-name">Gobbs Siauw</span> <span class="text-muted">Male, 29 Years Old</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>B+</td>
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
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-11.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><span class="user-name">Deborah</span> <span class="text-muted">Male, 29 Years Old</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>AB+</td>
													<td>$300.00</td>
													<td>
														<label class="toggle-switch" for="status5">
															<input type="checkbox" class="toggle-switch-input" id="status5" checked>
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
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-03.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><span class="user-name">Sofia</span> <span class="text-muted">Male, 29 Years Old</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>A+</td>
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
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-13.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-target="#patientlist" data-bs-toggle="modal"><span class="user-name">Paul</span> <span class="text-muted">Male, 29 Years Old</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>O-</td>
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
					<!-- /Patient List -->
				</div>
			</div>
			<!-- /Page Wrapper -->
		</div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup') 
@endcomponent 
			
@endsection