@extends('frontend.layouts.frontend')
@section('content')
	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="#">Home</a></li>
								<li>Events</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Courses -->
	<div class="courses">		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Events</h2>
						<div class="section_subtitle"></div>						 
					</div>
				</div>
			</div>
			<div class="row courses_row">	
				@if($events) 
					@foreach($events as $row)
						<div class="col-lg-4 course_col">
							<div class="course">
								<div class="course_image"><img src="{{ url('images/news/image/'.$row->image) }}" alt=""></div>
								<div class="course_body">
									<h3 class="course_title"><a href="course.html">{{ Str::limit($row->title,45) }}</a></h3> 
									<div class="course_text">
										<p>{{ Str::limit($row->summary,100) }}</p> 
									</div> 
									<div class="courses_button trans_200"><a href="{{ url('post-detail/'.$row->id) }}">read more</a></div> 
								</div>						 
							</div>
						</div>
					@endforeach
				@endif				 
			</div>			
		</div>
	</div>
	@endsection
	 