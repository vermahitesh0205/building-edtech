<!DOCTYPE html>
<html lang="en">
<head>
<!-- ======================Top-Header============Fix========= -->
<?php $this->view('top_header'); ?>
<!-- ======================Top-Header============Fix========= -->
</head>
<body>
<!-- ========================Header==============Fix========= -->
<?php $this->view($header_view); ?>
<!-- ========================Header==============Fix========= -->

<!-- ========================SideBar=============Fix========= -->
<?php $this->view($sidebar_list); ?>
<!-- ========================SideBar=============Fix========= -->

<!-- =========================View===============Fix========= -->
	<!-- Body Start -->
	<div class="wrapper" style="padding-top: 60px;">
<!-- =====================Page Content======================= -->
		<div class="_215b15">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">						
						<div class="title125">						
							<div class="titleleft">					
								<div class="ttl121">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="<?php echo site_url('Home'); ?>" style="color:white;">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page" style="color:white;">Contact Us</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="title126">	
							<h2>Contact Us</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contact1256">
			<div class="container">
				<div class="row">					
					<!-- <div class="col-lg-3 col-md-6">
						<a href="<?php echo site_url('Help'); ?>" class="contact_link_step">
							<img src="<?php echo base_url('assets/images/location_icon.svg'); ?>" alt="">
							<p> एकलव्य IAS अकादमी कुर्मी भवन, द्वितीय तल, सड़क-05, सेक्टर-7, भिलाई 490006</p> </a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="<?php echo site_url('Blog'); ?>" class="contact_link_step">
							<img src="<?php echo base_url('assets/images/location_icon.svg'); ?>" alt="">
							<p>एकलव्य IAS अकादमी शासकीय महाविद्यालय कांकेर के सामने द्वितीय तल कांकेर ,494334</p> </a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="<?php echo site_url('Career'); ?>" class="contact_link_step">
							<img src="<?php echo base_url('assets/images/phone_icon.svg'); ?>" alt="">
							<p>+91 81036-73017,<br> +91 79995-03139,<br> +91 77480-22627</p>
						</a>												
					</div>

					<div class="col-lg-3 col-md-6">
						<a href="<?php echo site_url('Career'); ?>" class="contact_link_step">
							<img src="<?php echo base_url('assets/images/email_icon.svg'); ?>" alt="">
							<p><?php echo get_settings('app_email'); ?></p>
						</a>												
					</div> -->
					<div class="col-lg-8">
						<div class="contact_map">
							<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.6958889542143!2d81.32057281461496!3d21.164497488507198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293ca38da15f1d%3A0xc8b913d45a523cd8!2sLogixhunt%20-%20(website%20and%20app%20development%20company%20in%20bhilai%20chhattisgarh)%20-%20(internship%20in%20web%20and%20android%20app%20development%20in%20bhilai)!5e0!3m2!1sen!2sin!4v1646380857365!5m2!1sen!2sin" style="width: 100%;height: inherit;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
						</div>
						
					</div>
					<div class="col-lg-4">
						<div class="contact_info">
							<div class="checkout_title">
								<h4>Contact Information</h4>
								<img src="<?php echo base_url('assets/images/line.svg'); ?>" alt="">
							</div>
							<ul class="contact_list_info">

								<li><div class="txt_cntct">
								    <span class="cntct_895"><i class="uil uil-location-point"></i>Address :</span>
								    <p>
								        Plot No 3, Maitri Kunj, Risali<br>Bhilai, Chhattisgarh (490006)
								        <br><br>
								        A-119, Market Area, Smriti Nagar<br>Bhilai, Chhattisgarh (490020)
								    </p>
								    </div>
								</li>
								<li class="my-4"><div class="txt_cntct"><a href="mailto:logixhunttech@gmail.com"><span class="cntct_895"><i class="uil uil-envelope"></i>Email :</span><p>logixhunttech@gmail.com</p></a></div></li>
								<li><div class="txt_cntct"><span class="cntct_895"><i class="uil uil-mobile-android-alt"></i>Phone :</span><p><a href="tel:+917879122060">+91-78791-22060</a><br><a href="tel:+917999845114">+91-79998-45114</a></p></div></li>
							</ul>
						</div>												
					</div>
				</div>
			</div>
		</div>
<!-- ====================/Page Content======================= -->

<!-- ========================Footer==============Fix========= -->
<?php $this->view($footer_view); ?>
<!-- ========================Footer==============Fix========= -->
	</div>
	<!-- Body End -->
<!-- ======================Top-Footer============Fix========= -->
<?php $this->view('top_footer'); ?>

<!-- ======================Top-Footer============Fix========= -->
</body>
</html>