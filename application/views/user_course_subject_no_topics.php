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
					<div class="col-md-12">
<div>
	<marquee width="100%" direction="down" height="350px">
		<center>
			<p style="font-weight: 1000; font-size: 100px; margin: auto;">Comming</p>
			<p style="font-weight: 800; font-size: 70px;">Soon . . .</p>
		</center>
    </marquee>
</div>
					</div>
					<div class="col-md-12">



						<div class="section3125 mb-15 mt-20">
							<h4 class="item_title">Related Subjects</h4>
	<a href="<?php echo site_url('My/course_subject?id=').$course_id; ?>" class="see150">See all</a>
							<div class="la5lo1">
								<div class="owl-carousel live_stream owl-theme">
    <?php if(!empty($all_subjects)){ 
		$dflt_img = base_url('assets/images/default-icon.png');
		$img_link = base_url('admin/uploads/subject/');
		$dtl_link = site_url('My/subject_topics?cr='.$course_id.'&id=');
	    foreach ($all_subjects as $i => $vl) { $cat_img = $dflt_img;

	    	if (!empty($vl->m_subject_icon)) { if (file_exists('admin/uploads/subject/'.$vl->m_subject_icon)){ $cat_img = $img_link.$vl->m_subject_icon; } }
	?>


									<div class="item">
										<div class="stream_1">
		<a href="<?php echo $dtl_link.$vl->m_subject_id; ?>" class="stream_bg">
												<img src="<?php echo $cat_img; ?>" alt="">
												<h4><?php echo $vl->m_subject_title; ?></h4>
		</a>
										</div>
									</div>
    <?php } } ?>
								</div>
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