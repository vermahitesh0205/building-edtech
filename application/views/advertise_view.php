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
	<div class="wrapper">
<!-- =====================Page Content======================= -->
		<div class="container coming_soon_style">
			<div class="row">
				<div class="col-md-12">
					<div class="cmtk_group">
						<div class="ct-logo" style="display: none;">
							<a href="<?php echo site_url('Home'); ?>"><img src="<?php echo base_url('assets/images/ct_logo.svg'); ?>" alt=""></a>
						</div>
						<div class="cmtk_dt">
							<div class="col-lg-8 no-float no-padding center-block">
								<ul class="clock block clearfix">
									<li>
										<span class="remaining-days" id="days">00</span>
										<label>Days</label>
									</li>
									<li class="sep">:</li>
									<li>
										<span class="remaining-hours" id="hours">00</span>
										<label>hours</label>
									</li>
									<li class="sep">:</li>
									<li>
										<span class="remaining-minutes" id="minutes">00</span>
										<label>minutes</label>
									</li>
									<li class="sep">:</li>
									<li>
										<span class="remaining-seconds" id="seconds">00</span>
										<label>seconds</label>
									</li>
								</ul>
							</div>
							<h4 class="thnk_title1">We’ll be coming soon!</h4>
							<div class="col-lg-4 col-md-6 no-float no-padding noti-block">
								<form>
									<div class="ui search focus">
										<div class="ui left icon input swdh11 thykh19">
											<input class="prompt srch_explore" type="email" name="emailaddress" value="" id="id_email" required="" maxlength="64" placeholder="Email address">															
											<button class="noti-btn" type="submit">Notify Me</button>
										</div>									
									</div>
								</form>
							</div>
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