@extends('layout.mainlayout_admin')
@section('content')	
@component('admin/components.page-header') 
    @slot('li_1') Specialities @endslot            
@endcomponent

					
					<!-- Specialities -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Specialities</h5>
										</div>
										<div class="col-auto d-flex flex-wrap">
											<div class="form-custom me-2">
												<div id="tableSearch"  class="dataTables_wrapper"></div>
											</div>
											<div class="SortBy">
												<div class="selectBoxes order-by">
													<p class="mb-0"><img src="{{ URL::asset('/assets_admin/img/icon/sort.png')}}" class="me-2" alt="icon"> Order by </p>
													<span class="down-icon"><i class="feather-chevron-down"></i></span>
												</div>						  
												<div id="checkBox">
													<form action="specialities">
														<p class="lab-title">Order By </p>
														<label class="custom_radio w-100">
															<input type="radio" name="order">
															<span class="checkmark"></span> ID
														</label>
														<label class="custom_radio w-100 mb-4">
															<input type="radio" name="order">
															<span class="checkmark"></span> Date Modified
														</label>
														<p class="lab-title">Sort By</p>
														<label class="custom_radio w-100">
															<input type="radio" name="sort">
															<span class="checkmark"></span> Ascending
														</label>
														<label class="custom_radio w-100 mb-4">
															<input type="radio" name="sort">
															<span class="checkmark"></span> Descending
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
												   <th>SID</th>
												   <th>Product</th>
												   <th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="spl-img"><img src="{{ URL::asset('/assets_admin/img/icon/urology.png')}}" class="img-fluid" alt="User Image"></a>
															<a href="#"><span>Urology</span></a>
														</h2>
													</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-black" href="#" data-bs-toggle="modal" data-bs-target="#editModal">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#8774</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="spl-img"><img src="{{ URL::asset('/assets_admin/img/icon/neurology.png')}}" class="img-fluid" alt="User Image"></a>
															<a href="#"><span>Neurology</span></a>
														</h2>
													</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-black" href="#" data-bs-toggle="modal" data-bs-target="#editModal">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="spl-img"><img src="{{ URL::asset('/assets_admin/img/icon/ortho.png')}}" class="img-fluid" alt="User Image"></a>
															<a href="#"><span>Orthopedic</span></a>
														</h2>
													</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-black" href="#" data-bs-toggle="modal" data-bs-target="#editModal">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="spl-img"><img src="{{ URL::asset('/assets_admin/img/icon/cardio.png')}}" class="img-fluid" alt="User Image"></a>
															<a href="#"><span>Cardiologist</span></a>
														</h2>
													</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-black" href="#" data-bs-toggle="modal" data-bs-target="#editModal">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="spl-img"><img src="{{ URL::asset('/assets_admin/img/icon/dental.png')}}" class="img-fluid" alt="User Image"></a>
															<a href="#"><span>Dentist</span></a>
														</h2>
													</td>
													<td class="text-end">
														<div class="actions">
															<a class="text-black" href="#" data-bs-toggle="modal" data-bs-target="#editModal">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
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
					<!-- /Specialities -->
				</div>
			</div>
			<!-- /Page Wrapper -->
		</div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup') 
@endcomponent
	
@endsection