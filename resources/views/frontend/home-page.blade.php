@extends('frontend.layouts.frontend')

@section('content')
<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/cosatt3.jpg)"></div>
					<!-- <div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										 
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/cosatt2.jpg)"></div>
					<!-- <div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										 
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/cosatt3.jpg)"></div>
					<!-- <div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										 
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To COSATT</h2>
						<div class="section_subtitle"><p>South Asia continues to be the most volatile region in the world, involved in issues relating to Insurgency, Terrorism, Border Disputes and the Environment. These issues are transnational in nature and no country can address it alone. A regional approach therefore is best suited to address such issues.</p></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="#">read more</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div style="background-image: url(images/courses_background.jpg);" class="section_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/courses_background.jpg') }}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Our Publications</h2>
						<!-- <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div> -->
						<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="{{ route('publications') }}">view all publications</a></div>
				</div>
			</div>
					</div>
				</div>
			</div>
			<div class="row courses_row">	
				@if($publications) 
					@foreach($publications as $row)
						<div class="col-lg-4 course_col">
							<div class="course">
								<div class="course_image"><img src="{{ url('images/news/image/'.$row->image) }}" alt=""></div>
								<div class="course_body">
									<h3 class="course_title"><a href="course.html">{{ Str::limit($row->title,45) }}</a></h3>
									<!-- <div class="course_teacher">Mr. John Taylor</div> -->
									<div class="course_text">
										<p>{{ Str::limit($row->summary,100) }}</p> 
									</div> 
									<div class="courses_button trans_200"><a href="#">read more</a></div> 
								</div>						 
							</div>
						</div>
					@endforeach
				@endif				 
			</div>
			
		</div>
	</div>

	<!-- Counter -->

	

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Events</h2>
						<!-- <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div> -->
						<div class="row">
			<div class="col">
				<div class="courses_button trans_200"><a href="{{ route('events') }}">view all events</a></div>
			</div>
		</div>
					</div>
				</div>
			</div>
			<div class="row events_row">

			@if($events) 
					@foreach($events as $row)
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="{{ url('images/news/image/'.$row->image) }}" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $row->news_date)->format('d') }}</div>
									<div class="event_month trans_200">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $row->news_date)->format('M-y') }}</div>
									
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">{{ Str::limit($row->title,50) }}</a></div>
								<div class="event_info_container">
									<!-- <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 - 19.30</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 New York City</span></div> -->
									<div class="event_text">
										<p>{{ Str::limit($row->summary,100) }}</p>
									</div>
								</div>
								<div class="courses_button trans_200"><a href="#">read more</a></div> 
							</div>
						</div>
					</div>
				</div>
				@endforeach
				@endif	 
			</div>
		</div>		
	</div>
@endsection

