<?php 
include "./components/header.php";
include "./components/navbar.php";
?>

	
	<div class="page-content bg-white">
		<div class="dz-bnr-inr style-1 dz-bnr-inr-lg overlay-black-middle" style="background-image: url(assets/images/contact.jpg);">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Contact Us</h1>
				</div>
			</div>
		</div>
	
		<section class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 m-b30">
						<div class="section-head style-1">
							<h2 class="title">Get In Touch With Us</h2>
						</div>
						<div class="icon-bx-wraper left m-b40 style-7">
							<div class="icon-bx-sm"> 
								<span class="icon-cell text-primary">
									<i class="flaticon-phone-call"></i>
								</span> 
							</div>
							<div class="icon-content">
								<h4 class="dz-title">Call Now</h4>
								<p>+234 818 883 1355, +234 816 899 2769</p>
							</div>
						</div>
						<div class="icon-bx-wraper left m-b40 style-7">
							<div class="icon-bx-sm"> 
								<span class="icon-cell text-primary">
									<i class="flaticon-placeholder"></i>
								</span> 
							</div>
							<div class="icon-content">
								<h4 class="dz-title">Address</h4>
								<p>Flat 7, God’s Grace Estate No. 3 Water Works Road Rumuola, PortHarcourt, Rivers State, Nigeria.</p>
							</div>
						</div>
						<div class="icon-bx-wraper left style-7">
							<div class="icon-bx-sm"> 
								<span class="icon-cell text-primary">
									<i class="flaticon-mail"></i>
								</span> 
							</div>
							<div class="icon-content">
								<h4 class="dz-title">Email</h4>
								<p>info@sepl.ng, noel.ejidike@sepl.ng</p>
							</div>
						</div>
					</div>
					<div class="col-lg-7 m-b30">
						<div class="contact-area aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
							<form class="dz-form dzForm" method="POST" action="../assets/script/contact_smtp.php.html">
								<input type="hidden" class="form-control" name="dzToDo" value="Contact">
								<div class="dzFormMsg"></div>							
								<div class="row sp10">
									<div class="col-sm-6 m-b20">
										<div class="input-group">
											<input type="text" class="form-control" name="dzFirstName" placeholder="First Name">
										</div>
									</div>
									<div class="col-sm-6 m-b20">
										<div class="input-group">
											<input type="text" class="form-control" name="dzLastName" placeholder="Last Name">
										</div>
									</div>
									<div class="col-sm-6 m-b20">
										<div class="input-group">
											<input type="text" class="form-control" name="dzEmail" placeholder="Email">
										</div>
									</div>
									<div class="col-sm-6 m-b20">
										<div class="input-group">
											<input type="text" class="form-control" name="dzPhoneNumber" placeholder="Phone No.">
										</div>
									</div>
									<div class="col-sm-12 m-b20">
										<div class="input-group">
											<textarea name="dzMessage" class="form-control">Message</textarea>
										</div>
									</div>
									<div class="col-sm-12 m-b20">
										<div class="input-group">
											<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
											<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
										</div>
									</div>
									<div class="col-sm-12">
										<button name="submit" type="submit" value="submit" class="btn btn-primary btn-rounded">SEND MESSAGE</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
        
		<div class="map-iframe style-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d398.33354233323064!2d7.006048604172892!3d4.8343240975016375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce757a2f3f4f%3A0xa4ed71097f69808f!2s3%20Water%20Works%20Rd%2C%20Rumuola%2C%20Port%20Harcourt%20500272%2C%20Rivers!5e0!3m2!1sen!2sng!4v1747167464430!5m2!1sen!2sng" allowfullscreen></iframe>
		</div>
		
	</div>

<?php include "./components/footer.php"; ?>