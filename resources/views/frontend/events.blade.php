@extends('frontend.layouts.frontend')
@section('content')
	<div class="home-generic">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
							<li><a href="{{ route('/') }}">Home</a></li>
								<li><a href="{{ route('publications') }}">Publications </a></li>
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
						<div class="courses_button trans_200"><a href="{{ url('post-detail/'.$row->id) }}">read more</a></div> 
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
	 