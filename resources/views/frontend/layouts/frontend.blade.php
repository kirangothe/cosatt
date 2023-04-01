<!DOCTYPE>
<html>
@include('frontend.layouts.partials.head._head')
<body> 
<div class="super_container">
    <header class="header">			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>(+9771) 4432079</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>nina@ntc.net.np</div>
									</li>
								</ul>
								<!-- <div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">  
                                    <a href="{{route('/')}}"><img src="{{ asset('images/'.setting('site_logo')) }}" alt="COSATT" style="height:40px;"></a>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="{{ url('/') }}">Home</a></li>
									<li><a href="{{ route('about') }}">About Us</a></li>
									<li><a href="{{ route('publications') }}">Publications</a></li>
									<li><a href="{{ route('partners') }}">Partners</a></li>
									<li><a href="{{ route('events') }}">Events</a></li>
									<li><a href="{{ route('contact') }}">Contact</a></li>
								</ul>
								<!-- <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div> -->

								<!-- Hamburger -->
 
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>
	<!-- Menu -->
	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="{{ url('/') }}">Home</a></li>
				<li class="menu_mm"><a href="{{ route('about') }}">About</a></li>
				<li class="menu_mm"><a href="{{ route('publications') }}">Publications</a></li>
				<li class="menu_mm"><a href="{{ route('partners') }}">Partners</a></li>
				<li class="menu_mm"><a href="{{ route('events') }}">Events</a></li>
				<li class="menu_mm"><a href="{{ route('contact') }}">Contact</a></li>
			</ul>
		</nav>
	</div>
    @yield('content')
	@include('frontend.layouts.partials.head._footer')
</div>
    @yield('extras')
    @stack('modals')
    @include('frontend.layouts.partials.script._scripts')    
    @stack('js')
</body>
</html>