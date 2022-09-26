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
		<div class="_215b15">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">						
						<div class="title125">						
							<div class="titleleft">					
								<div class="ttl121">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="<?php echo site_url('Home'); ?>">Home</a></li>
											<li class="breadcrumb-item"><a href="<?php echo site_url('Blog'); ?>">Our Blog</a></li>
											<li class="breadcrumb-item active" aria-current="page">Single Blog View</li>
										</ol>
									</nav>
								</div>
							</div>
							<div class="titleright">						
								<a href="<?php echo site_url('Blog'); ?>" class="blog_link"><i class="uil uil-angle-double-left"></i>Back to Blog</a>
							</div>
						</div>
						<div class="title126">	
							<h2>Blog Title Here</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="faq1256">
			<div class="container">
				<div class="row justify-content-md-center">					
					<div class="col-md-8">
						<div class="bg_blog2">
							<img src="<?php echo base_url('assets/images/blog/big_blog.jpg'); ?>" alt="">
						</div>
						<div class="vew120 frc123">
							<div class="vdtodt55">
								<span class="vdt24">109k views</span>
								<span class="vdt24">March 10, 2020</span>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur volutpat maximus pellentesque. Integer sem enim, luctus at nibh at, condimentum sagittis sapien. Sed tempus ipsum erat, sit amet efficitur velit interdum eu. Vestibulum hendrerit id dolor eu scelerisque. Phasellus ex dui, consequat nec feugiat eu, dapibus eget ante. Sed sodales interdum dui, at euismod mi feugiat hendrerit. Suspendisse auctor libero in tempor mollis. Nulla et dolor velit. Aliquam sit amet luctus quam.</p>
						</div>
						<div class="vew120 mt-35 mb-30">			
							<h4>Why did you decide to teach on <?php echo get_settings('app_name'); ?>?</h4>
							<p>Nam a egestas libero, eget eleifend turpis. Sed id ipsum a ipsum aliquam laoreet sit amet sit amet nibh. Proin dapibus, libero sed posuere rhoncus, orci mi <?php echo get_settings('app_name'); ?> enim, at accumsan eros massa lacinia mi. Nunc eget finibus felis, volutpat malesuada sem. Aliquam ac nisl pellentesque, varius neque sit amet, porttitor nunc. Nullam elit tellus, dapibus non eleifend sed, hendrerit eget velit. Aliquam ut felis dictum, tincidunt magna vitae, aliquam massa. In porttitor tristique quam, non dignissim sapien pharetra ultrices. Cras non ante non velit mollis mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque et bibendum urna, eget consequat sapien. Integer sed condimentum nibh. Integer id neque tristique, lobortis massa ac, dapibus nibh. Donec nulla odio, porttitor ac rutrum eget, volutpat a velit. Curabitur et enim quis diam congue dictum et vitae dui. Nulla tortor orci, luctus a pretium vel, ultrices porta nisl.</p>
							<p class="mt-4">Etiam lobortis dictum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse ultricies efficitur dui, suscipit tempus elit condimentum quis. Duis sed vestibulum tortor, eget <?php echo get_settings('app_name'); ?> odio.</p>
						</div>
						<div class="vew120 mt-35 mb-30">			
							<h4>Did you have any prior on- or offline teaching experience prior to publishing your first <?php echo get_settings('app_name'); ?> course?</h4>
							<p>Morbi lectus nunc, lacinia ut consequat a, semper vel erat. Duis ut lacus nec dui sodales mattis. Mauris tellus dolor, pulvinar sit amet pretium a, malesuada sed tellus. Aliquam ultrices elit neque, quis lacinia ex porttitor non. Donec ac iaculis turpis. Nulla lacinia enim quis orci aliquam, non <?php echo get_settings('app_name'); ?> urna pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus in mi a nisi auctor interdum. Vivamus faucibus magna sed elit interdum consequat. Vestibulum eu tortor vel ante feugiat faucibus quis et urna. Quisque interdum ac enim eu tempus. Fusce viverra, lectus egestas tincidunt <?php echo get_settings('app_name'); ?>, tortor sapien convallis metus, vitae auctor risus metus vel nisi. Aenean dapibus bibendum mauris ut iaculis.</p>
						</div>
						<div class="vew120 mt-35 mb-30">			
							<h4>What are the most rewarding aspects of teaching on <?php echo get_settings('app_name'); ?>?</h4>
							<p>Quisque et bibendum urna, eget consequat sapien. Integer sed condimentum nibh. Integer id neque tristique, lobortis massa ac, dapibus nibh. Donec nulla odio, porttitor ac rutrum eget, volutpat a velit. Curabitur et enim quis diam congue dictum et vitae dui. Nulla tortor orci, luctus a pretium vel, ultrices porta nisl.</p>
						</div>					
					</div>
					<div class="col-md-12">
						<div class="blog_pagination">
							<a href="#" class="bp_left">
								<i class="uil uil-angle-double-left"></i>
								<div class="kslu15">
									<div class="prevlink">Previous</div>
									<div class="prev_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
								</div>
							</a>
							<a href="#" class="bp_right">								
								<div class="kslu16">
									<div class="prevlink1">Next</div>
									<div class="prev_title1">Vestibulum vulputate nulla quis dignissim ultricies.</div>
								</div>
								<i class="uil uil-angle-double-right"></i>
							</a>
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