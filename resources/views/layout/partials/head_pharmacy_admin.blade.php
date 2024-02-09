<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		@if(!Route::is(['product-list','invoice','edit-supplier','edit-product','customer-orders','settings','profile','invoice-report','transactions-list','add-supplier','products','add-product','outstock','expired','categories','purchase','add-purchase','order','sales','supplier','edit-purchase']))
        <title>Doccure -Pharmacy Dashboard</title>
        @endif
        @if(Route::is(['products']))
        <title>Doccure - Products Page</title>
        @endif
        @if(Route::is(['add-product']))
        <title>Doccure - Add Product Page</title>
        @endif
        @if(Route::is(['outstock']))
        <title>Doccure - Outstock Page</title>
        @endif
        @if(Route::is(['expired']))
        <title>Doccure - Expired Page</title>
        @endif
        @if(Route::is(['categories']))
        <title>Doccure - Categories Page</title>
        @endif
        @if(Route::is(['purchase']))
        <title>Doccure - Purchase Page</title>
        @endif
        @if(Route::is(['add-purchase']))
        <title>Doccure - Add Purchase Page</title>
        @endif
        @if(Route::is(['order']))
        <title>Doccure - Order Page</title>
        @endif
        @if(Route::is(['sales']))
        <title>Doccure - Sales Page</title>
        @endif
        @if(Route::is(['supplier']))
        <title>Doccure - Supplier Page</title>
        @endif
        @if(Route::is(['add-supplier']))
        <title>Doccure - Add Supplier Page</title>
        @endif
        @if(Route::is(['transactions-list']))
        <title>Doccure - Transactions List Page</title>
        @endif
        @if(Route::is(['invoice-report']))
        <title>Doccure - Invoice Report Page</title>
        @endif
        @if(Route::is(['profile']))
        <title>Doccure - Profile</title>
        @endif
        @if(Route::is(['settings']))
        <title>Doccure - Settings Page</title>
        @endif
        @if(Route::is(['customer-orders']))
        <title>Doccure - Customer Order Page</title>
        @endif
        @if(Route::is(['edit-product']))
        <title>Doccure - Edit Product Page</title>
        @endif
        @if(Route::is(['edit-purchase']))
        <title>Doccure - Edit Purchase Page</title>
        @endif
        @if(Route::is(['edit-supplier']))
        <title>Doccure - Edit Supplier Page</title>
        @endif
        @if(Route::is(['invoice']))
        <title>Doccure - Invoice</title>
        @endif
        @if(Route::is(['product-list']))
        <title>Doccure - Product List Page</title>
		@endif
		
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('assets_pharmacy/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets_pharmacy/libs/bootstrap/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets_pharmacy/libs/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets_pharmacy/libs/fontawesome/css/all.min.css')}}">
		
		<!-- Feathericon CSS -->
		<link rel="stylesheet" href="{{asset('assets_pharmacy/libs/feather/feather.css')}}">
        <link rel="stylesheet" href="{{url('/assets_pharmacy/libs/morris/morris.css')}}"> 
        <!-- Apecharts CSS -->
        <link rel="stylesheet" href="{{url('/assets_pharmacy/libs/apex/apexcharts.css')}}">       
        <!-- Daterangepicker CSS -->
        <link rel="stylesheet" href="{{url('/assets_pharmacy/libs/daterangepicker/daterangepicker.css')}}"> 
        <!-- Datatables CSS -->
        <link rel="stylesheet" href="{{url('/assets_pharmacy/libs/datatables/css/datatables.min.css')}}">
		<!-- Select2 CSS -->
        <link rel="stylesheet" href="{{url('/assets_pharmacy/libs/select2/dist/css/select2.min.css')}}">
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets_pharmacy/css/app.css')}}">