<?php $page="map-list-1";?>
@extends('layout.mainlayout')
@section('content')
        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

	            <div class="row">
					<div class="col-xl-8 col-lg-12 order-md-last order-sm-last order-last map-left">
				
                        <div class="row align-items-center mb-4">
                            <div class="col-md-6 col">
                                <h4 class="appoint">All Appoinments</h4>
                            </div>

                            <div class="col-md-6 col-auto">
                                <div class="view-icons">
                                    <a href="{{url('map-grid')}}" class="grid-view"><i class="fas fa-th-large"></i></a>
                                    <a href="{{url('map-list')}}" class="list-view active"><i class="fas fa-bars"></i></a>
                                </div>
                                <div class="sort-by d-sm-block d-none">
                                    <span class="sortby-fliter">
                                        <select class="form-select">
                                            <option>Sort by</option>
                                            <option class="sorting">Rating</option>
                                            <option class="sorting">Popular</option>
                                            <option class="sorting">Latest</option>
                                            <option class="sorting">Free</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 col">
                                <h4 class="total-dr">2245 Doctors found</h4>
                            </div>

                            <div class="col-md-6 col-auto">
                                <div class="arrows">
                                    <a href="#" class="perv-date"><i class="fas fa-angle-left"></i></a>
                                    <a href="#" class="next-date"><i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="sort-by d-sm-block d-none">
                                    <h5 class="calender">Apr 20 - May 3</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Doctor Widget -->
                        <div class="card">
                            <div class="card-body widget-body">
                                <div class="doctor-widget doctor-col">
                                    <div class="doc-info-left doc-details">
                                        <div class="doctor-img">
                                            <a href="{{url('doctor-profile')}}">
                                                <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" class="img-fluid" alt="User Image">
                                            </a>
                                        </div>
                                        <div class="doc-info-cont">
                                            <h4 class="doc-name"><a href="{{url('doctor-profile')}}">Dr. Ruby Perrin</a></h4>
                                            <p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/tooth-icon.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>Dentist</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/thums-up.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>99%</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/Star.png')}}" class="img-fluid" alt="Speciality">
                                                <h6><span>4.86 </span>(125)</h6>
                                            </div>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/location_on.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>Florida, USA</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/Chat.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>17 Feedback</h6>
                                            </div>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/money.png')}}" class="img-fluid money-icon" alt="Speciality">
                                                <h6>$300 - $1000</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/InfoCircle.png')}}" class="img-fluid" alt="Speciality">
                                            </div>
                                            
                                            <div class="clinic-details">
                                                <ul class="clinic-gallery">
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-01.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-01.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-02.jpg')}}" data-fancybox="gallery">
                                                            <img  src="{{ URL::asset('/assets/img/features/feature-02.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-03.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-03.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-04.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-04.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clinic-services">
                                                <span>Dental Fillings</span>
                                                <span> Whitneing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doc-info-right appt-date">
                                        <div class="calender-scroll">
                                            <div class="calender-box text-center">
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>20</h4>
                                                        <h6>Monday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>21</h4>
                                                        <h6>Tuesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>22</h4>
                                                        <h6>Wednesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>23</h4>
                                                        <h6>Thursday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>24</h4>
                                                        <h6>Friday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>25</h4>
                                                        <h6>Saturday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>25</6>
                                                        <h6>Sunday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="calender-box text-center">
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>26</h4>
                                                        <h6>Monday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>27</h4>
                                                        <h6>Tuesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>28</h4>
                                                        <h6>Wednesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>29</h4>
                                                        <h6>Thursday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>30</h4>
                                                        <h6>Friday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>31</h4>
                                                        <h6>Saturday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>1</6>
                                                        <h6>Sunday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="clinic-booking book-btns">
                                            <a class="view-pro-btn" href="{{url('doctor-profile')}}">View all availability</a>
                                            <a class="apt-btn" href="{{url('booking')}}">Book an Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="card">
                            <div class="card-body widget-body">
                                <div class="doctor-widget doctor-col">
                                    <div class="doc-info-left doc-details">
                                        <div class="doctor-img">
                                            <a href="{{url('doctor-profile')}}">
                                                <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" class="img-fluid" alt="User Image">
                                            </a>
                                        </div>
                                        <div class="doc-info-cont">
                                            <h4 class="doc-name"><a href="{{url('doctor-profile')}}">Dr. Darren Elder</a></h4>
                                            <p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/tooth-icon.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>Dentist</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/thums-up.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>99%</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/Star.png')}}" class="img-fluid" alt="Speciality">
                                                <h6><span>4.86 </span>(125)</h6>
                                            </div>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/location_on.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>Florida, USA</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/Chat.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>17 Feedback</h6>
                                            </div>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/money.png')}}" class="img-fluid money-icon" alt="Speciality">
                                                <h6>$300 - $1000</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/InfoCircle.png')}}" class="img-fluid" alt="Speciality">
                                            </div>
                                            <div class="clinic-details">
                                                <ul class="clinic-gallery">
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-01.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-01.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-02.jpg')}}" data-fancybox="gallery">
                                                            <img  src="{{ URL::asset('/assets/img/features/feature-02.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-03.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-03.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-04.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-04.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clinic-services">
                                                <span>Dental Fillings</span>
                                                <span> Whitneing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doc-info-right appt-date">
                                        <div class="calender-scroll">
                                            <div class="calender-box text-center">
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>20</h4>
                                                        <h6>Monday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>21</h4>
                                                        <h6>Tuesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>22</h4>
                                                        <h6>Wednesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>23</h4>
                                                        <h6>Thursday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>24</h4>
                                                        <h6>Friday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>25</h4>
                                                        <h6>Saturday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>25</6>
                                                        <h6>Sunday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="calender-box text-center">
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>26</h4>
                                                        <h6>Monday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>27</h4>
                                                        <h6>Tuesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>28</h4>
                                                        <h6>Wednesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>29</h4>
                                                        <h6>Thursday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>30</h4>
                                                        <h6>Friday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>31</h4>
                                                        <h6>Saturday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>1</6>
                                                        <h6>Sunday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="clinic-booking book-btns">
                                            <a class="view-pro-btn" href="{{url('doctor-profile')}}">View all availability</a>
                                            <a class="apt-btn" href="{{url('booking')}}">Book an Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="card">
                            <div class="card-body widget-body">
                                <div class="doctor-widget doctor-col">
                                    <div class="doc-info-left doc-details">
                                        <div class="doctor-img">
                                            <a href="{{url('doctor-profile')}}">
                                                <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg')}}" class="img-fluid" alt="User Image">
                                            </a>
                                        </div>
                                        <div class="doc-info-cont">
                                            <h4 class="doc-name"><a href="{{url('doctor-profile')}}">Dr. Deborah Angel</a></h4>
                                            <p class="doc-speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/tooth-icon.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>Dentist</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/thums-up.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>99%</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/Star.png')}}" class="img-fluid" alt="Speciality">
                                                <h6><span>4.86 </span>(125)</h6>
                                            </div>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/location_on.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>Florida, USA</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/Chat.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>17 Feedback</h6>
                                            </div>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/money.png')}}" class="img-fluid money-icon" alt="Speciality">
                                                <h6>$300 - $1000</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/InfoCircle.png')}}" class="img-fluid" alt="Speciality">
                                            </div>
                                            <div class="clinic-details">
                                                <ul class="clinic-gallery">
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-01.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-01.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-02.jpg')}}" data-fancybox="gallery">
                                                            <img  src="{{ URL::asset('/assets/img/features/feature-02.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-03.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-03.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-04.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-04.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clinic-services">
                                                <span>Dental Fillings</span>
                                                <span> Whitneing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doc-info-right appt-date">
                                        <div class="calender-scroll">
                                            <div class="calender-box text-center">
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>20</h4>
                                                        <h6>Monday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>21</h4>
                                                        <h6>Tuesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>22</h4>
                                                        <h6>Wednesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>23</h4>
                                                        <h6>Thursday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>24</h4>
                                                        <h6>Friday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>25</h4>
                                                        <h6>Saturday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>25</6>
                                                        <h6>Sunday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="calender-box text-center">
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>26</h4>
                                                        <h6>Monday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>27</h4>
                                                        <h6>Tuesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>28</h4>
                                                        <h6>Wednesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>29</h4>
                                                        <h6>Thursday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>30</h4>
                                                        <h6>Friday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>31</h4>
                                                        <h6>Saturday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>1</6>
                                                        <h6>Sunday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="clinic-booking book-btns">
                                            <a class="view-pro-btn" href="{{url('doctor-profile')}}">View all availability</a>
                                            <a class="apt-btn" href="{{url('booking')}}">Book an Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="card">
                            <div class="card-body widget-body">
                                <div class="doctor-widget doctor-col">
                                    <div class="doc-info-left doc-details">
                                        <div class="doctor-img">
                                            <a href="{{url('doctor-profile')}}">
                                                <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-04.jpg')}}" class="img-fluid" alt="User Image">
                                            </a>
                                        </div>
                                        <div class="doc-info-cont">
                                            <h4 class="doc-name"><a href="{{url('doctor-profile')}}">Dr. Sofia Brient</a></h4>
                                            <p class="doc-speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/tooth-icon.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>Dentist</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/thums-up.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>99%</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/Star.png')}}" class="img-fluid" alt="Speciality">
                                                <h6><span>4.86 </span>(125)</h6>
                                            </div>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/location_on.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>Florida, USA</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/Chat.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>17 Feedback</h6>
                                            </div>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/money.png')}}" class="img-fluid money-icon" alt="Speciality">
                                                <h6>$300 - $1000</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/InfoCircle.png')}}" class="img-fluid" alt="Speciality">
                                            </div>
                                            <div class="clinic-details">
                                        
                                                <ul class="clinic-gallery">
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-01.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-01.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-02.jpg')}}" data-fancybox="gallery">
                                                            <img  src="{{ URL::asset('/assets/img/features/feature-02.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-03.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-03.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-04.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-04.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clinic-services">
                                                <span>Dental Fillings</span>
                                                <span> Whitneing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doc-info-right appt-date">
                                        <div class="calender-scroll">
                                            <div class="calender-box text-center">
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>20</h4>
                                                        <h6>Monday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>21</h4>
                                                        <h6>Tuesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>22</h4>
                                                        <h6>Wednesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>23</h4>
                                                        <h6>Thursday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>24</h4>
                                                        <h6>Friday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>25</h4>
                                                        <h6>Saturday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>25</6>
                                                        <h6>Sunday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="calender-box text-center">
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>26</h4>
                                                        <h6>Monday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>27</h4>
                                                        <h6>Tuesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>28</h4>
                                                        <h6>Wednesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>29</h4>
                                                        <h6>Thursday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>30</h4>
                                                        <h6>Friday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>31</h4>
                                                        <h6>Saturday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>1</6>
                                                        <h6>Sunday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="clinic-booking book-btns">
                                            <a class="view-pro-btn" href="{{url('doctor-profile')}}">View all availability</a>
                                            <a class="apt-btn" href="{{url('booking')}}">Book an Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="card">
                            <div class="card-body widget-body">
                                <div class="doctor-widget doctor-col">
                                    <div class="doc-info-left doc-details">
                                        <div class="doctor-img">
                                            <a href="{{url('doctor-profile')}}">
                                                <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-06.jpg')}}" class="img-fluid" alt="User Image">
                                            </a>
                                        </div>
                                        <div class="doc-info-cont">
                                            <h4 class="doc-name"><a href="{{url('doctor-profile')}}">Dr. Katharine Berthold</a></h4>
                                            <p class="doc-speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/tooth-icon.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>Dentist</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/thums-up.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>99%</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/Star.png')}}" class="img-fluid" alt="Speciality">
                                                <h6><span>4.86 </span>(125)</h6>
                                            </div>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/location_on.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>Florida, USA</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/Chat.png')}}" class="img-fluid" alt="Speciality">
                                                <h6>17 Feedback</h6>
                                            </div>
                                            <div class="doc-department d-flex">
                                                <img src="{{ URL::asset('/assets/img/icons/money.png')}}" class="img-fluid money-icon" alt="Speciality">
                                                <h6>$300 - $1000</h6>
                                                <img src="{{ URL::asset('/assets/img/icons/InfoCircle.png')}}" class="img-fluid" alt="Speciality">
                                            </div>
                                            <div class="clinic-details">
                                                <ul class="clinic-gallery">
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-01.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-01.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-02.jpg')}}" data-fancybox="gallery">
                                                            <img  src="{{ URL::asset('/assets/img/features/feature-02.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-03.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-03.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('assets/img/features/feature-04.jpg')}}" data-fancybox="gallery">
                                                            <img src="{{ URL::asset('/assets/img/features/feature-04.jpg')}}" alt="Feature">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clinic-services">
                                                <span>Dental Fillings</span>
                                                <span> Whitneing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doc-info-right appt-date">
                                        <div class="calender-scroll">
                                            <div class="calender-box text-center">
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>20</h4>
                                                        <h6>Monday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>21</h4>
                                                        <h6>Tuesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>22</h4>
                                                        <h6>Wednesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>23</h4>
                                                        <h6>Thursday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>24</h4>
                                                        <h6>Friday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>25</h4>
                                                        <h6>Saturday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>25</6>
                                                        <h6>Sunday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="calender-box text-center">
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>26</h4>
                                                        <h6>Monday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>27</h4>
                                                        <h6>Tuesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>28</h4>
                                                        <h6>Wednesday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>29</h4>
                                                        <h6>Thursday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box">
                                                    <div class="date">
                                                        <h4>30</h4>
                                                        <h6>Friday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>2 Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>31</h4>
                                                        <h6>Saturday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                <div class="inner-box no-appointment-box">
                                                    <div class="date">
                                                        <h4>1</6>
                                                        <h6>Sunday</h6>
                                                    </div>
                                                    <div class="appointment-box">
                                                        <h6>No Appts</h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="clinic-booking book-btns">
                                            <a class="view-pro-btn" href="{{url('doctor-profile')}}">View all availability</a>
                                            <a class="apt-btn" href="{{url('booking')}}">Book an Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->
                            
                        <!-- Map Pagination -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-pagination">
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- /Map Pagination -->
                    </div>
                    <!-- /content-left-->
                    <div class="col-xl-4 col-lg-12 map-right">
                        <div id="map" class="map-listing"></div>
                        <!-- map-->
                    </div>
                    <!-- /map-right-->
                </div>
                <!-- /row-->
	   
            </div>

        </div>		
        <!-- /Page Content -->
@endsection