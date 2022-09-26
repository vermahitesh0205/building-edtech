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
		<div class="sa4d25">
			<div class="container-fluid">
<!-- ========================/View===============Fix========= -->

<!-- =====================Page Content======================= -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="section3125">
							<h4 class="item_title">Popular Course</h4>
							<div class="la5lo1">
								<div class="row">
									<div class="col-md-3">
										<div class="stream_1 mb-30">
	<a href="<?php echo site_url('Course/category?ct='); ?>" class="stream_bg">
												<img src="<?php echo base_url('assets/images/default-icon.png'); ?>" alt="">
												<h4>John Doe</h4>
											</a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="stream_1 mb-30">
											<a href="live_output.html" class="stream_bg">
												<img src="<?php echo base_url('assets/images/left-imgs/img-2.jpg'); ?>" alt="">
												<h4>Jassica</h4>
											</a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="stream_1 mb-30">
											<a href="live_output.html" class="stream_bg">
												<img src="<?php echo base_url('assets/images/left-imgs/img-9.jpg'); ?>" alt="">
												<h4><?php echo get_settings('app_name'); ?></h4>
											</a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="stream_1 mb-30">
											<a href="live_output.html" class="stream_bg">
												<img src="<?php echo base_url('assets/images/left-imgs/img-3.jpg'); ?>" alt="">
												<h4>Joginder Singh</h4>
											</a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="stream_1 mb-30">
											<a href="live_output.html" class="stream_bg">
												<img src="<?php echo base_url('assets/images/left-imgs/img-4.jpg'); ?>" alt="">
												<h4>Zoena</h4>
											</a>
										</div>
									</div>
									<div class="col-md-3"> 
										<div class="stream_1 mb-30">
											<a href="live_output.html" class="stream_bg">
												<img src="<?php echo base_url('assets/images/left-imgs/img-5.jpg'); ?>" alt="">
												<h4>Albert Dua</h4>
											</a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="stream_1 mb-30">
											<a href="live_output.html" class="stream_bg">
												<img src="<?php echo base_url('assets/images/left-imgs/img-6.jpg'); ?>" alt="">
												<h4>Ridhima</h4>
											</a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="stream_1 mb-30">
											<a href="live_output.html" class="stream_bg">
												<img src="<?php echo base_url('assets/images/left-imgs/img-7.jpg'); ?>" alt="">
												<h4>Amritpal</h4>
											</a>
										</div>
									</div>
									<div class="col-md-12">
										<div class="main-loader mt-20">													
											<div class="spinner">
												<div class="bounce1"></div>
												<div class="bounce2"></div>
												<div class="bounce3"></div>
											</div>
											
										</div>
									</div>
                                </div>
                            </div>
                        </div>						
					</div>
					<!-- <div class="col-xl-3 col-lg-4">
						<div class="right_side">							
							<div class="fcrse_3">
								<div class="cater_ttle">
									<h4>Live Streaming</h4>
								</div>
								<div class="live_text">
									<div class="live_icon"><i class="uil uil-kayak"></i></div>
									<div class="live-content">
										<p>Set up your channel and stream live to your students</p>
										<button class="live_link" onclick="window.location.href = '<?php echo site_url('LiveStreams'); ?>';">Get Started</button>
										<span class="livinfo">Info : This feature only for 'Instructors'.</span>
									</div>
								</div>
							</div>							
						</div>
					</div>					 -->
				</div>
<!-- ====================/Page Content======================= -->

<!-- =========================View===============Fix========= -->
            </div>
		</div>
<!-- ========================/View===============Fix========= -->

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