@extends('frontend.layouts.frontend')
@section('content')
@if($postDetails)
	<div class="home-generic">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="route('/')">Home</a></li>
								<li><a href="@if($postDetails->cat_id == 1) {{ route('events') }} @else {{ route('publications') }} @endif">{{ $postDetails->cat_id == 1 ? 'Events' : 'Publications'   }}</a></li>
								<li>Detail</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Blog -->

	<div class="features">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12"> 
						<div class="section_title_container text-center"> 
							<h2 class="section_title">{!! $postDetails->title !!}</h2>
							<div class="blog_image"><img src="{{ url('images/news/image/'.$postDetails->image) }}" alt=""></div> 
							<div class="section_subtitle">
							<p>{!! $postDetails->descrip !!}</p> 
							@if($postDetails->file)
                            	Download file for more information : 
									<a href="{{ url('images/news/file/'.$postDetails->file) }}" target="_blank">{!! $postDetails->filename !!}</a>
							@endif
							</div>					
						</div>
				</div>
				
			</div>
		</div>
	</div>
	@endsection
	@endif