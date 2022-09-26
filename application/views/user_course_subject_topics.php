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
<style type="text/css">
	.live1452 video {
	    width: 100%;
	    height: 435px;
	    border-radius: 10px;
	}

	.ui-accordion-content .left-content { width: 80%; }
	.ui-accordion-content .details { width: 20%; }
</style>
<!-- ========================SideBar=============Fix========= -->

<!-- =========================View===============Fix========= -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">
<!-- ========================/View===============Fix========= -->

<!-- =====================Page Content======================= -->

 <?php 

  $gettopic = $this->db->query("select ml_file,ml_title from master_lecture_tbl where mlecture_id ='$topicid'")->result();


 ?>
				<div class="row">
					<div class="col-xl-7 col-lg-7 pr-1">

						<div class="section3125">
							<div class="live1452">
       <!--  <div id="topic-view-output">
        	                    <iframe src="<?php echo base_url('assets/images/default-banner.png'); ?>" allowfullscreen></iframe>
        </div>
					 -->

					    <!------------- PLYR.IO ------------>
                 <link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">

               
                <div class="plyr__video-embed" id="player">
                  <iframe height="500" src="<?php echo $gettopic[0]->ml_file ?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;[0]->rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
                </div>


                  <script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
                <script>const player = new Plyr('#player');</script> 
                <!------------- PLYR.IO ------------>



					 		</div>
							<div class="user_dt5">
								<div class="user_dt_left">
									<div class="live_user_dt">
										<div class="user_img5">
											<img src="<?php echo base_url('assets/images/left-imgs/img-4.jpg'); ?>" alt="">
										</div>
										<div class="user_cntnt" id="content_title">
											<h4><?php echo $gettopic[0]->ml_title ?></h4>
										</div>
									</div>
								</div>
								<div class="user_dt_right">
									<ul>
										<li>
											<a href="#" class="lkcm152"><i class='uil uil-eye'></i><span>1452</span></a>
										</li>
										<li>
											<a href="#" class="lkcm152"><i class='uil uil-thumbs-up'></i><span>100</span></a>
										</li>
										<li>
											<a href="#" class="lkcm152"><i class='uil uil-thumbs-down'></i><span>20</span></a>
										</li>
										<li>
											<a href="#" class="lkcm152"><i class='uil uil-share-alt'></i><span>9</span></a>
										</li>
									</ul>
								</div>
							</div>
									
						</div>
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
					<div class="col-xl-5 col-lg-5 p-0">
						<div class="right_side">							
							<div class="fcrse_3">
								<div class="cater_ttle">
									<h4>Subject : </h4>
								</div>
								<div id="accordion" class="ui-accordion ui-widget ui-helper-reset">
	<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">		<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-file-download-alt icon_142'></i>
														<span class="section-title-text">Topic Title</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="section-header-length">Times</span>
												</div>
	</a>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom"
	    id="topic-view-list" 
	>


<?php if (!empty($all_value)) { foreach ($all_value as $i => $vl) { ?>

		<div class="lecture-container topic-view-btn"
		     data-file="<?php echo $vl->ml_file; ?>" 
		     data-type="<?php echo $vl->ml_type; ?>"
		     data-icon="<?php echo $vl->m_subject_icon; ?>"
		     data-title="<?php echo $vl->ml_title; ?>"
		     data-id="<?php echo $vl->mlecture_id; ?>"
		     data-subject="<?php echo $vl->ml_subject; ?>"
		     data-course="<?php echo $vl->ml_course; ?>"
		>
													<div class="left-content">
														<i class='uil uil-presentation-play crse_icon' ></i>
														<div class="top">
			<div class="title"><?php echo $vl->ml_title; ?></div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">hh:mm</span>
													</div>
		</div>
<?php } }else{ ?>
		<div class="lecture-container" style="color: red" >
													<div class="left-content">
														<i class='uil uil-presentation-play crse_icon'></i>
														<div class="top">
			<div class="title" style="color: red"> <center>Topic</center> </div>
														</div>
													</div>
													<div class="details">
			<a href="#" class="preview-text" style="color: red"> Not  </a>
			<span class="content-summary" style="color: red">Found</span>
													</div>
		</div>
<?php } ?>

	</div>

										</div>
							</div>													
						</div>
					</div>
					<div class="col-md-12">






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

<script type="text/javascript">
//============================Topic===========================//

//============================Topic===========================//
function check_file_exist(urlToFile='') {
  if (urlToFile=='') { return false; }
  var xhr = new XMLHttpRequest(); xhr.open('HEAD', urlToFile, false); xhr.send();
  return (xhr.status == "404") ? false : true;
}

$('#topic-view-list').on("click", ".topic-view-btn", function(){
  var file_link  = "<?php echo base_url('admin/uploads/topics/'); ?>",
   media_title = $(this).data('file'),
   media_type = $(this).data('type');
  var  topic_id = $(this).data('id');
  var subject = $(this).data('subject');
  var course = $(this).data('course');

  $.ajax({

          url : "<?php echo site_url('My/update_course_status') ?>",
          method : "POST",
          dataType: "JSON",
          data : {topic_id:topic_id,subject:subject},
          success : function()
          {

              window.location.href = "<?php echo site_url() ?>My/subject_topics?cr="+course+'&id='+subject+'&tid='+topic_id;
          }
  });

  // $("#content_title").html('<h4>'+$(this).data('title')+'</h4>');

  // if (media_title != '') {  
  // 	var s_file = '<iframe src="<?php echo base_url('assets/images/default-banner.png'); ?>" allowfullscreen></iframe>';
  //   if (media_type == 1) {
  //     s_file = '<iframe src="'+media_title+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
  //   } else {
  //     if (check_file_exist(file_link+media_title)) {
  //       if (media_type == 2) {
  //         s_file = '<video controls><source src="'+file_link+media_title+'" type="video/mp4"></video>';
  //       }
  //     }
  //   } $("#topic-view-output").html(s_file);

  // }else{ swal("Media Not Found.", { icon: "error", timer: 2000, }); }

});


//setTimeout(function(){ $(".topic-view-btn").eq(0).trigger("click"); },1000);
//===========================/Topic===========================//

//===========================/Topic===========================//
</script>