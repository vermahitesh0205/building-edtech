<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Payment extends CI_Controller {
//===========================Payment==========================//
public function index(){  redirect('Home'); }
//===========================Payment==========================//
public function register_course(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    if($this->User_model->check_is_user_course($this->input->post('t_reg_course'))){

      //======== we are checking wheter inserted course is inserted by payment gateway button click if inserted
      //== by button click than we need to give permission you access payment gateway  ===//

        $check = $this->db->query("select t_reg_id from  user_courses_tbl where t_reg_course='".$this->input->post('t_reg_course')."' and t_reg_type='1' and t_reg_user='".$this->session->userdata('customer_id')."' and t_payment_status='0'")->result();

        if(!empty($check))
        {

              $data['regid'] = $check[0]->t_reg_id;
              $data['regdetail'] = $this->User_model->registration_detail($data['regid']);
              $data['return_url'] = site_url().'Payment/callback';
              $data['surl'] = site_url().'Payment/payment_success';
              $data['furl'] = site_url().'Payment/payment_failed';
              $data['currency_code'] = 'INR';

              $info = array( 'status'=>'success',
              'message' => 'Course has been Register successfully!',
              'html' => $this->load->view('payment_gateway',$data,TRUE),
              );
             

        }

        else
        {

            $info = array( 'status'=>'fail',
            'message'=>'Course Already Purchased By You !'
            );

        }



    }else if($id = $this->User_model->insert_registration()){

      $data['regid'] = $id;
      $data['regdetail'] = $this->User_model->registration_detail($data['regid']);
      $data['return_url'] = site_url().'Payment/callback';
      $data['surl'] = site_url().'Payment/payment_success';
      $data['furl'] = site_url().'Payment/payment_failed';
      $data['currency_code'] = 'INR';

      $info = array( 'status'=>'success',
        'message' => 'Course has been Register successfully!',
        'html' => $this->load->view('payment_gateway',$data,TRUE),
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
    
  }
}


public function register_package(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    if($this->User_model->check_is_user_test($this->input->post('t_reg_package'))){

      //======== we are checking wheter inserted test is inserted by payment gateway button click if inserted
      //== by button click than we need to give permission you access payment gateway  ===//

        $check = $this->db->query("select t_reg_id from  user_courses_tbl where t_reg_package ='".$this->input->post('t_reg_package')."' and t_reg_type='2' and t_reg_user='".$this->session->userdata('customer_id')."' and t_payment_status='0'")->result();

        if(!empty($check))
        {

              $data['regid'] = $check[0]->t_reg_id;
              $data['regdetail'] = $this->User_model->registration_detail($data['regid']);
              $data['return_url'] = site_url().'Payment/callback';
              $data['surl'] = site_url().'Payment/payment_success';
              $data['furl'] = site_url().'Payment/payment_failed';
              $data['currency_code'] = 'INR';

              $info = array( 'status'=>'success',
              'message' => 'Test Package has been Register successfully!',
              'html' => $this->load->view('payment_gateway',$data,TRUE),
              );
             

        }

        else
        {

            $info = array( 'status'=>'fail',
            'message'=>'Course Already Purchased By You !'
            );

        }



    }else if($id = $this->User_model->insert_test_registration()){

      $data['regid'] = $id;
      $data['regdetail'] = $this->User_model->registration_detail($data['regid']);
      $data['return_url'] = site_url().'Payment/callback';
      $data['surl'] = site_url().'Payment/payment_success';
      $data['furl'] = site_url().'Payment/payment_failed';
      $data['currency_code'] = 'INR';

      $info = array( 'status'=>'success',
        'message' => 'Test Package has been Register successfully!',
        'html' => $this->load->view('payment_gateway',$data,TRUE),
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
    
  }
}

public function register_notes(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    if($this->User_model->check_is_user_notes($this->input->post('t_reg_notes'))){

      //======== we are checking wheter inserted test is inserted by payment gateway button click if inserted
      //== by button click than we need to give permission you access payment gateway  ===//

        $check = $this->db->query("select t_reg_id from  user_courses_tbl where t_reg_notes ='".$this->input->post('t_reg_notes')."' and t_reg_type='3' and t_reg_user='".$this->session->userdata('customer_id')."' and t_payment_status='0'")->result();

        if(!empty($check))
        {

              $data['regid'] = $check[0]->t_reg_id;
              $data['regdetail'] = $this->User_model->registration_detail($data['regid']);
              $data['return_url'] = site_url().'Payment/callback';
              $data['surl'] = site_url().'Payment/payment_success';
              $data['furl'] = site_url().'Payment/payment_failed';
              $data['currency_code'] = 'INR';

              $info = array( 'status'=>'success',
              'message' => 'Notes  has been Register successfully!',
              'html' => $this->load->view('payment_gateway',$data,TRUE),
              );
             

        }

        else
        {

            $info = array( 'status'=>'fail',
            'message'=>'Notes Already Purchased By You !'
            );

        }



    }else if($id = $this->User_model->insert_notes_registration()){

      $data['regid'] = $id;
      $data['regdetail'] = $this->User_model->registration_detail($data['regid']);
      $data['return_url'] = site_url().'Payment/callback';
      $data['surl'] = site_url().'Payment/payment_success';
      $data['furl'] = site_url().'Payment/payment_failed';
      $data['currency_code'] = 'INR';

      $info = array( 'status'=>'success',
        'message' => 'Notes  has been Register successfully!',
        'html' => $this->load->view('payment_gateway',$data,TRUE),
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
    
  }
}
//==========================/Payment==========================//

//===========================Payment==========================//
// initialized cURL Request
    private function get_curl_handle($payment_id, $amount)  {
        $url = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';

        if(get_settings('app_gateway_status') == 'Live Mode')
        {
            $keyid = get_settings('app_razoarpay_live_key');
            $keysecret = get_settings('app_razoarpay_live_secrate');
        }

        else
        {
            $keyid = get_settings('app_razoarpay_key');
            $keysecret = get_settings('app_razoarpay_secrate');

        }

       

        $key_id = $keyid;
        $key_secret = $keysecret;
        $fields_string = "amount=$amount";
        //cURL Request
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
       // curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__).'/ca-bundle.crt');
        return $ch;
    }   


      public function callback() {        
        if (!empty($this->input->post('razorpay_payment_id')) && !empty($this->input->post('merchant_order_id'))) {
            $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $merchant_order_id = $this->input->post('merchant_order_id');
            $currency_code = 'INR';
            $amount = $this->input->post('merchant_total');
            $success = false;
            $error = '';
            try {                
                $ch = $this->get_curl_handle($razorpay_payment_id, $amount);
                //execute post
                $result = curl_exec($ch);
                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if ($result === false) {
                    $success = false;
                    $error = 'Curl error: '.curl_error($ch);


                    $data = $this->User_model->update_reg_status('0',array());

                    echo $error;
                    die();
                } else {
                    $response_array = json_decode($result, true);
                 //echo "<pre>";print_r($response_array);exit;
                        //Check success response
                        if ($http_status === 200 and isset($response_array['error']) === false) {


                          $success = true;

                         $data= $this->User_model->update_reg_status('1',$response_array);


                        } else {
                            $success = false;
                            if (!empty($response_array['error']['code'])) {
                                $error = $response_array['error']['code'].':'.$response_array['error']['description'];
                            } else {
                                $error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
                            }
                        }
                }
                //close connection
                curl_close($ch);
            } catch (Exception $e) {
                $success = false;
                $error = 'RAZORPAY_ERROR:Request to Razorpay Failed';
            }
            if ($success === true) {
                if(!empty($this->session->userdata('ci_subscription_keys'))) {
                    $this->session->unset_userdata('ci_subscription_keys');
                 }
                if (!$response_array['id']) {
                    redirect($this->input->post('merchant_surl_id'));
                } else {
                    redirect($this->input->post('merchant_surl_id'));
                }
 
            } else {
                redirect($this->input->post('merchant_furl_id'));
            }
        } else {
            echo 'An error occured. Contact site administrator, please!';
        }
    }
//==========================/Payment==========================//

//===========================Payment==========================//
public function payment_success(){ $data = $this->page_details();
  $data['pagename'] = "Payment Success";

  $this->load->view('payment_success', $data);
}


public function payment_failed(){ $data = $this->page_details();
  $data['pagename'] = "Payment Failed";

  $this->load->view('payment_failed', $data);
}
//==========================/Payment==========================//

//==========================Details===========================//
protected function page_details2(){

  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){
    $data['header_view'] = 'header2_view_user';  // After Login
    $data['log_customer']= $this->Login_model->customer_details();
  } else redirect('Login');

  $data['footer_view'] = 'footer_view';
  return $data;
}

protected function page_details(){

  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){
    $data['header_view'] = 'header_view_user';  // After Login
    $data['sidebar_list']= 'sidebar_list_user'; // After Login
    $data['log_customer']= $this->Login_model->customer_details();
  } else {
    $data['header_view'] = 'header_view';   // Before Login
    $data['sidebar_list']= 'sidebar_list';  // Before Login
  }

  $data['footer_view'] = 'footer_view';
  return $data;
}
//=========================/Details===========================//
  
//======================Login Validation======================//
protected function require_login(){
  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){ return;
  } else { redirect('Home'); }
}

protected function ajax_login(){
  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){ return true;
  } else { echo json_encode(array( 'status'=>'error', 'message'=>'You are not Logged in Now!! Please login again.')); return false; 
  }
}
//=====================/Login Validation======================//

//=========================/Payment==========================//
} ?>