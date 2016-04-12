<!-- Main Header -->
<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                 <a href="#" class="navbar-brand" style="">
                  <img alt="Brand" class="logo-me" src="{{ asset('logo/logo_pupuk_kujang.jpg') }}">
                 </a>
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                     <i class="fa fa-bars"></i>
                 </button>
             </div>
             <div class="collapse navbar-collapse" id="navbar-collapse">
	      		  <ul class="nav navbar-nav navbar-right">
	      		  
			      @if(! Auth::check())
				      <li class={{Route::is('auth.login') ? 'active':'' }}>
				        	<a href="{{ route('auth.login') }}">Login</a>
				      </li>
				      <li class={{Route::is('auth.register') ? 'active':'' }}>
				        	<a href="{{ route('auth.register') }}">Register</a>
				      </li>
			      @else
	      		    <li class={{Route::is('dashboard.index') ? 'active':'' }}>
			        	<a href="{{ route('dashboard.index') }}">Home</a>
			        </li>
			        <li class={{Route::is('files.index') ? 'active':'' }}>
			        	<a href="{{ route('files.index') }}">List File</a>
			        </li>
			        <li><a href="#">About</a></li>
			        <li><a href="#">Help</a></li>
		        
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="{{ route('auth.logout') }}">Logout</a></li>
			          </ul>
			        </li>
		        @endif
		      </ul>
		    </div><!-- /.navbar-collapse -->
         </div>
    </nav>
</header>