<!-- ========================Header==============Fix========= -->

<!-- ========================Header==============Fix========= -->
	<!-- Header Start -->
	<header class="header clearfix">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<div class="back_link" style="margin-top: 6%;">
						<a href="<?php echo site_url('Home'); ?>" class="hde151">Back To Home</a>
					</div>
				</div>
				<div class="col-8">
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
				</div>
				<div class="col-2">			
					<div class="header_right">
						<ul>				
							<li class="ui top right pointing">
								<div class="night_mode_switch__btn">
									<a href="#" id="night-mode" class="btn-night-mode" style="width: 130%;">
										<i class="uil uil-moon"></i> Night mode
										<span class="btn-night-mode-switch">
											<span class="uk-switch-button"></span>
										</span>
									</a>
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