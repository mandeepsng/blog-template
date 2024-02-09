<?php $page="calendar";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Calendar @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') Calendar @endslot
@endcomponent

			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						
						<!-- Calendar Events -->
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Drag & Drop Event</h4>
								</div>
								<div class="card-body">
									<div id="calendar-events" class="mb-3">
										<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle text-info"></i> My Event One</div>
										<div class="calendar-events" data-class="bg-success"><i class="fas fa-circle text-success"></i> My Event Two</div>
										<div class="calendar-events" data-class="bg-danger"><i class="fas fa-circle text-danger"></i> My Event Three</div>
										<div class="calendar-events" data-class="bg-warning"><i class="fas fa-circle text-warning"></i> My Event Four</div>
									</div>
									<div class="checkbox mb-3">
										<input id="drop-remove" type="checkbox">
										<label for="drop-remove">
											Remove after drop
										</label>
									</div>
									<a href="#" data-bs-toggle="modal" data-bs-target="#add_new_event" class="btn btn-primary d-flex justify-content-center w-100">
										<i class="fas fa-plus m-1"></i> Add Category
									</a>
								</div>
							</div>
						</div>
						<!-- /Calendar Events -->
						
						<!-- Calendar -->
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									<div id="calendar"></div>
								</div>
							</div>
						</div>
						<!-- /Calendar -->
						
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
            </div>
@component('components.modal-popup') 
@endcomponent           
@endsection