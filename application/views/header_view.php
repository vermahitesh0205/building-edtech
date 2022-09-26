<!-- ========================Header==============Fix========= -->

<!-- ========================Header==============Fix========= -->
 
	<!-- Header Start -->
	<header class="header clearfix">
		<button type="button" id="toggleMenu" class="toggle_menu">
		  <i class='uil uil-bars'></i>
		</button>
		<button id="collapse_menu" class="collapse_menu">
			<i class="uil uil-bars collapse_menu--icon "></i>
			<span class="collapse_menu--label"></span>
		</button>
		<div class="main_logo" id="logo">
		    <?php $app_logo = DefaultLogoLink;  $logo_title = get_settings('app_logo');
	            if (!empty($logo_title)) { if (file_exists('admin/uploads/'.$logo_title)){
	              $app_logo = base_url('admin/uploads/').$logo_title;
	            } }
            ?>
			<a href="<?php echo site_url('Home'); ?>"><img style="max-width: 150px;" src="<?php echo $app_logo; ?>" alt="LOGO"></a>
			<a href="<?php echo site_url('Home'); ?>"><img style="max-width: 150px;" class="logo-inverse" src="<?php echo $app_logo; ?>" alt=""></a>
		</div>
		<div class="search120">
			<div class="ui search">
			  <div class="ui left icon input swdh10">
				<input class="prompt srch10" type="text" placeholder="Search for  Courses, Tests Series, Notes and more.." style="background:gray">
				<i class='uil uil-search-alt icon icon1'></i>
			  </div>
			</div>
		</div>
		<div class="header_right">
			<ul>
				<li>
					<a href="<?php echo site_url('Login'); ?>" class="upload_btn">Log-In</a>
				</li>
				<li>
					<a href="tel:+917999845114" class="btn btn-success rounded-pill">Call us</a>
				</li>
				<li>
					<a href="<?php echo site_url('Home'); ?>" class="option_links"><i class='uil uil-home-alt'></i></a>
				</li>
				<li>
					<a href="<?php echo site_url('Home'); ?>" class="option_links"><i class="uil uil-bell"></i></a>
				</li>
				<li><div class="night_mode_switch__btn">
							<a href="#" id="night-mode" class="btn-night-mode">
								<i class="uil uil-moon"></i> <!--<span>Night mode</span>
								<!--<span class="btn-night-mode-switch">
									<span class="uk-switch-button"></span>
								</span>-->
							</a>
						</div>
				</li>
			</ul>
		</div>
	</header>
	<!-- Header End -->
<!-- ========================Header==============Fix========= -->

<!-- ========================Header==============Fix========= -->