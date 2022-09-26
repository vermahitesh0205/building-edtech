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

<!-- =========================View===============Fix========= -->
	<!-- Body Start -->
	<div class="wrapper _bg4586 _new89">		
		<div class="_215b15">
			<div class="container">
<!-- ========================/View===============Fix========= -->

<!-- ======================Page Title======================== -->
				<div class="row">
					<div class="col-lg-12">						
						<div class="title125">						
							<div class="titleleft">					
								<div class="ttl121">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="<?php echo site_url('Home'); ?>">Home</a></li>
	<li class="breadcrumb-item"><a href="<?php echo site_url('Course/details?cr=').$cr_id; ?>">Course Details</a></li>
	<li class="breadcrumb-item active" aria-current="page">Checkout</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="title126">	
							<h2>Checkout</h2>
						</div>
					</div>
				</div>
<!-- =====================/Page Title======================== -->

<!-- =========================View===============Fix========= -->
			</div>
		</div>
		<div class="mb4d25">
			<div class="container">
<!-- ========================/View===============Fix========= -->

<!-- =====================Page Content======================= -->
				<div class="row">
					<div class="col-lg-8">
						<div class="membership_chk_bg">
							<div class="checkout_title">
								<h4>Billing Details</h4>
								<img src="<?php echo base_url('assets/images/line.svg'); ?>" alt="">
							</div>
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="address1">
										<div class="panel-title">
	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseaddress1" aria-expanded="false" aria-controls="collapseaddress1"
	    style="box-shadow: 0px 0px 2px 0px #dadada" 
	>
		Edit Address
	</a>
										</div>
									</div>
									<div id="collapseaddress1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="address1">
										<div class="panel-body">
<form method="post" action="#" id="frm-update-address">
												<div class="row">
													<div class="col-lg-6">
														<div class="ui search focus mt-30 lbel25">
	<label>Your Name*</label>
															<div class="ui left icon input swdh11 swdh19">
	<input class="prompt srch_explore" type="text" name="kh_user_fname" id="kh_user_fname" value="<?php echo $a_value[0]->kh_user_fname; ?>" required="" placeholder="Your Name">															
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="ui search focus mt-30 lbel25">
	<label>Email Address*</label>
															<div class="ui left icon input swdh11 swdh19">
	<input class="prompt srch_explore" type="text" name="kh_user_email" id="kh_user_email" value="<?php echo $a_value[0]->kh_user_email; ?>" required="" placeholder="Email Address">															
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="ui search focus mt-30 lbel25">
	<label>Contact Number*</label>
															<div class="ui left icon input swdh11 swdh19">
	<input class="prompt srch_explore" type="number" name="kh_user_contact" id="kh_user_contact" value="<?php echo $a_value[0]->kh_user_contact; ?>" required="" maxlength="10" placeholder="Contact Number">															
															</div>
														</div>
													</div>
													<div class="col-lg-6">
							<div class="ui search focus mt-30 lbel25">
	<label>Alternative Contact Number</label>
								<div class="ui left icon input swdh11 swdh19">
	<input class="prompt srch_explore" type="number" name="kh_user_alt_contact" id="kh_user_alt_contact" value="<?php echo $a_value[0]->kh_user_alt_contact; ?>" placeholder="Alternative Contact Number">
								</div>
							</div>
													</div>
	                                                <div class="col-lg-6">

	<div class="mt-30 lbel25"> <label>Gender</label> </div>
	                <div class="ui fluid search selection dropdown focus cntry152">														
	<input type="hidden" name="kh_user_gender" id="kh_user_gender" class="prompt srch_explore" value="<?php echo $a_value[0]->kh_user_gender; ?>">
						<i class="dropdown icon"></i>
						<div class="default text">Select Gender</div>
						<div class="menu">
		<div class="item" data-value="Female">Female</div>
		<div class="item" data-value="Male">Male</div>
						</div>
					 </div>
													</div>
													<div class="col-lg-6">
							<div class="ui search focus mt-30 lbel25">
	<label>Date Of Birth</label>
								<div class="ui left icon input swdh11 swdh19">
	<input class="prompt srch_explore" type="text" name="kh_user_dob" id="kh_user_dob" value="<?php echo $a_value[0]->kh_user_dob; ?>" placeholder="Date Of Birth">
								</div>
							</div>
													</div>
	                                                <div class="col-lg-6">

	<div class="mt-30 lbel25"> <label>Country*</label> </div>
	                <div class="ui fluid search selection dropdown focus cntry152">														
	<input type="hidden" name="m_country_id" id="m_country_id" class="prompt srch_explore" value="<?php echo $a_value[0]->m_country_id; ?>">
						<i class="dropdown icon"></i>
						<div class="default text">Select Country</div>
						<div class="menu">
		<?php if (!empty($countries_list)) { foreach ($countries_list as $r) {
			echo '<div class="item" data-value="'.$r->m_country_id.'">'.$r->m_country_name.'</div>';
		}}?>
						</div>
					 </div>
													</div>
	                                                <div class="col-lg-6">

	<div class="mt-30 lbel25"> <label>State*</label> </div>
	                <div class="ui fluid search selection dropdown focus cntry152">														
	<input type="hidden" name="m_state_id" id="m_state_id" class="prompt srch_explore" value="<?php echo $a_value[0]->m_state_id; ?>">
						<i class="dropdown icon"></i>
						<div class="default text">Select State</div>
						<div class="menu">
		<?php if (!empty($states_list)) { foreach ($states_list as $r) {
			echo '<div class="item" data-value="'.$r->m_state_id.'">'.$r->m_state_name.'</div>';
		}}?>
						</div>
					 </div>
													</div>
	                                                <div class="col-lg-6">

	<div class="mt-30 lbel25"> <label>City*</label> </div>
	                <div class="ui fluid search selection dropdown focus cntry152">														
	<input type="hidden" name="kh_user_city" id="kh_user_city" class="prompt srch_explore" value="<?php echo $a_value[0]->kh_user_city; ?>">
						<i class="dropdown icon"></i>
						<div class="default text">Select City</div>
						<div class="menu">
		<?php if (!empty($cities_list)) { foreach ($cities_list as $r) {
			echo '<div class="item" data-value="'.$r->m_location_id.'">'.$r->m_location_city.'</div>';
		}}?>
						</div>
					 </div>
													</div>
	                                                <div class="col-lg-6">

	<div class="mt-30 lbel25"> <label>Area*</label> </div>
	                <div class="ui fluid search selection dropdown focus cntry152">														
	<input type="hidden" name="kh_user_area_id" id="kh_user_area_id" class="prompt srch_explore" value="<?php echo $a_value[0]->kh_user_area_id; ?>">
						<i class="dropdown icon"></i>
						<div class="default text">Select Area</div>
						<div class="menu">
		<?php if (!empty($areas_list)) { foreach ($areas_list as $r) {
			echo '<div class="item" data-value="'.$r->area_id.'">'.$r->area_name.'</div>';
		}}?>
						</div>
					 </div>
													</div>
													<div class="col-lg-12">
					<div class="ui search focus mt-30 lbel25">
						<label>Address*</label>
						<div class="ui left icon input swdh11 swdh19">
	<input class="prompt srch_explore" type="text" name="kh_user_address" id="kh_user_address" value="<?php echo $a_value[0]->kh_user_address; ?>" required="" maxlength="300" placeholder="Address">															
						</div>
					</div>
													</div>
													<div class="col-lg-6">

					<div class="ui search focus mt-30 lbel25">
						<label>Adhar Number</label>
						<div class="ui left icon input swdh11 swdh19">
	<input class="prompt srch_explore" type="number" name="khu_adhar_no" id="khu_adhar_no" value="<?php echo $a_value[0]->khu_adhar_no; ?>" placeholder="Adhar Number">
						</div>
					</div>

													</div>
													<div class="col-lg-6">

				<div class="ui search focus mt-30 lbel25">
					<label>PAN Number</label>
					<div class="ui left icon input swdh11 swdh19">
	<input class="prompt srch_explore" type="number" name="khu_pan_no" id="khu_pan_no" value="<?php echo $a_value[0]->khu_pan_no; ?>" placeholder="PAN Number">
					</div>
				</div>

													</div>
													<div class="col-lg-6">
    <button type="submit" id="btn-update-address" class="save_address_btn">Save Changes</button>
													</div>												
												</div>
 </form>
										</div>
									</div>
								</div>
							</div>
	<div class="address_text">
		<?php echo $a_value[0]->kh_user_fname; ?>
		<br><?php echo $a_value[0]->kh_user_address; ?>,
		<br><?php echo $a_value[0]->area_name.', '.$a_value[0]->m_location_city.', '.$a_value[0]->m_state_name; ?>,
		<br><?php echo $a_value[0]->m_country_name; ?>
	</div>
						</div>
						<div class="membership_chk_bg">
							<div class="chckout_order_dt">
		<div class="checkout_title">
			<h4>Order Details</h4>
			<img src="<?php echo base_url('assets/images/line.svg'); ?>" alt="">
		</div>
		<div class="order_dt_section">
<table style="width: 100%">
	<tbody>
		<tr>
			<td><p>Course    : <b><?php echo $a_course[0]->m_course_title; ?></b></p></td>
		</tr>
		<tr>
			<td><p>Category : <b><?php echo $a_course[0]->m_course_title; ?></b></p></td>
		</tr>
		<tr>
			<td><p>Details : <b><?php echo $a_course[0]->m_course_intro; ?></b></p></td>
		</tr>
	</tbody>
</table>
				
				
				
		</div>

   <form method="post" id="frm-checkout" action="#">
     
     <!-------  Form Value to Insert Into User Courses Table ---------------------------------------->
       <input type="hidden" name="t_reg_type" value="1">
	   <input type="hidden" name="t_reg_user" value="<?php echo $a_value[0]->kh_user_id ?>">
	   <input type="hidden" name="t_reg_course" value="<?php echo $a_course[0]->m_course_id ?>" id="courseid">
	   <input type="hidden" name="t_reg_amount" value="<?php echo $a_course[0]->m_course_offer_price ?>">
	   <input type="hidden" name="t_reg_payble" value="<?php echo $a_course[0]->m_course_offer_price ?>" id="t_reg_payble">
	   <input type="hidden" name="t_reg_discount" value="0" id="t_reg_discount">
	   <input type="hidden" name="t_reg_coupon" value="" id="t_reg_coupon">
	   <input type="hidden" name="t_reg_pay_mode" value="Online"> 

	   <!-------  Form Value to Insert Into User Courses Table ---------------------------------------->

		<div class="checkout_title">
			<img src="<?php echo base_url('assets/images/line.svg'); ?>" alt="">
		</div>
		<div class="order_dt_section">
			<div class="order_title">
				<h4>Actual Price</h4>
				<div class="order_price"> ₹ <del><?php echo $a_course[0]->m_course_price; ?></del></div>
			</div>
			<div class="order_title">
				<h4>Offer Price</h4>
				<div class="order_price"> ₹ <?php echo $a_course[0]->m_course_offer_price; ?></div>
			</div>
			<div class="order_title">
				<h6>Taxes(GST)</h6>
				<div class="order_price">₹ 0</div>
			</div>

			 <div class="order_title">
				<h4>Do You Have Coupon ?</h4>
				<div class="order_price5"> <input type="text" id="coupon" name="" class="form-control" placeholder="Enter Coupon Code Here"><br> <button id="apply_code" type="button" class="btn btn-info">Apply</button></div>
			</div>

		   <div class="order_title">
				<h3>Discount</h3>
				<div class="order_price5"> ₹ <span class="discount"> 0 </span></div>
			</div>

			<div class="order_title">
				<h3>Total</h3>
				<div class="order_price5"> ₹ <span class="payble"><?php echo $a_course[0]->m_course_offer_price; ?></span></div>
			</div>
			

			<input  id="btn-save-checkout" type="button" value="Pay Now" class="chckot_btn razorpay-payment-button" />
		</div>

	  </form>
							</div>
						</div>									
					</div>
					<div class="col-lg-4">
						<div class="membership_chk_bg rght1528">
								<div class="checkout_title">
									<h4>Order Summary</h4>
									<img src="<?php echo base_url('assets/images/line.svg'); ?>" alt="">
								</div>
								<div class="order_dt_section">
			<div class="order_title">
				<h4>Actual Price</h4>
				<div class="order_price"> ₹ <del><?php echo $a_course[0]->m_course_price; ?></del></div>
			</div>
			<div class="order_title">
				<h4>Offer Price</h4>
				<div class="order_price"> ₹ <?php echo $a_course[0]->m_course_offer_price; ?></div>
			</div>
			<div class="order_title">
				<h6>Taxes(GST)</h6>
				<div class="order_price">₹ 0</div>
			</div>

		     <div class="order_title">
				<h6>Discount</h6>
				<div class="order_price">₹ <span class="discount">0</span></div>
			</div>
			<div class="order_title">
				<h3>Total</h3>
				<div class="order_price5"> ₹ <span class="payble"><?php echo $a_course[0]->m_course_offer_price; ?></span></div>
			</div>

		 
									<div class="scr_text"><i class="uil uil-lock-alt"></i>Secure checkout</div>
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
<?php $this->view('top_footer'); $this->view('js/buy_now_check_out_js'); ?>
<!-- ======================Top-Footer============Fix========= -->
</body>
</html>
