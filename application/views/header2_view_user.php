<!-- ========================Header==============Fix========= -->

<!-- ========================Header==============Fix========= -->
	<!-- Header Start -->
	<header class="header clearfix">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="back_link">
						<a href="<?php echo site_url('Home'); ?>" class="hde151">Back To Home</a>
					</div>
					<div class="ml_item">
						<div class="main_logo main_logo15" id="logo">
    <?php $app_logo = DefaultLogoLink;  $logo_title = get_settings('app_logo');
        if (!empty($logo_title)) { if (file_exists('admin/uploads/'.$logo_title)){
          $app_logo = base_url('admin/uploads/').$logo_title;
        } }
    ?>
							<a href="<?php echo site_url('Home'); ?>"><img style="max-height: 55px; max-width: 65px;" src="<?php echo $app_logo; ?>" alt="Logo"></a>
							<a href="<?php echo site_url('Home'); ?>"><img style="max-height: 55px; max-width: 65px;" class="logo-inverse" src="<?php echo $app_logo; ?>" alt="Logo"></a>
						</div>				
					</div>				
					<div class="header_right pr-0">
						<ul>				
							<li class="ui top right pointing dropdown">
<?php $profile_img = base_url('assets/images/hd_dp.jpg');  
if (!empty($log_customer[0]->kh_user_image)) { if (file_exists('admin/uploads/users/'.$log_customer[0]->kh_user_image)){
  $profile_img = base_url('admin/uploads/users/').$log_customer[0]->kh_user_image;
} }
?>
								<a href="#" class="opts_account">
									<img src="<?php echo $profile_img; ?>" alt="">
								</a>
								<div class="menu dropdown_account">
									<div class="channel_my">
										<div class="profile_link">
											<img src="<?php echo $profile_img; ?>" alt="">
											<div class="pd_content">
												<div class="rhte85">
													<h6><?php echo $log_customer[0]->kh_user_fname; ?></h6>
													<div class="mef78" title="Verify">
														<i class='uil uil-check-circle'></i>
													</div>
												</div>
												<span><?php echo $log_customer[0]->kh_user_email; ?></span>
											</div>							
										</div>
										<a href="<?php echo site_url('My/profile'); ?>" class="dp_link_12">View Profile</a>
									</div>
									<div class="night_mode_switch__btn">
										<a href="#" id="night-mode" class="btn-night-mode">
											<i class="uil uil-moon"></i> Night mode
											<span class="btn-night-mode-switch">
												<span class="uk-switch-button"></span>
											</span>
										</a>
									</div>						
									<a href="<?php echo site_url('Logout'); ?>" class="item channel_item">Sign Out</a>
								</div>
							</li>
						</ul>
					</div>		
				</div>		
			</div>
		</div>
	</header>
	<!-- Header End -->
<!-- ========================Header==============Fix========= -->

<!-- ========================Header==============Fix========= -->