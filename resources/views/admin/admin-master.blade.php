<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/admin/images/favicon.ico')}}">

    <title>Sunny Admin - Dashboard</title>

	<link rel="stylesheet" href="{{asset('assets/admin/css/vendors_css.css')}}">

	<link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/css/skin_color.css')}}">
     
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

  @include('admin.body.header')
  
 
  @include('admin.body.sidebar')

  
  <div class="content-wrapper">
	  <div class="container-full">

		
		@yield('admin')
		
	  </div>
  </div>
  
  @include('admin.body.footer')

  
  @include('admin.body.top-right-control')

  <div class="control-sidebar-bg"></div>
  
</div>

	<script src="{{asset('assets/admin/js/vendors.min.js')}}"></script>
    <script src="{{asset('assets/admin/assets/icons/feather-icons/feather.min.js')}}"></script>	
	<script src="{{asset('assets/admin/assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
	<script src="{{asset('assets/admin/assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
	<script src="{{asset('assets/admin/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>

	<script src="{{asset('assets/admin/js/template.js')}}"></script>
	<script src="{{asset('assets/admin/js/pages/dashboard.js')}}"></script>
	
	
</body>
</html>
