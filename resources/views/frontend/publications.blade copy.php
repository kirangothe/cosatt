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
								<li>Courses</li>
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
						<h2 class="section_title">Our Publications</h2>
						<div class="section_subtitle"></div>						 
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Courses Main Content -->
				<div class="col-lg-12">					
					<div class="courses_container">
						<div class="row courses_row">							
							<!-- Course -->
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
									<!-- <div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto">$130</div>
										</div>
									</div> -->
								</div>
							</div>
							@endforeach
							@endif	 
							 
						<!-- <div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
									<div class="courses_show_container ml-auto clearfix">
										<div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
										<div class="courses_show_content">
											<span>Show: </span>
											<select id="courses_show_select" class="courses_show_select">
												<option>06</option>
												<option>12</option>
												<option>24</option>
												<option>36</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div> 
			</div>
		</div>
	</div>
	@endsection
	 