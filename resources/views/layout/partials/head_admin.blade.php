        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        @if(!Route::is(['appointment-list','blog','specialities','doctor-list','patient-list','reviews','transactions-list','settings','invoice-report','profile','login','register','forgot-password','lock-screen','error-404','error-500','blank-page','components','form-basic','form-inputs','form-horizontal','form-vertical','form-mask','form-validation','tables-basic','data-tables','invoice','calendar','blog-details','edit-blog','product-list','pharmacy-list']))
        <title>Doccure - Dashboard</title>
        @endif
        @if(Route::is(['appointment-list']))
        <title>Doccure - Appointment List Page</title>
        @endif
        @if(Route::is(['specialities']))
        <title>Doccure - Specialities Page</title>
        @endif
        @if(Route::is(['doctor-list']))
        <title>Doccure - Doctor List Page</title>
        @endif
        @if(Route::is(['patient-list']))
        <title>Doccure - Patient List Page</title>
        @endif
        @if(Route::is(['reviews']))
        <title>Doccure - Reviews Page</title>
        @endif
        @if(Route::is(['transactions-list']))
        <title>Doccure - Transactions List Page</title>
        @endif
        @if(Route::is(['settings']))
        <title>Doccure - Settings Page</title>
        @endif
        @if(Route::is(['invoice-report']))
        <title>Doccure - Invoice Report Page</title>
        @endif
        @if(Route::is(['profile']))
        <title>Doccure - Profile</title>
        @endif
        @if(Route::is(['login']))
        <title>Doccure - Login</title>
	@endif
        @if(Route::is(['register']))
        <title>Doccure - Register</title>
        @endif
        @if(Route::is(['forgot-password']))
        <title>Doccure - Forgot Password</title>
        @endif
        @if(Route::is(['lock-screen']))
        <title>Doccure - Lock Screen</title>
        @endif
        @if(Route::is(['error-404']))
        <title>Doccure - Error 404</title>
	@endif
        @if(Route::is(['error-500']))
        <title>Doccure - Error 500</title>
	@endif
        @if(Route::is(['blank-page']))
        <title>Doccure - Blank Page</title>
        @endif
        @if(Route::is(['components']))
        <title>Doccure - Components</title>
        @endif
        @if(Route::is(['form-basic']))
        <title>Doccure - Basic Inputs</title>
        @endif
        @if(Route::is(['form-inputs']))
        <title>Doccure - Form Input Groups</title>
        @endif
        @if(Route::is(['form-horizontal']))
        <title>Doccure - Horizontal Form</title>
        @endif
        @if(Route::is(['form-vertical']))
        <title>Doccure - Vertical Form</title>
        @endif
        @if(Route::is(['form-mask']))
        <title>Doccure - Form Mask</title>
        @endif
        @if(Route::is(['form-validation']))
        <title>Doccure - Form Validation</title>
        @endif
        @if(Route::is(['tables-basic']))
        <title>Doccure - Tables Basic</title>
        @endif
        @if(Route::is(['data-tables']))
        <title>Doccure - Data Tables</title>
        @endif
        @if(Route::is(['invoice']))
        <title>Doccure - Invoice</title>
        @endif
        @if(Route::is(['calendar']))
        <title>Doccure - Calendar</title>
        @endif
        @if(Route::is(['blog','blog-details']))
        <title>Doccure - Blog Page</title>
        @endif
        @if(Route::is(['add-blog']))
        <title>Doccure - Add Blog Page</title>
	@endif
        @if(Route::is(['edit-blog']))
        <title>Doccure - Edit Blog Page</title>
        @endif
        @if(Route::is(['product-list']))
        <title>Doccure - Product List Page</title>
        @endif
        @if(Route::is(['pharmacy-list']))
        <title>Doccure - Pharmacy List Page</title>
        @endif
        @if(Route::is(['pending-blog']))
        <title>Doccure - Pending Blog Page</title>
        @endif
        @if(Route::is(['account-settings','income-report','active-blog']))
        <title>Doccure - Bootstrap Admin HTML Template</title>
        @endif
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets_admin/img/favicon.png')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/libs/bootstrap/css/bootstrap.min.css')}}">
        <!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/libs/feather/feather.css')}}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{url('assets_admin/libs/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{url('assets_admin/libs/fontawesome/css/all.min.css')}}">
        <!-- Daterangepicker CSS -->
        <link rel="stylesheet" href="{{url('/assets_admin/libs/daterangepicker/daterangepicker.css')}}">
        <!-- Apecharts CSS -->
        <link rel="stylesheet" href="{{url('/assets_admin/libs/apex/apexcharts.css')}}">   
        <!-- Datatables CSS -->
        <link rel="stylesheet" href="{{url('/assets_admin/libs/datatables/css/datatables.min.css')}}">    
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{url('/assets_admin/libs/select2/dist/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{url('/assets_admin/css/owl.carousel.min.css')}}"> 
	    <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/app.css')}}">	

