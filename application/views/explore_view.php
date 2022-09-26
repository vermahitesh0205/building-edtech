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
					<div class="col-xl-12 col-lg-8">
						<div class="section3125">
							<div class="explore_search">
								<div class="ui search focus">
									<div class="ui left icon input swdh11">
										<input class="prompt srch_explore" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more..">
										<i class="uil uil-search-alt icon icon2"></i>
									</div>
								</div>
							</div>							
						</div>							
					</div>
					<div class="col-md-12">
						<div class="_14d25">
							<div class="row">


	<?php if(!empty($all_value)){ 
		$img_link = base_url('admin/uploads/offers/');
		$dflt_img = base_url('assets/images/default-banner.png');
		$dtl_link = site_url('Course/offer?of=');
	    foreach ($all_value as $i => $vl) { $cat_img = $dflt_img;
	    	if (!empty($vl->m_offer_image)) { if (file_exists('admin/uploads/offers/'.$vl->m_offer_image)){ $cat_img = $img_link.$vl->m_offer_image; } }
	?>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="fcrse_1 mt-30">
		<a href="<?php echo $dtl_link.$vl->m_offer_id; ?>" class="fcrse_img">
											<img src="<?php echo $dflt_img; ?>" alt="">
											<div class="course-overlay">
											</div>
		</a>
										<div class="fcrse_content">
											<div class="eps_dots more_dropdown">
												<a href="#"><i class="uil uil-ellipsis-v"></i></a>
												<div class="dropdown-content">
													<span><i class='uil uil-share-alt'></i>Share</span>
												</div>																									
											</div>
		<a href="<?php echo $dtl_link.$vl->m_offer_id; ?>" class="crse14s"><?php echo $vl->m_offer_title; ?></a>
										</div>
									</div>
								</div>
    <?php } } ?>

							</div>				
						</div>				
					</div>	

								
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