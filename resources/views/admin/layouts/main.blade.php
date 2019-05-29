@include('admin.includes.header')
	@include('admin.includes.admin-nav')

	<!-- Main Container Starts -->
	<div class="container-fluid" id="admin-main">
		<div class="wrapper">
			@yield('content')	
		</div>
   </div>
   
@include('admin.includes.footer')