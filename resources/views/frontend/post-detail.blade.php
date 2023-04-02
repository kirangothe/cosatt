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
								<li><a href="index.html">Home</a></li>
								<li><a href="blog.html">{{ $postDetails->cat_id == 1 ? 'Events' : 'Publications'   }}</a></li>
								<li>Detail</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12">
					<div class="blog_content">
						<div class="blog_title">{!! $postDetails->title !!}</div>
						<!-- <div class="blog_meta">
							<ul>
								<li>Post on <a href="#">May 5, 2018</a></li>
								<li>By <a href="#">admin</a></li>
							</ul>
						</div> -->
						<div class="blog_image"><img src="{{ url('images/news/image/'.$postDetails->image) }}" alt=""></div>
						<p>{!! $postDetails->descrip !!}</p>
					</div>  
				</div>
				
			</div>
		</div>
	</div>
	@endsection
	@endif