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
							<li><a href="{{ route('about') }}">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
	<!-- Blog -->

	<div class="courses">		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Contact</h2>
						<div class="section_subtitle"></div>						 
					</div>
				</div>
			</div>
			<div class="row courses_row">	 
						<div class="col-lg-4 course_col">
							<div class="course"> 
								<div class="course_body">
									<h3 class="course_title">Dr. Nishchal N. Pandey</h3>
									<div class="course_teacher">Convener</div>
									<div class="course_text">
										<p> Email: nina@ntc.net.np </p> 
									</div>  
								</div>						 
							</div>
						</div> 	 

						<div class="col-lg-4 course_col">
							<div class="course"> 
								<div class="course_body">
									<h3 class="course_title">Mahesh Bhatta </h3>
									<div class="course_teacher">Project Manager</div>
									<div class="course_text">
										<p> Email: mahesh_bhatta01@yahoo.com</p> 
									</div>  
								</div>						 
							</div>
						</div> 	 

						<div class="col-lg-4 course_col">
							<div class="course"> 
								<div class="course_body">
									<h3 class="course_title">Ms. anishma Acharya </h3>
									<div class="course_teacher">Account Officer</div>
									<div class="course_text">
										<p>Email: Anishma.acharya01@hotmail.com</p> 
									</div>  
								</div>						 
							</div>
						</div> 	 
			</div>			
		</div>
	</div> 
	@endsection