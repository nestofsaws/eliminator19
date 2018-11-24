<nav class="navbar navbar-expand-md navbar-dark bg-green">
  <a class="navbar-brand" href="/eliminator2019"><span class="pacifico">Stony Creek</span> <span class="black-han">ELIMINATOR</span></a>
  <!--BUTTON-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
	<span class="navbar-toggler-icon"></span>
  </button>

	<div class="collapse navbar-collapse" id="navbarMenu">
		@can('isAdmin')
		<!-- Left Side Of Navbar -->
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item">
			<a class="nav-link" href="/td100/users">Users</a>
		  </li>          
		  <li class="nav-item">
			<a class="nav-link" href="/td100/organizations">Organizations</a>
		  </li>			 				  
		</ul>
		@endcan
		<!-- Right Side Of Navbar -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link disabled text-white">Hello {{-- Auth::user()->fname --}} </a>
			</li>
			@can('isAdmin')
			  <li class="nav-item">
				<a class="nav-link disabled text-danger"><strong>{{-- strtoupper(Auth::user()->user_type) --}}</strong></a>
			  </li>	
			@endcan
			<li class="nav-item">
				<a class="nav-link" href="{{-- route('logout') --}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }} <i class='fas fa-sign-out-alt'></i></a>
				<form id="logout-form" action="{{-- route('logout') --}}" method="POST" style="display: none;">
					@csrf
				</form>
			</li>
		</ul>
	</div>
</nav>