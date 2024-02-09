@extends('layout.mainlayout_admin')
@section('content')
@component('admin/components.page-header') 
@slot('li_1') Total Products @endslot            
@endcomponent
						
					<!-- Product List -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">Product List</h5>
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
													<form action="product-list">
														<p class="lab-title">Order By </p>
														<label class="custom_radio w-100">
															<input type="radio" name="sort">
															<span class="checkmark"></span> ID
														</label>
														<label class="custom_radio w-100">
															<input type="radio" name="sort">
															<span class="checkmark"></span> Amount
														</label>
														<label class="custom_radio w-100 mb-4">
															<input type="radio" name="sort">
															<span class="checkmark"></span> Date Created
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
												   <th>ID</th>
												   <th>Product</th>
												   <th>Category</th>
												   <th>Date</th>
												   <th>Amount</th>
												   <th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#4546</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/products/product1.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><span>Safi Natural Blood Purifier</span> <span>Syrup 200 ml</span></a>
														</h2>
													</td>
													<td>Neuromodulation</td>
													<td>12/20/2022</td>
													<td>$330.00</td>
													<td class="text-end">
														<div class="actions">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="text-black">
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
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/products/product2.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><span>Benadrys Cough Syrup </span> <span>100 ml</span></a>
														</h2>
													</td>
													<td>Interventional devices</td>
													<td>12/20/2022</td>
													<td>$330.00</td>
													<td class="text-end">
														<div class="actions">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="text-black">
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
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/products/product3.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><span>Natural Syrup for bronchtas</span> <span>200 ml</span></a>
														</h2>
													</td>
													<td>Ventricular assist devices</td>
													<td>12/20/2022</td>
													<td>$330.00</td>
													<td class="text-end">
														<div class="actions">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="text-black">
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
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/products/product4.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><span>Safi Natural Blood Purifier</span> <span>Syrup 200 ml</span></a>
														</h2>
													</td>
													<td>surgical systems</td>
													<td>12/20/2022</td>
													<td>$330.00</td>
													<td class="text-end">
														<div class="actions">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="text-black">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#5656</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/products/product5.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><span>Headache pills</span> <span>20 tablets</span></a>
														</h2>
													</td>
													<td>Assist devices</td>
													<td>12/20/2022</td>
													<td>$330.00</td>
													<td class="text-end">
														<div class="actions">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="text-black">
																<i class="feather-edit-3 me-1"></i> Edit
															</a>
															<a class="text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
																<i class="feather-trash-2 me-1"></i> Delete
															</a>															
														</div>
													</td>
												</tr>
												<tr>
													<td>#4145</td>
													<td>
														<h2 class="table-avatar">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><img class="avatar avatar-img" src="{{ URL::asset('/assets_admin/img/products/product6.jpg')}}" alt="User Image"></a>
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal"><span>Natura ayurvedic medicine</span> <span>15 pils</span></a>
														</h2>
													</td>
													<td>Ventricular systems</td>
													<td>12/20/2022</td>
													<td>$330.00</td>
													<td class="text-end">
														<div class="actions">
															<a href="#" data-bs-toggle="modal" data-bs-target="#editModal" class="text-black">
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
					<!-- /Product List -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup') 
@endcomponent
 		
@endsection