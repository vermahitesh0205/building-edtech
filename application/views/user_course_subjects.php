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



<!-- ======================Page Style======================== -->

<!-- =====================/Page Style======================== -->



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
                        
							<h4 class="item_title">My Course Subjects 
						
					
							
								<a href="<?=base_url()?>My/zoom_live?courseid=<?=$_GET['id']?>" class="ml-5 btn btn-danger"><i class="fa fa-play mx-2" aria-hidden="true"></i>Live Classes</a></h4>
							<div class="la5lo1">

								<div class="row">

	<?php if(!empty($all_value)){ 

		$dflt_img = base_url('assets/images/default-icon.png');

		$img_link = base_url('admin/uploads/subject/');

		$dtl_link = site_url('My/subject_topics?cr='.$course_id.'&id=');

	    foreach ($all_value as $i => $vl) { $cat_img = $dflt_img;



	    	if (!empty($vl->m_subject_icon)) { if (file_exists('admin/uploads/subject/'.$vl->m_subject_icon)){ $cat_img = $img_link.$vl->m_subject_icon; } }



	    	$percentage = 0;





	    	$count_topic = $this->db->query("select count(ml_subject) as topic from master_lecture_tbl where ml_subject='".$vl->m_subject_id."'")->result();



	    	$complete_topic = $this->db->query("select count(u_course_subject) as ctopic from user_course_status where u_course_subject='".$vl->m_subject_id."' and u_course_userid='".$this->session->userdata('customer_id')."'")->result();

          



              if(!empty($complete_topic))

              {



              	 if($complete_topic[0]->ctopic =! 0 && $count_topic[0]->topic != 0)

              	 {

              	 	$percentage = ($complete_topic[0]->ctopic/$count_topic[0]->topic)*100;

              	 }

              	 else

              	 {

              	 	$percentage = 0;

              	 }

              	  

              }



	?>

									<div class="col-md-3">

				<div class="stream_1 mb-30 show-file-btn">

					<a href="<?php echo $dtl_link.$vl->m_subject_id; ?>" class="stream_bg">

				        <img src="<?php echo $cat_img; ?>" alt="">

						<h4><?php echo $vl->m_subject_title; ?></h4>

					</a>

					<p style="margin-top: 3%;">Course : <b><?php echo $vl->m_course_title; ?></b></p>

                     <?php echo round($percentage,2) ?>% Complete

					<div class="progress">

					<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $percentage ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percentage ?>%">

					<span class="sr-only" style="color: black"><?php echo $percentage ?>% Complete</span>

					</div>

					</div>

				</div>

									</div>

    <?php } }else{ ?>

									<div class="col-md-3">

			<a href="#">

										<div class="stream_1 mb-30">

											<a href="#" class="stream_bg">

												<img src="<?php echo base_url('assets/images/default-icon.png'); ?>" alt="">

												<h4>Subject</h4>

											</a>

										<p style="margin-top: 3%;">Course</p>

										</div>

		    </a>

									</div>

    <?php } ?>

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