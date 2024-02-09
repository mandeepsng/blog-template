
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Medical Records @endslot
    @slot('li_1') Home @endslot
    @slot('li_2') Medical Records @endslot
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
                                            <li class="active">
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
                                        <div class="card-body pt-0">
                                        
                                            <!-- Tab Menu -->
                                            <nav class="user-tabs mb-4">
                                                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="{{url('#pat_medicalrecords')}}" data-bs-toggle="tab">Medical Records</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{url('#pat_prescription')}}" data-bs-toggle="tab">Prescription</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <!-- /Tab Menu -->
                                            
                                            <!-- Tab Content -->
                                            <div class="tab-content pt-0">
                                                
                                                <!-- Medical Records Tab -->
                                                <div id="pat_medicalrecords" class="tab-pane fade show active">
                                                    <div class="text-end">        
                                                        <a href="#" class="add-new-btn" data-bs-toggle="modal" data-bs-target="#add_medical_records_modal">Add Medical Records</a>
                                                    </div>
                                                    <div class="card card-table mb-0">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover table-center mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Name</th>
                                                                            <th>Date</th>
                                                                            <th>Description</th>
                                                                            <th>Attachment</th>
                                                                            <th>Orderd By</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Richard Wilson</td>
                                                                            <td>11 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
                                                                            <td>Benzaxapine Croplex</td>
                                                                            <td>
                                                                                <a href="javascript:void(0);" title="Download attachment" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
                                                                            </td>
                                                                            <td>Your Self</td>
                                                                            <td>
                                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                    <i class="far fa-trash-alt"></i> 
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>Vena</td>
                                                                            <td>3 Nov 2019 <span class="d-block text-info">11.00 AM</span></td>
                                                                            <td>Rapalac Neuronium</td>
                                                                            <td>
                                                                                <a href="javascript:void(0);" title="Download attachment" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
                                                                            </td>
                                                                            <td>Your Self</td>
                                                                            <td>
                                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                    <i class="far fa-trash-alt"></i> 
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>Tressie</td>
                                                                            <td>1 Nov 2019 <span class="d-block text-info">1.00 PM</span></td>
                                                                            <td>Ombinazol Bonibamol</td>
                                                                            <td>
                                                                                <a href="javascript:void(0);" title="Download attachment" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
                                                                            </td>
                                                                            <td>Your Self</td>
                                                                            <td>
                                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                    <i class="far fa-trash-alt"></i> 
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>Richard Wilson</td>
                                                                            <td>30 Oct 2019 <span class="d-block text-info">9.00 AM</span></td>
                                                                            <td>Dantotate Dantodazole</td>
                                                                            <td>
                                                                                <a href="javascript:void(0);" title="Download attachment" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
                                                                            </td>
                                                                            <td>Your Self</td>
                                                                            <td>
                                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                    <i class="far fa-trash-alt"></i> 
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>Christopher</td>
                                                                            <td>28 Oct 2019 <span class="d-block text-info">6.00 PM</span></td>
                                                                            <td>Acetrace Amionel</td>
                                                                            <td>
                                                                                <a href="javascript:void(0);" title="Download attachment" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
                                                                            </td>
                                                                            <td>Your Self</td>
                                                                            <td>
                                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                                    <i class="far fa-trash-alt"></i> 
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Medical Records Tab -->
                                                
                                                <!-- Prescription Tab -->
                                                <div class="tab-pane fade" id="pat_prescription">
                                                    <div class="card card-table mb-0">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover table-center mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Date</th>
                                                                            <th>Name</th>
                                                                            <th>Doctor</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>11 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
                                                                            <td>Prescription</td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('doctor-profile')}}" class="avatar avatar-sm me-2">
                                                                                        <img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="User Image">
                                                                                    </a>
                                                                                    <a href="{{url('doctor-profile')}}">Dr. Ruby Perrin <span>Dental</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td>
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-print"></i> Print
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>3 Nov 2019 <span class="d-block text-info">11.00 AM</span></td>
                                                                            <td>Prescription</td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('doctor-profile')}}" class="avatar avatar-sm me-2">
                                                                                        <img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">
                                                                                    </a>
                                                                                    <a href="{{url('doctor-profile')}}">Dr. Darren Elder <span>Dental</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td>
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-print"></i> Print
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>1 Nov 2019 <span class="d-block text-info">1.00 PM</span></td>
                                                                            <td>Prescription</td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('doctor-profile')}}" class="avatar avatar-sm me-2">
                                                                                        <img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg')}}" alt="User Image">
                                                                                    </a>
                                                                                    <a href="{{url('doctor-profile')}}">Dr. Deborah Angel <span>Cardiology</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td>
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-print"></i> Print
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>30 Oct 2019 <span class="d-block text-info">9.00 AM</span></td>
                                                                            <td>Prescription</td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('doctor-profile')}}" class="avatar avatar-sm me-2">
                                                                                        <img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/doctors/doctor-thumb-04.jpg')}}" alt="User Image">
                                                                                    </a>
                                                                                    <a href="{{url('doctor-profile')}}">Dr. Sofia Brient <span>Urology</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td>
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-print"></i> Print
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>28 Oct 2019 <span class="d-block text-info">6.00 PM</span></td>
                                                                            <td>Prescription</td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('doctor-profile')}}" class="avatar avatar-sm me-2">
                                                                                        <img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/doctors/doctor-thumb-05.jpg')}}" alt="User Image">
                                                                                    </a>
                                                                                    <a href="{{url('doctor-profile')}}">Dr. Marvin Campbell <span>Ophthalmology</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td>
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-print"></i> Print
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td>27 Oct 2019 <span class="d-block text-info">8.00 AM</span></td>
                                                                            <td>Prescription</td>
                                                                            <td>
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{url('doctor-profile')}}" class="avatar avatar-sm me-2">
                                                                                        <img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/doctors/doctor-thumb-06.jpg')}}" alt="User Image">
                                                                                    </a>
                                                                                    <a href="{{url('doctor-profile')}}">Dr. Katharine Berthold <span>Orthopaedics</span></a>
                                                                                </h2>
                                                                            </td>
                                                                            <td >
                                                                                <div class="table-action">
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                        <i class="far fa-eye"></i> View
                                                                                    </a>
                                                                                    
                                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                                        <i class="fas fa-print"></i> Print
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
                                                <!-- /Prescription Tab -->
                                                    
                                            </div>
                                            <!-- Tab Content -->
                                            
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