<?php $page="ratings";?>
@extends('layout.mainlayout_admin')
@section('content')
@component('admin/components.page-header') 
    @slot('li_1') Total Ratings @endslot
    @slot('li_2') Order by @endslot               
@endcomponent


					<!-- Ratings -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Ratings</h5>
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
													<form action="ratings">
														<p class="lab-title">Ratings</p>
														<label class="custom_check w-100">
															<input type="checkbox" name="year" checked>
															<span class="checkmark"></span> 5
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="year">
															<span class="checkmark"></span> 4
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="year">
															<span class="checkmark"></span> 3
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="year">
															<span class="checkmark"></span> 2
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="year">
															<span class="checkmark"></span> 1
														</label>
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
												   <th>Doctor</th>
												   <th>Consultation Date</th>
												   <th class="desc-info">Ratings</th>
												   <th>Description</th>
												   <th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="#" class="text-black" data-bs-toggle="modal" data-bs-target="#Ratings">#4546</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-07.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Bess Twishes</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name"><span class="text-muted">Dr. Rayan</span> <span class="tab-subtext">Gyanoclogist</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>
														<div class="ratings">
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star"></i>
														</div>
													</td>
													<td class="desc-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="#" class="text-black" data-bs-toggle="modal" data-bs-target="#Ratings">#8774</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-12.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Bess Twishes</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name"><span class="text-muted">Dr. Monroe</span> <span class="tab-subtext">Hair Specialities</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>
														<div class="ratings">
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star"></i>
														</div>
													</td>
													<td class="desc-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="#" class="text-black" data-bs-toggle="modal" data-bs-target="#Ratings">#4546</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Abdul Aziz Lazis</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name"><span class="text-muted">Dr. Lester</span> <span class="tab-subtext">Orthopaedics</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>
														<div class="ratings">
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star"></i>
														</div>
													</td>
													<td class="desc-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="#" class="text-black" data-bs-toggle="modal" data-bs-target="#Ratings">#4546</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Alex Siauw</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="empty-user" href="{{url('admin/profile')}}"><i class="feather-user"></i> </a>
															<a href="#" class="user-name"><span class="text-muted">Dr. Clint</span> <span class="tab-subtext">Neurology</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>
														<div class="ratings">
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star"></i>
														</div>
													</td>
													<td class="desc-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="#" class="text-black" data-bs-toggle="modal" data-bs-target="#Ratings">#4546</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-04.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Dr. Sofia Brient</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name"><span class="text-muted">Dr. Lester</span> <span class="tab-subtext">Orthopaedics</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>
														<div class="ratings">
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star"></i>
														</div>
													</td>
													<td class="desc-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="#" class="text-black" data-bs-toggle="modal" data-bs-target="#Ratings">#4546</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-11.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Deborah</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="empty-user" href="{{url('admin/profile')}}"><i class="feather-user"></i> </a>
															<a href="#" class="user-name"><span class="text-muted">Dr. Clint</span> <span class="tab-subtext">Neurology</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>
														<div class="ratings">
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star"></i>
														</div>
													</td>
													<td class="desc-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="#" class="text-black" data-bs-toggle="modal" data-bs-target="#Ratings">#4546</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-03.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Sofia</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="avatar-pos" href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}" class="user-name"><span class="text-muted">Dr. Richard</span> <span class="tab-subtext">Orthopaedics</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>
														<div class="ratings">
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star"></i>
														</div>
													</td>
													<td class="desc-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="#" class="text-black" data-bs-toggle="modal" data-bs-target="#Ratings">#4546</a></td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/profiles/avatar-13.jpg')}}" alt="User Image"></a>
															<a href="{{url('admin/profile')}}"><span class="user-name">Paul</span></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a class="empty-user" href="{{url('admin/profile')}}"><i class="feather-user"></i> </a>
															<a href="#" class="user-name"><span class="text-muted">Dr. Clint</span> <span class="tab-subtext">Neurology</span></a>
														</h2>
													</td>
													<td><span class="user-name">26 November 2022 </span><span class="d-block">12/20/2022</span></td>
													<td>
														<div class="ratings">
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star filled"></i>
															<i class="far fa-star"></i>
														</div>
													</td>
													<td class="desc-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2"></i> Delete
															</a>															
														</div>
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
					<!-- /Ratings -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
			
			
		</div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup') 
@endcomponent	
	
@endsection