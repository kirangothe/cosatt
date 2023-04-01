@extends('frontend.layouts.frontend')
@section('content')
	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="blog.html">Post</a></li>
								<li>Post Detail</li>
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

				@if($postDetails)
				<div class="col-lg-12">
					<div class="blog_content">
						<div class="blog_title">{{ $postDetails->title }}</div>
						<div class="blog_meta">
							<ul>
								<li>Post on <a href="#">May 5, 2018</a></li>
								<li>By <a href="#">admin</a></li>
							</ul>
						</div>
						<div class="blog_image"><img src="{{ url('images/news/image/'.$postDetails->image) }}" alt=""></div>
						{{ $postDetails->descrip }}
					</div>  
				</div>
				@endif
			</div>
		</div>
	</div>
	@endsection