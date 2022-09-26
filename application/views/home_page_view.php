<!DOCTYPE html> <html lang="en"> <head> <!--
======================Top-Header============Fix========= --> <?php
$this->view('top_header'); ?> <!--
======================Top-Header============Fix========= --> 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	#more1, #more2, #more3, #more4 {display: none; transition: 3s;}
	#myBtn1, #myBtn2, #myBtn3, #myBtn4 {
		cursor: pointer;
		color: #9bca51;
		transition: 3s;
	}
	
</style>
</head> <body>
<!-- ========================Header==============Fix========= --> <?php
$this->view($header_view); ?> <!--
========================Header==============Fix========= -->

<!-- ========================SideBar=============Fix========= -->
<?php $this->view($sidebar_list); ?>
<!-- ========================SideBar=============Fix========= -->

<!-- =========================View===============Fix========= -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid" style = "margin-top:-20px">
<!-- ========================/View===============Fix========= -->

<!-- =====================Page Content======================= -->




				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="section3125">
							<!-- <h4 class="item_title">Popular Categories</h4> -->
							<!-- <a href="<?php //echo site_url('Category/course'); ?>" class="see150">See all</a> -->
							<div class="la5lo1">
								<div class="owl-carousel live_stream owl-theme">

	<?php if(!empty($course_categories)){ 
		$img_link = base_url('admin/uploads/category/');
		$dflt_img = base_url('assets/images/default-icon.png');
		$dtl_link = site_url('Course/category?ct=');
	    foreach ($course_categories as $i => $vl) { $cat_img = $dflt_img;

	    	if (!empty($vl->m_category_icon)) { if (file_exists('admin/uploads/category/'.$vl->m_category_icon)){ $cat_img = $img_link.$vl->m_category_icon; } }
	?>
			
    <?php } }else{ ?>
					<div class="item">
						<div class="stream_1" title="Category Not Found">
							<a href="#" class="stream_bg">
								<img src="<?php echo base_url('assets/images/left-imgs/img-2.jpg'); ?>" alt="">
								<h4>Category</h4>
							</a>
						</div>
					</div>
    <?php } ?>
								</div>
							</div>
						</div>



	
						<div class="clearfix"></div>

<section >

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">


<?php
  $i = 0;    
	
   if(!empty($banner_list))  
   {
	 foreach($banner_list as $banner)	
	 {
		 $i++;
		 if($i == 1)
		 {
			 $active = 'active';
		 }
		 else
		 {
			  $active = '';
		 }

	  echo '<div class="item '.$active.'">
		<img src="'.base_url('admin/uploads/sliders/'.$banner->m_banner_image).'" alt="'.$banner->m_banner_title.'" style="width:100%;">
	  </div>';
	}
   }
 ?>
</div>

<!-- Left and right controls
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a> -->
</div>
</section>

<script type="text/javascript">
 // Sets interval...what is transition slide speed?
$('#myCarousel').carousel({
interval: 3000 });
</script>	

<!-- //////Recomended////////// -->


<?php if(!empty($recomended_courses)){ 
		$img_link = base_url('admin/uploads/courses/');
		$dflt_img = base_url('assets/images/default-banner.png');
		$dtl_link = site_url('Course/offer?of=');
		$dtl2_link= site_url('Course/details?cr=');
	    
	?>

		<div class="section3125 mt-50" >
			<h4 class="item_title">Recomended Courses<?php //echo //$vl->m_offer_title ?></h4>
			<!-- <a href="<?php //echo $dtl_link.$vl->m_course_id; ?>" class="see150">See all</a> -->
			<div class="la5lo1">
				<div class="row">
	 <?php
        //  if(!empty($vl->course_list)){ 
	     //   foreach ($vl->course_list as $i1 => $vl1) { $cat_img = $dflt_img;
			foreach ($recomended_courses as $i => $vl1) {
	    	if (!empty($vl1->m_course_banner)) { if (file_exists('admin/uploads/courses/'.$vl1->m_course_banner)){ $cat_img = $img_link.$vl1->m_course_banner; }}
	?> 

									<div class="item col-lg-4 col-md-6 col-12 p-3" title="<?php echo $vl1->m_course_title ?>">
										<div class="fcrse_1 mb-20">
			<a href="<?php echo $dtl2_link.$vl1->m_course_id; ?>" class="fcrse_img">
												<img src="<?php echo $cat_img; ?>" alt="" class="img-fluid">
												<div class="course-overlay">
													<div class="badge_seller"><?php echo $vl1->m_course_title ?></div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
												</div>
			</a>
											<div class="fcrse_content">
												<div class="vdtodt">
													<span class="vdt14"><?php echo $vl1->m_course_view ?> views</span>
													<span class="vdt14"><?php //echo $vl1->course_modified; ?></span>
												</div>
												<a href="<?php echo $dtl2_link.$vl1->m_course_id; ?>"  class="crse14s"><?php echo $vl1->m_course_title ?></a>
												<div class="row" style = "margin-left:5px;margin-bottom:10px;margin-top:10px;font-weight:bold;font-size:20px;">
												    <span title="Offer Price" style="color: green;">₹<?php echo $vl1->m_course_offer_price; ?></span>
												    <del><span title="Actual Price" class="ml-3" style="font-size:70%;color:#777;">₹<?php echo $vl1->m_course_price; ?></span></del>
												</div>

												<div class="row">
													<div class="col-6 pr-1">
													<a class="add-to-wishlist" data-id="<?php echo $vl1->m_course_id ?>" data-type="1"><button class="btn btn-primary btn-block">Add to wishlist</button></a>
													</div>
													<!--
													<div class="col-4 pr-1">
													<span onclick="window.location.href='<?php echo $dtl2_link.$vl1->m_course_id; ?>';"><button class="btn btn-warning btn-block"><span class="small">View Details</span></button></span>
													</div>-->
													<div class="col-6">
														<button class="btn btn-success btn-block">Enroll Now</button>
													</div>
												</div>
											</div>
										</div>
									</div>


	<?php }// } ?>
                            
                            <div class="section3126" style="background-color:#d3d2dd82;margin-top:25px;">

    							<div class="row justify-content-around align-items-end" style="margin-top: 50px;margin-bottom:50px;">
    								<div class="col-lg-4 col-md-4 col-12">
                                        <img src="<?php echo base_url('assets/images/abt.png'); ?>" class="img-fluid">
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-12">
                                            <h2 class="mb-4"><b>Welcome To Aadya Academy</b></h2>
                                            <p class="text-justify" style="color:#333;line-height:2.5rem;font-size:120%;">
                                               Aadya Academy is an online learning platform for one who is aiming to train and devolop themselves technically. Nowadays all the work are done using websites so this app will 
                                               help you to learn web designing development, android development, LMS webites and many more through which you can ace the IT industry.
                                            </p>
                                            <br>
                                            <p class="text-justify" style="color:#333;line-height:2.5rem;font-size:120%;">
                                                Through this app access your learning materials online from the comfort of your home,world class faculties will be clearing your doubts, video lectures , both long and short 
                                                notes with no boundation of time. Very affordable fees structures for students ,time to time quiz and assesment. Hurry! Unlock the power of mobile learning. 
                                            </p>
                                        </div>
    							</div>
			                </div>
                            
								</div>
							</div>
						</div>
    <?php } //} ?>
    
    
<!-- //////Popular////////// -->

<?php if(!empty($recomended_courses)){ 
		$img_link = base_url('admin/uploads/courses/');
		$dflt_img = base_url('assets/images/default-banner.png');
		$dtl_link = site_url('Course/offer?of=');
		$dtl2_link= site_url('Course/details?cr=');
	    
	?>

		<div class="section3125 mt-50">
			<h4 class="item_title">Popular Courses<?php //echo //$vl->m_offer_title ?></h4>
			<!-- <a href="<?php //echo $dtl_link.$vl->m_course_id; ?>" class="see150">See all</a> -->
			<div class="la5lo1">
				<div class="row">
	 <?php
        //  if(!empty($vl->course_list)){ 
	     //   foreach ($vl->course_list as $i1 => $vl1) { $cat_img = $dflt_img;
			foreach ($popular_courses as $i => $vl1) {
	    	if (!empty($vl1->m_course_banner)) { if (file_exists('admin/uploads/courses/'.$vl1->m_course_banner)){ $cat_img = $img_link.$vl1->m_course_banner; }}
	?> 

									<div class="item col-lg-4 col-md-6 col-12 p-2" title="<?php echo $vl1->m_course_title ?>">
										<div class="fcrse_1 mb-20">
			<a href="<?php echo $dtl2_link.$vl1->m_course_id; ?>" class="fcrse_img">
												<img src="<?php echo $cat_img; ?>" alt="" class="img-fluid">
												<div class="course-overlay">
													<div class="badge_seller"><?php echo $vl1->m_course_title ?></div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
												</div>
			</a>
											<div class="fcrse_content">
												<div class="vdtodt">
													<span class="vdt14"><?php echo $vl1->m_course_view ?> views</span>
													<span class="vdt14"><?php //echo $vl1->course_modified; ?></span>
												</div>
												<a href="<?php echo $dtl2_link.$vl1->m_course_id; ?>"  class="crse14s"><?php echo $vl1->m_course_title ?></a>
												<div class="row" style = "margin-left:5px;margin-bottom:10px;margin-top:10px;font-weight:bold;font-size:20px;">
												    <span title="Offer Price" style="color: green;">₹<?php echo $vl1->m_course_offer_price; ?></span>
												    <del><span title="Actual Price" class="ml-3" style="font-size:70%;color:#777;">₹<?php echo $vl1->m_course_price; ?></span></del>
												</div>
												<div class="row">
													<div class="col-6 pr-1">
													<a class="add-to-wishlist" data-id="<?php echo $vl1->m_course_id ?>" data-type="1"><button class="btn btn-primary btn-block">Add to wishlist</button></a>
													</div>
													<!--
													<div class="col-4 pr-1">
													<span onclick="window.location.href='<?php echo $dtl2_link.$vl1->m_course_id; ?>';"><button class="btn btn-warning btn-block"><span class="small">View Details</span></button></span>
													</div>-->
													<div class="col-6">
														<button class="btn btn-success btn-block">Enroll Now</button>
													</div>
												</div>
												
											</div>
										</div>
									</div>


	<?php }// } ?>
								</div>
							</div>
						</div>
    <?php } //} ?>
	
	                    <div class="section3126" style="background-color:#d3d2dd82;margin-top:25px;">
							<center><h2 style = "margin-top:50px;font-weight:bold"><span style="color:#2972b3;">Our</span> Features</h2><center>

							<div class="row"style="margin-top: 50px;margin-bottom:50px;">
								<div class = "col-lg-3 col-md-4 col-6 p-md-5 p-3" >
								<center class="fet-crd">
									<img src="<?php echo base_url('assets/images/1FAC.png'); ?>" style=" width:50%;">
									<h5 style="font-weight:bold">WORLD-CLASS FACULTY</h5>
									<p>Learn from the accomplished teachers with an in-depth understanding of the subject.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>
								<div class = "col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3" >
								<center class="fet-crd"><img src="<?php echo base_url('assets/images/2CUT.png'); ?>" style=" width:50%;">
									<h5 style="font-weight:bold">CUTTING EDGE CURRICULUM</h5>
									<p>Educate yourself with the top-notch study material designed by the EXPERTS.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>
								<div class = "col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3" >
								<center class="fet-crd"><img src="<?php echo base_url('assets/images/3LIV.png'); ?>" style=" width:50%;">
									<h5 style="font-weight:bold">LIVE CLASSES</h5>
									<p>Learn concepts,practice questions and get your doubts cleared instantly in the LIVE Classes.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>
								<div class = "col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3" >
								<center class="fet-crd"><img src="<?php echo base_url('assets/images/4DIS.png'); ?>" style=" width:50%;">
									<h5 style="font-weight:bold">STUDENT DISCUSSION FORUM</h5>
									<p>Get access to 24*7 Live Discussion group with batchmates & faculties.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>
								<div class = "col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3" >
								<center class="fet-crd"><img src="<?php echo base_url('assets/images/5QUZ.png'); ?>" style=" width:50%;">
									<h5 style="font-weight:bold">QUIZ & ASSIGNMENTS</h5>
									<p>Practice chapter-wise Quizzes & solve Assignments to learn and revise concepts.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>
								<div class = "col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3" >
								<center class="fet-crd"><img src="<?php echo base_url('assets/images/6VID.png'); ?>" style=" width:50%;">
									<h5 style="font-weight:bold">VIDEO LECTURES</h5>
									<p>Learn through high-quality & easy to understand video lectures.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>
								<div class = "col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3" >
								<center class="fet-crd"><img src="<?php echo base_url('assets/images/7EBK.png'); ?>" style=" width:50%;">
									<h5 style="font-weight:bold">E-BOOKS</h5>
									<p>Get Important topics & formulas for last-minute revision in the PDF format.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>
								<div class = "col-lg-3 col-md-4 col-2 col-6 p-md-5 p-3" >
								<center class="fet-crd"><img src="<?php echo base_url('assets/images/8NOT.png'); ?>" style=" width:50%;">
									<h5 style="font-weight:bold">ALERT & NOTIFICATION</h5>
									<p>Stay up to date & get notified every time the course content is updated.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>
								<div class = "col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3" >
								<center class="fet-crd"><img src="<?php echo base_url('assets/images/9TRST.png'); ?>" style=" width:50%;">
									<h4 style="font-weight:bold">TRUSTED CONTENT</h4>
									<p>Learn from the comprehensive & interactive course content.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>
								<div class = "col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3" >
								<center class="fet-crd"><img src="<?php echo base_url('assets/images/10FEE.png'); ?>" style=" width:50%;">
									<h5 style="font-weight:bold">AFFORDABLE FEE STRUCTURE</h5>
									<p>Learn from the best in the industry with an affordable payment plan.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>
								<div class = "col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3" >
								<center class="fet-crd"><img src="<?php echo base_url('assets/images/11OFF.png'); ?>" style=" width:50%;">
									<h5 style="font-weight:bold">ONLINE & OFFLINE VIDEO LECTURES</h5>
									<p>Learn even when you are offline through our in-app video lectures.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>
								<div class = "col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3" >
								<center class="fet-crd"><img src="<?php echo base_url('assets/images/12LRN.png'); ?>" style=" width:50%;">
									<h5 style="font-weight:bold">LEARN ANYTIME ANYWHERE</h5>
									<p>Learn at your own pace through our easy to navigate Android & iOS App.</p>
									<!-- <div class="row" width="50%">
										<div class="col-4"><span class="fa fa-trophy"></span></div>
									</div> -->
								</center>
								</div>

							</div>
			        </div>
	<!-- ////Offer////				 -->
	<?php if(!empty($offer_list)){ 
		$img_link = base_url('admin/uploads/courses/');
		$dflt_img = base_url('assets/images/default-banner.png');
		$dtl_link = site_url('Course/offer?of=');
		$dtl2_link= site_url('Course/details?cr=');
	    foreach ($offer_list as $i => $vl) {
	?>

		<div class="section3125 mt-50" >
			<h4 class="item_title"><?php echo $vl->m_offer_title ?></h4>
			<!-- <a href="<?php //echo $dtl_link.$vl->m_course_id; ?>" class="see150">See all</a> -->
			<div class="la5lo1">
				<div class="row">
	<?php
          if(!empty($vl->course_list)){ 
	        foreach ($vl->course_list as $i1 => $vl1) { $cat_img = $dflt_img;

	    	if (!empty($vl1->m_course_banner)) { if (file_exists('admin/uploads/courses/'.$vl1->m_course_banner)){ $cat_img = $img_link.$vl1->m_course_banner; }}
	?>

									<div class="item col-lg-4 col-md-6 col-12 p-2" title="<?php echo $vl1->m_course_title ?>">
										<div class="fcrse_1 mb-20">
			<a href="<?php echo $dtl2_link.$vl1->m_course_id; ?>" class="fcrse_img">
												<img src="<?php echo $cat_img; ?>" alt="" style="height: 300px;overflow:hidden;">
												<div class="course-overlay">
													<div class="badge_seller"><?php echo $vl1->m_course_title ?></div>
													<span class="play_btn1"><i class="uil uil-play"></i></span>
												</div>
			</a>
											<div class="fcrse_content">
												<div class="vdtodt">
													<span class="vdt14"><?php echo $vl1->m_course_view ?> views</span>
													<span class="vdt14"><?php //echo $vl1->course_modified; ?></span>
												</div>
												<a href="<?php echo $dtl2_link.$vl1->m_course_id; ?>"  class="crse14s"><?php echo $vl1->m_course_title ?></a>
												<div class="row" style = "margin-left:5px;margin-bottom:10px;margin-top:10px;font-weight:bold;font-size:20px;"><del><span title="Actual Price">₹<?php echo $vl1->m_course_price; ?></span></del> , <span title="Offer Price" style="color: green;"> ₹<?php echo $vl1->m_course_offer_price; ?></span></div>

												<div class="row">
													<div class="col-6 pr-1">
													<a class="add-to-wishlist" data-id="<?php echo $vl1->m_course_id ?>" data-type="1"><button class="btn btn-primary btn-block">Add to wishlist</button></a>
													</div>
													<!--<div class="col-4 pr-1">
													<span onclick="window.location.href='<?php echo $dtl2_link.$vl1->m_course_id; ?>';"><button class="btn btn-warning btn-block">View Details</button></span>
													</div>-->
													<div class="col-6">
														<button class="btn btn-success btn-block">Enroll Now</button>
													</div>
												</div>
												
												
											</div>
										</div>
									</div>


	<?php } } ?>
								</div>
							</div>
						</div>
    <?php } } ?>

	



	<!-- ///////////Recomended///////////// -->


	
    
			<div class="section3126">
				<center><h2 class="mt-5 pt-md-5 pt-2"><b>A Passionate Team</b></h2><center>
				<center><p>We work as equals,celebrate as a team & have fun with each other.</p><center>
				<div class="row my-3">
					
							<?php
								$i = 0;    
									
								if(!empty($teams_list))  
								{
									
									foreach($teams_list as $banner)	
									{
										

									echo '
									<div class ="col-lg-2 col-md-3 col-6 p-3">
										<div class="card card-ppl text-center py-3">
											<img class="img-fluid rounded-circle mb-0 px-3" src="'.base_url('admin/uploads/courses/'.$banner->member_image).'" alt="'.$banner->member_name.'" ?>
											<h5 class="mt-4 mb-0">'.$banner->member_name.'</h5>
											<p class="mb-0 mt-2 small">'.$banner->member_position.'</p>
										</div>
									</div>';
									}
								
								}
								?>
				</div>
			</div>
		</div>
					<!-- <div class="col-xl-3 col-lg-4"> -->
						<!-- <div class="right_side">
							<div class="fcrse_3">
								<div class="cater_ttle">
									<h4>Useful link For News and Current Affairs- </h4>
								</div>
								<div class="live_text">
									
									<div class="live-content" style="margin: 5px;">
										
										<button class="live_link"  onclick="window.open('https://www.youtube.com/c/RstvNicIn')">Rajya sabha Tv</button>
																				
									</div>

									<div class="live-content" style="margin: 5px;">
										<button class="live_link"  onclick="window.open('https://www.youtube.com/channel/UCrXvTLS-1ye7MmZhsi_cpOQ')">Lok sabha Tv</button>				
									</div>


									<div class="live-content" style="margin: 5px;">
										<button class="live_link"  onclick="window.open('https://www.youtube.com/c/NEWSONAIROFFICIAL')">AIR official</button>
									</div>

									<div class="live-content" style="margin: 5px;">
									
										<button class="live_link" onclick="window.open('https://www.youtube.com/channel/UCzUQJ8LXRxy3rsRvIxhbIjw')">Our Channel</button>
									</div>
								</div>
							</div>
							<div class="get1452">
								<h4>Useful Links</h4>
							<center>
								<button style="margin: 5px;" class="Get_btn" onclick="window.open('https://pib.gov.in/')">Press information bureau</button>
							
								<button style="margin: 5px;" class="Get_btn" onclick="window.open('https://www.india.gov.in/')">India Portal</button>
							</center>
							</div>
							<div class="fcrse_3">
								<div class="cater_ttle">
									<h4>Popular Courses</h4>
								</div>
								<ul class="allcate15">

								</ul>
							</div>
						</div> -->
					<!-- </div> -->
					<!-- <div class="col-xl-12 col-lg-12">
						<div class="section3125 mt-30">
							<h4 class="item_title">What Our Student Have Today</h4>
							<div class="la5lo1">
								<div class="owl-carousel Student_says owl-theme">
									<div class="item">
										<div class="fcrse_4 mb-20">
											<div class="say_content">
												<p>This is For Testing Purpose Only This is For Testing Purpose OnlyThis is For Testing Purpose OnlyThis is For Testing Purpose Only </span><a onclick="myFunction(1)" id="myBtn1">Read more</a></p>
											</div>
											<div class="st_group">
												<div class="stud_img">
													<img src="<?php //echo base_url('assets/images/gurucharan.png'); ?>" alt="">												
												</div>
												<div class="flexpack">
												<h4>JHON DOE</h4> 
												<h4 style = "text-size:12px">XYZ COM</h4>
												
												</div>
												</div>
										</div>
									</div>
									


								</div>
							</div>
						</div>
					</div> -->
					<div class="col-12">
						<div class="section3125 mt-5">
							<h4 class="item_title">What Our Student Have Today</h4>
							<div class="la5lo1">
								<div class="owl-carousel Student_says owl-theme row">
									
									<?php
										$i = 0;    
											
										if(!empty($reviews))  
										{
											
											foreach($reviews as $reveiw)	
											{
												

											echo '
												<div class="item">
													<div class="fcrse_4 mb-5">
														<div class="say_content">
															<p style="text-align:justify;">'.$reveiw->m_review.'</span><a onclick="myFunction(1)" id="myBtn1">Read more</a></p>
														</div>
														<div class="st_group">
															<div class="stud_img">
																<img src="'.base_url('admin/uploads/courses/'.$reveiw->m_image).'" alt="">												
															</div>
															<div class="flexpack">
    															<h4>'.$reveiw->m_name.'</h4><h5 class="text-gray my-1 ml-4" style="line-height:2rem;">'.$reveiw->m_designation.'</h5>
															</div>
														</div>
													</div>
												</div>
											';
												
										}
										
										}
									?>

								</div>
							<div class="section3126 px-2" style="background-color:#ffffff">
							<center><h2 style = "margin-top:50px;">OUR PARTNERS</h2><center>
							<div class="row"style="margin-top: 50px;margin-bottom:50px;">
							<?php
								$i = 0;    
									
								if(!empty($partners_list))  
								{
									
									foreach($partners_list as $partner)	
									{
										

									echo '
									<div class = "col-2">
									<a href="'.$partner->partner_url.'">
									<img style="max-width:80%;margin:auto;"  src="'.base_url('admin/uploads/courses/'.$partner->partner_image).'" alt="'.$partner->partner_name.'" ?>
									</a>
									</div>
									';
										
								}
								
								}
								?>
							
							</div>
						
					</div>
			
				</div>
<!-- ====================/Page Content======================= -->

<!-- =========================View===============Fix========= -->
            </div>
		</div>
		</div>
		</div>
<!-- ========================/View===============Fix========= -->


	</div>
	<?php $this->view($footer_view); ?>
	<!-- Body End -->
<!-- ======================Top-Footer============Fix========= -->
<?php $this->view('top_footer'); ?>
<!-- ======================Top-Footer============Fix========= -->

<script>
function myFunction(id) {
  var dots = document.getElementById("dots"+id);
  var moreText = document.getElementById("more"+id);
  var btnText = document.getElementById("myBtn"+id);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

</body>
</html>