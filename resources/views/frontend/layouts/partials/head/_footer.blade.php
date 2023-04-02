<div class="counter">
		<div class="counter_background"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						<h2 class="counter_title">We would like to hear from you.</h2> 
						<div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">
							
							<!-- Milestone -->
							<div class="milestone">
							<h4 style="color:#fff;">Location</h4>
									<p style="color:#fff;">Kathmandu, Nepal</p>
							</div>

							<!-- Milestone -->
							<div class="milestone">
							<h4 style="color:#fff;">Email</h4>
									<p style="color:#fff;">nina@ntc.net.np</p>
							</div>

							<!-- Milestone -->
							<div class="milestone">
							<h4 style="color:#fff;">Call</h4>
									<p style="color:#fff;"> (+9771) 4432079</p>
							</div>
 

						</div>
					</div>

				</div>
			</div>

			<div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="#">
							<div class="counter_form_title">Contact Us</div>
							<input type="text" class="counter_input" placeholder="Your Name:" required="required">
							<input type="tel" class="counter_input" placeholder="Phone:" required="required">							 
							<textarea class="counter_input counter_text_input" placeholder="Message:" required="required"></textarea>
							<button type="submit" class="counter_form_button">submit now</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
  	
	
	<div class="partners">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="partners_slider_container">
						<div class="owl-carousel owl-theme partners_slider"> 
							<div class="owl-item partner_item">
								<a href="http://www.bipss.org.bd/" target="blank">
									<img src="{{ asset('images/partners/bipss.jpg') }}" title="BIPSS" alt="">
								</a>
							</div>
							<div class="owl-item partner_item">
								<a href="http://www.kas.de/politikdialog-asien/en/" target="blank">
									<img src="{{ asset('images/partners/KAS.jpg') }}" title="BIPSS" alt="">
								</a>
							</div>
							<div class="owl-item partner_item">
								<a href="http://rcss.org/" target="blank">
									<img src="{{ asset('images/partners/rcss.jpg') }}" title="BIPSS" alt="">
								</a>
							</div>
							<div class="owl-item partner_item">
								<a href="https://www.lki.lk/" target="blank">
									<img src="{{ asset('images/partners/kadirgamar.jpg') }}" title="BIPSS" alt="">
								</a>
							</div>
							<div class="owl-item partner_item">
								<a href="http://www.insssl.lk/insssl.php" target="blank">
									<img src="{{ asset('images/partners/INSSSL.jpg') }}" title="BIPSS" alt="">
								</a>
							</div>
							<div class="owl-item partner_item">
								<a href="https://www.isas.nus.edu.sg/Pages/home.aspx" target="blank">
									<img src="{{ asset('images/partners/isaslogo333.jpg') }}" title="BIPSS" alt="">
								</a>
							</div>
							<div class="owl-item partner_item">
								<a href="https://www.cosatt.org" target="blank">
									<img src="{{ asset('images/partners/COSATT_logo.JPG') }}" title="BIPSS" alt="">
								</a>
							</div>
							<div class="owl-item partner_item">
								<a href="http://www.afghanjustice.org" target="blank">
									<img src="{{ asset('images/partners/ajo.JPG') }}" title="BIPSS" alt="">
								</a>
							</div>
							<div class="owl-item partner_item">
								<a href="http://www.biiss.org/" target="blank">
									<img src="{{ asset('images/partners/bliss.jpg') }}" title="BIPSS" alt="">
								</a>
							</div>
							<div class="owl-item partner_item">
								<a href="http://www.bhutanstudies.org.bt" target="blank">
									<img src="{{ asset('images/partners/CBS.JPG') }}" title="BIPSS" alt="">
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer">
		<div class="footer_background"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-4 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">COSATT</div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>South Asia continues to be the most volatile region in the world, involved in issues relating to Insurgency, 
											Terrorism, Border Disputes and the Environment.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-4 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email:  nina@ntc.net.np</li>
											<li>Phone:  (+9771) 4432079</li>
											<li>Kathmandu, Nepal</li>
										</ul>
									</div>
								</div> 
							</div>

							<div class="col-lg-4 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Contact Us</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="{{ url('/') }}">Home</a></li>
											<li><a href="{{ route('about') }}">About</a></li>
											<li><a href="{{ route('publications') }}">Publications</a></li>
											<li><a href="{{ route('events') }}">Events</a></li>
											<li><a href="{{ route('contact') }}">Contact</a></li>  
										</ul>
									</div>
								</div>
								
							</div> 

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row" style="color:#fff;">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text">
		Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  
		<a href="https://isnp.com.np" target="_blank">Intellisoft Nepal Pvt. Ltd</a>
					</div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>