<div class="nav-fixed-top">
	<div class="icons">
		 <i class="fa fa-bars" id="openNav"></i>
		 <i class="fa fa-times" id="closeNav"></i>
	</div>
	<button class="btn2"><a href="{{route('admin.logout')}}" style="color:#fff">Logout</a></button>
 
 </div>

<!-- Navigation Starts Here -->
	<nav class="navbar navbar-fixed-top navigation">
	  <div class="container">

		    <div class="navbar-header">
		      <a class="navbar-brand adminlogo" href="{{route('admin.dashboard')}}"><img src="{{URL::to('/img/logo-dash.png')}}" alt=""></a>
		    </div>


		    <div class="" >
		        <ul class="nav navbar-nav">
		        	<li class="has_tree">
		        		<a href="#">{{Auth::user()->first_name}} <i class="fa fa-angle-down" aria-hidden="true"></i>
						  </a>
						  

						<ul class="subul">
							<li><a href="{{route('admin.profile')}}">Profile</a></li>
							
							@if(Auth::user()->role_id == "1")
							<li><a href="{{route('admin.admins')}}">All Admins</a></li>
							<li><a href="{{route('admin.register')}}">Add New Admin</a></li>
							@endif
							
						</ul>
		        	</li>
			      <li><a href="{{route('admin.dashboard')}}" class="{{{ (Request::is('admin/dashboard') ? 'active' : '') }}} {{{ (Request::is('admin') ? 'active' : '') }}}">Dashboard</a></li>
					  
					<li class="has_tree">
		        		<a href="#"
						{{{ (Request::is('admin/home') ? 'class=active' : '') }}}
						{{{ (Request::is('admin/galleries') ? 'class=active' : '') }}}
		        		>Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
		        		</a>
						<ul class="subul">
							<li><a href="{{route('admin.home')}}" >Home</a></li>
							<li><a href="{{route('admin.galleries')}}">Galleries</a></li>
							<li><a href="{{route('admin.customers')}}">Customers</a></li>
						</ul>
		        	</li>
		        	
		       		<li><a href="{{route('admin.dish')}}" {{{ (Request::is('admin/dish') ? 'class=active' : '') }}}>Dish</a></li>
		       		<li><a href="{{route('admin.orders')}}" {{{ (Request::is('admin/orders') ? 'class=active' : '') }}} {{{ (Request::is('admin/orders-single-category') ? 'class=active' : '') }}}>Orders</a></li>
		       		<li><a href="{{route('admin.reservations')}}" {{{ (Request::is('admin/reservations') ? 'class=active' : '') }}}>Reservations</a></li>
		       	 	
		       	 	<li><a href="{{route('admin.messages')}}" {{{ (Request::is('admin/messages') ? 'class=active' : '') }}}>Messages<span>{{Session::has('numOfMessage')? Session::get('numOfMessage') : 0}} </span></a> </li>

		       	 	<li><a href="{{route('admin.logout')}}">Logout</a></li>
		        </ul>

		    </div>
	 	</div>
	</nav> <!-- Navigation Ends Here -->