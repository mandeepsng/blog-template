<?php $page="sms-gateway";?>
@extends('layout.mainlayout_admin')
@section('content')
@component('admin/components.settings')                
@endcomponent

					<div class="row">
						<div class="col-md-12">
							<div class="setting-wrap">
								<h6>SMS Gateway </h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
							<div class="accordion setting-accordion" id="payment">
							
								<!-- Payment Accordion -->
								<div class="accordion-item">
									<div class="accordion-header" id="paymentOne">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
											<label class="toggle-switch" for="email1">
												<input type="checkbox" class="toggle-switch-input" id="email1" checked>
												<span class="toggle-switch-label">
													<span class="toggle-switch-indicator"></span>
												</span>
											</label>
											<span class="accord-title">
												<span class="accord-title d-block border-start-0 ps-0">Default OTP</span>
												<span class="d-block text-muted">You can use default otp 1234 for demo purpose</span>
											</span>
										</div>
									</div>
									<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="paymentOne" data-bs-parent="#payment">
										<div class="accordion-body p-0">
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Stripe Option</h6>
													</div>
													<div class="col-md-4">
														<label class="custom_radio w-100">
															<input type="radio" name="del_acc" checked>
															<span class="checkmark"></span> Live
														</label>
														<label class="custom_radio w-100">
															<input type="radio" name="del_acc">
															<span class="checkmark"></span> Sandbox
														</label>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Gateway Name</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="Stripe">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">API Key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="pk_live_Hu79b4EVkFuCkEXNrLVQ7JTv000ibhh2NX">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-item">
												<div class="row align-items-center">
													<div class="col-md-2 text-right">
														<h6 class="head-title">Rest Key</h6>
													</div>
													<div class="col-md-4">
														<div class="form-group mb-0">
															<input type="text" class="form-control" value="sk_live_juEOItnRuTNTkHuijyJCdSdt">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Payment Accordion -->
								
							</div>
						</div>
					</div>
					
					<div class="row mt-auto">
						<div class="col-md-12">
							<div class="submit-sec">
								<button class="btn btn-primary">Save Changes</button>
								<button class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
					<!-- /Settings -->
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
			
@endsection