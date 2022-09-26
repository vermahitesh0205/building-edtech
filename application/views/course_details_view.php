<!DOCTYPE html>
<html lang="en">
<head>
<!-- ======================Top-Header============Fix========= -->
<?php $this->view('top_header'); ?>
<!-- ======================Top-Header============Fix========= -->
</head>
<body>
<?php $this->view($header_view); ?>
<!-- ========================Header==============Fix========= -->

<!-- ========================SideBar=============Fix========= -->
<?php $this->view($sidebar_list); ?>
<!-- =========================Model========================== -->
	<!-- Video Model Start -->
	<div class="modal vd_mdl fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body">
					<!-- <iframe src="<?php echo !empty($a_value[0]->m_course_video_link) ? str_replace("watch?v=","embed/", $a_value[0]->m_course_video_link) : "https://www.youtube.com/embed/2XVCLST7Qqk"; ?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
					   <!------------- PLYR.IO ------------>
                 <link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">

                <div class="plyr__video-embed" id="player">
                  <iframe height="500" src="<?php echo $a_value[0]->m_course_video_link ?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
                </div>

                  <script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
                <script>const player = new Plyr('#player');</script> 
                <!------------- PLYR.IO ------------>


				</div>
				
			</div>
		</div>
	</div>
	<!-- Video Model End -->
<!-- ========================/Model========================== -->

<!-- ========================Header==============Fix========= -->

<!-- ========================SideBar=============Fix========= -->

<!-- =========================View===============Fix========= -->
	<!-- Body Start -->
	<div class="wrapper _bg4586">
<!-- ======================Page Style======================== -->
<style type="text/css">
	._htg452{ margin-bottom: 4%; }
</style>
<!-- =====================/Page Style======================== -->

<!-- =====================Page Content======================= -->
		<div class="_215b01">
			<div class="container-fluid">	
				<div class="row">
					<div class="col-lg-12">
						<div class="section3125">							
							<div class="row justify-content-center">						
								<div class="col-lg-6 col-md-5 col-10">						
									<div class="preview_video">						
										<a href="#" class="fcrse_img" data-toggle="modal" data-target="#videoModal">
	<?php $img_link = base_url('assets/images/default-banner.png');
	if (!empty($a_value[0]->m_course_banner)) { if (file_exists('admin/uploads/courses/'.$a_value[0]->m_course_banner)){ $img_link = base_url('admin/uploads/courses/').$a_value[0]->m_course_banner; 
	}} ?>
											<img src="<?php echo $img_link; ?>" alt="">
											<div class="course-overlay">
												<div class="badge_seller"><?php echo $a_value[0]->course_type ?> Course</div>
												<span class="play_btn1"><i class="uil uil-play"></i></span>
												<span class="_215b02">Preview this course</span>
											</div>
										</a>
									</div>
									<div class="_215b10">										
										<a href="#" class="_215b11 add-to-wishlist" data-id="<?php echo $a_value[0]->m_course_id ?>" data-type="1">
											<span><i class='uil uil-heart-alt'></i></span>Wishlist
										</a>
										<a href="#" class="_215b12">										
											<span><i class="uil uil-windsock"></i></span>Report abuse
										</a>
									</div>
									<div class="_215b10">
										<a href="#" class="_215b11">
											<span></span> 
										</a>
										<a href="#" class="_215b12">
											<span></span> 
										</a>
									</div>
								</div>
								<div class="col-lg-6 col-md-7 col-12">
									<div class="_215b03 topi">
										<h2><?php echo $a_value[0]->m_course_title ?></h2>
										<span class="_215b04"><?php echo $a_value[0]->m_course_intro; ?></span>
									</div>
									<div class="_215b05" style="display: none;">
										<div class="crse_reviews mr-2">
											<i class="uil uil-star"></i>4.5
										</div>
										(81,665 ratings)
									</div>
									<div class="_215b05">										
										<span>Actual Price ₹ <?php echo $a_value[0]->m_course_price; ?>  </span> ,  	
										<span> Offer Price ₹ <?php echo $a_value[0]->m_course_offer_price; ?></span>
									</div>
									<div class="_215b06">										
										<div class="_215b07">
											<span><i class='uil uil-comment'></i></span>
											English, Hindi
										</div>
									</div>
									<div class="_215b05">
										Last updated : <?php echo $a_value[0]->course_modified; ?>
									</div>
									<ul class="_215b31">
										<li> <?php echo $action_btn; ?> </li>
									</ul>
									<div class="_215fgt1">										
										30-Day Money-Back Guarantee
									</div>
								</div>							
							</div>							
						</div>							
					</div>															
				</div>
			</div>
		</div>
		<div class="_215b15 _byt1458 bg-white">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="user_dt5">
							<div class="user_dt_left">
								<div class="live_user_dt">
									<div class="user_img5">

<?php $fav_img = base_url('assets/images/fav.png'); 
//$fav_img_title = get_settings('app_icon');
if (!empty($fav_img_title)) { if (file_exists('admin/uploads/'.$fav_img_title)){
  $fav_img = base_url('admin/uploads/').$fav_img_title;
} }

$app_logo = DefaultLogoLink;  $logo_title = get_settings('app_logo');
	            if (!empty($logo_title)) { if (file_exists('admin/uploads/'.$logo_title)){
	              $app_logo = base_url('admin/uploads/').$logo_title;
	            } }
?>
										<a href="#"><img src="<?php echo base_url('assets/images/Icon2.png'); ?>" alt=""></a>												
									</div>
									<div class="user_cntnt" style = "text-align:center;height:50px;">
										<a style = "margin-top:15px;" href="#" class="_df7852"><?php echo get_settings('app_name'); ?></a>
										<!-- <button class="subscribe-btn">Subscribe</button> -->
									</div>
								</div>
							</div>
							<div class="user_dt_right">
								<ul>
									<li>
										<a href="#" class="lkcm152"><i class="uil uil-eye"></i><span><?php echo $a_value[0]->m_course_view; ?></span></a>
									</li>
									<!-- <li>
										<a href="#" class="lkcm152"><i class="uil uil-thumbs-up"></i><span>100</span></a>
									</li> -->
									<!--<li>-->
									 
									<!--	<a href="#" class="lkcm152 danger"><i class="fa fa-play" aria-hidden="true"></i><span>Play live</span></a>-->
									<!--</li>-->
									<li>
										<a href="#" class="lkcm152"><i class="uil uil-share-alt"></i><span>9</span></a>
									</li>
									
									
								</ul>
							</div>
						</div>
						<div class="course_tabs">
							<nav>
								<div class="nav nav-tabs tab_crse justify-content-center" id="nav-tab" role="tablist">
									
									<a class="nav-item nav-link active" id="nav-courses-tab" data-toggle="tab" href="#nav-courses" role="tab" aria-selected="false">Course Details</a>
									<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-selected="true">Description</a>
									<a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="false">Reviews</a>
								</div>
							</nav>						
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="_215b17">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="course_tab_content">
							<div class="tab-content" id="nav-tabContent">


	<!--========01========-->	<div class="tab-pane fade " id="nav-about" role="tabpanel">
									<div class="_htg451">
										<div class="_htg452 mt-35">
											<h3>Description</h3>
											<?php echo $a_value[0]->m_course_description; ?>
										</div>
									</div>							
	<!--=======/01========-->	</div>

								
	<!--========02========-->	

	
            <div class="row py-3">
                <div class="col-6">
			        <h3>Course Subjects</h3>
                </div>
                <div class="col-6 text-right">
                    <ul class="accordion-expand-holder">
					<li><span class="accordion-expand-all _d1452">Expand all</span></li>
					<li><span class="_fgr123"></span></li>
				</ul>
                </div>
            </div>
		<?php 
		if (!empty($subject_list)) { foreach ($subject_list as $vl) {
		?>
			<div id="accordion" class="ui-accordion ui-widget ui-helper-reset">
				<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
					<div class="section-header-left">
						<span class="section-title-wrapper">
							<i class='uil uil-presentation-play crse_icon'></i>
							<span class="section-title-text" title="<?php echo 'Subject: '.$vl->m_subject_title; ?>"><?php echo $vl->m_subject_title; ?></span>
						</span>
					</div>
					<div class="section-header-right">
						<span class="num-items-in-section"><?php echo (!empty($vl->topic_list)) ? sizeof($vl->topic_list) : 0; ?> Topics</span>
						<span class="section-header-length"></span>
					</div>
				</a>
				<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
<?php 
if (!empty($vl->topic_list)) { foreach ($vl->topic_list as $vl1) {
?>

					<div class="lecture-container">
						<div class="left-content">
							<i class='uil uil-file icon_142'></i>
							<div class="top">
								<div class="title" title="<?php echo 'Topic: '.$vl1->ml_title; ?>"><?php echo $vl1->ml_title; ?></div>
							</div>
						</div>
						<div class="details">
							<a href="#" class="preview-text"></a>
							<span class="content-summary"></span>
						</div>
					</div>
<?php 
} }
?>
				</div>
            </div>
<?php 
} } 
?>
        </div>
    </div> 
	<!--=======/02========-->	



	<!--========03========-->	<div class="tab-pane fade" id="nav-reviews" role="tabpanel">
									<div class="student_reviews">
										<div class="row">
											<div class="col-lg-5">
												<div class="reviews_left">
													<h3>Student Feedback</h3>
													<div class="total_rating">
														<div class="_rate001">4.6</div>														
														<div class="rating-box">
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star half-star"></span>
														</div>
														<div class="_rate002">Course Rating</div>	
													</div>
													<div class="_rate003">
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
															</div>
															<div class="_rate002">70%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">40%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-5" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">5%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-2" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">1%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">1%</div>
														</div>
													</div>
												</div>												
											</div>
											<div class="col-lg-7">
												<div class="review_right">
													<div class="review_right_heading">
														<h3>Reviews</h3>
														<div class="review_search">
															<input class="rv_srch" type="text" placeholder="Search reviews...">
															<button class="rvsrch_btn"><i class='uil uil-search'></i></button>
														</div>
													</div>
												</div>
												<div class="review_all120">
												<?php
										$i = 0;    
											
										if(!empty($testimonials))  
										{
											
											foreach($testimonials as $testimonial)	
											{
												

											echo '
											<div class="review_item">
												<div class="review_usr_dt">
													<img src="images/default-icon.png" alt="">
													<div class="rv1458">
														<h4 class="tutor_name1">'.$testimonial->kh_user_fname.'</h4>
														// <span class="time_145">2 hour ago</span>
													</div>
												</div>
												<div class="rating-box mt-20">
													<span class="rating-star full-star"></span><h2>'.$testimonial->rating.'</h2>
													// <span class="rating-star full-star"></span>
													// <span class="rating-star full-star"></span>
													// <span class="rating-star full-star"></span>
													// <span class="rating-star half-star"></span>
												</div>
												<p class="rvds10">'.$testimonial->review.'</p>
												<div class="rpt100">
													<span>Was this review helpful?</span>
													<div class="radio--group-inline-container">
														<div class="radio-item">
															<input id="radio-1" name="radio" type="radio">
															<label for="radio-1" class="radio-label">Yes</label>
														</div>
														<div class="radio-item">
															<input id="radio-2" name="radio" type="radio">
															<label  for="radio-2" class="radio-label">No</label>
														</div>
													</div>
													<a href="#" class="report145">Report</a>
												</div>
											</div>
											';
												
										}
										
										}
									?>
												
													
													<div class="review_item">
														<a href="#" class="more_reviews">See More Reviews</a>
													</div>
												</div>

											</div>
										</div>
									</div>
	<!--=======/03========-->	</div>
							</div>
						</div>
						
					</div>
					<?php $this->view($footer_view); ?>
				</div>
            </div>
            
        </div>
<!-- ====================/Page Content======================= -->
	</div>
	<!-- Body End -->
<!-- ======================Top-Footer============Fix========= -->
<?php $this->view('top_footer'); ?>
<!-- ======================Top-Footer============Fix========= -->
</body>
</html>

<script type="text/javascript">
$("#btn-free-course").on('click', function(){
  var clkbtn = $("#btn-free-course"); clkbtn.prop('disabled',true);

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Checkout/add_free_course'); ?>",
    data: {id : clkbtn.data('id')},
    dataType: "JSON",
    success: function(data) { 

      if (data.status=='success') { 
      	swal(data.message, {icon: "info", timer: 1000, }); 
        setTimeout(function() {
         window.location.href = "<?php echo site_url('My/course_subject') ?>?id="+data.id
        }, 1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "info", timer: 5000, }); 
      }

    }, error: function (jqXHR, status, err) { clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
});
	
</script>