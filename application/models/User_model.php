<?php date_default_timezone_set('Asia/Kolkata');
class User_model extends CI_model{
//============================User============================//

//=========================Customer===========================//
public function check_loginid($login_id){

  $this->db->select("kh_user_contact");
  $this->db->where('kh_user_id !=',$this->session->userdata('customer_id'));
  $this->db->where('kh_user_contact',$login_id);
  $sql=$this->db->get('master_users');

  if ($sql->num_rows() > 0) {

    $this->db->select("kh_user_contact");
    $this->db->where('kh_user_id',$this->session->userdata('customer_id'));
    $res=$this->db->get('master_users')->result();

    return array('status'=>'success', 'current_id'=> $res[0]->kh_user_contact, 'message'=>'Contact Number ( '.$login_id.' ) Already Exists.'); 
  }else{ return array('status'=>'fail', 'message'=>'Contact Number Not Exists.'); }
}
//========================/Customer===========================//

//=========================Customer===========================//
public function get_customer_all_courses(){
  $this->db->select('mc.m_course_id, mc.m_course_view, mc.m_course_title, mc.m_course_video_link, mc.m_course_banner, mc.m_course_intro, mc.m_course_description, mc.m_course_type, mc.m_course_price, mc.m_course_offer_price, DATE_FORMAT(mc.m_course_modified, "%d-%m-%Y %h:%i %p") course_modified, ct.m_category_name');
  $this->db->select("(Case when m_course_type='1' Then 'Free' when m_course_type='2' Then 'Paid' else ' ' end) course_type");
  $this->db->join('master_course_tbl mc', 'mc.m_course_id = uc.t_reg_course');
  $this->db->join('master_category ct', 'ct.m_category_id = mc.m_course_category');
  $this->db->where('mc.m_course_status', 1);
  $this->db->where('uc.t_reg_type', 1);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  return $this->db->get('user_courses_tbl uc')->result();
}

public function get_customer_course_subjects($id){

  $this->db->select('ms.m_subject_id, ms.m_subject_title, ms.m_subject_desc, ms.m_subject_icon, mc.m_course_title');

  $this->db->join('master_course_tbl mc', 'mc.m_course_id = ms.m_subject_typeid');
  $this->db->join('user_courses_tbl uc','uc.t_reg_course = ms.m_subject_typeid');
  $this->db->where('mc.m_course_status', 1);
  $this->db->where('uc.t_reg_type', 1);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  $this->db->where('ms.m_subject_for', 1);     // 1=course
  $this->db->where('ms.m_subject_typeid', $id); // course_id
  $this->db->where('ms.m_subject_status', 1);
  return $this->db->get('master_subject_tbl ms')->result();

}

public function get_customer_course_subjects_limit($limit, $id){
  
  $this->db->select('ms.m_subject_id, ms.m_subject_title, ms.m_subject_desc, ms.m_subject_icon, mc.m_course_title');

  $this->db->limit($limit);
  $this->db->join('master_course_tbl mc', 'mc.m_course_id = ms.m_subject_typeid');
  $this->db->join('user_courses_tbl uc','uc.t_reg_course = ms.m_subject_typeid');
  $this->db->where('mc.m_course_status', 1);
  $this->db->where('uc.t_reg_type', 1);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  $this->db->where('ms.m_subject_for', 1);     // 1=course
  $this->db->where('ms.m_subject_typeid', $id); // course_id
  $this->db->where('ms.m_subject_status', 1);
  return $this->db->get('master_subject_tbl ms')->result();

}

public function get_customer_course_sub_topics($sub_id, $crs_id){

  $this->db->select('lc.ml_title, lc.ml_code, lc.ml_file, lc.ml_type, oc.m_category_name, ol.m_course_title, ms.m_subject_title, ms.m_subject_icon,lc.ml_subject,lc.mlecture_id,lc.ml_course');
  $this->db->join('master_course_tbl ol', 'ol.m_course_id = lc.ml_course');
  $this->db->join('user_courses_tbl uc', 'uc.t_reg_course = ol.m_course_id');
  $this->db->join('master_category oc', 'oc.m_category_id = lc.ml_category');
  $this->db->join('master_subject_tbl ms', 'ms.m_subject_id = lc.ml_subject');

  $this->db->where('ms.m_subject_status', 1);
  $this->db->where('uc.t_reg_type', 1);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  $this->db->where('ol.m_course_status', 1);
  $this->db->where('lc.ml_course', $crs_id);
  $this->db->where('lc.ml_subject', $sub_id);
  $this->db->where_in('lc.ml_type', array(1, 2));
  return $this->db->get('master_lecture_tbl lc')->result();

}

public function get_customer_tpackages(){

  $this->db->select('mp.m_package_id, mp.m_package_title, mp.m_package_banner, mp.m_package_intro, mp.m_package_total_test, DATE_FORMAT(mp.m_package_modified, "%d-%m-%Y %h:%i %p") package_modified');
  $this->db->select("(Case when mp.m_package_type='1' Then 'Free' when mp.m_package_type='2' Then 'Paid' else ' ' end) package_type");
  $this->db->join('master_packages_tbl mp', 'mp.m_package_id = uc.t_reg_package');
  $this->db->where('mp.m_package_status', 1);
  $this->db->where('uc.t_reg_type', 2);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  return $this->db->get('user_courses_tbl uc')->result();
}

public function get_customer_package_tests($id){
  $this->db->select('mq.m_quiz_id, mq.m_quiz_title, mq.m_quiz_icon, mq.m_quiz_banner, mq.m_quiz_shortDesc, mq.m_quiz_keywords ,DATE_FORMAT(m_quiz_duration, "%H") qz_duration_hours, DATE_FORMAT(m_quiz_duration, "%i") qz_duration_minutes, DATE_FORMAT(m_quiz_duration, "%s") qz_duration_seconds, mp.m_package_title, cat.m_category_name');

  $this->db->group_by('mq.m_quiz_id');
  $this->db->join('user_courses_tbl uc','uc.t_reg_package = mq.m_quiz_package');
  $this->db->join('master_category cat','cat.m_category_id = mq.m_quiz_category_id');
  $this->db->join('master_packages_tbl mp','mp.m_package_id = mq.m_quiz_package');
  $this->db->where('mq.m_quiz_status', 1);
  $this->db->where('mq.m_quiz_package', $id);
  $this->db->where('mp.m_package_status', 1);
  $this->db->where('uc.t_reg_type', 2);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  return $this->db->get('master_quizs_tbl mq')->result();
}

public function get_customer_package_a_test($pk, $id){

  $this->db->limit(1);
  $this->db->select('mq.m_quiz_id, mq.m_quiz_title, mq.m_quiz_shortDesc, mq.m_quiz_keywords, DATE_FORMAT(m_quiz_duration, "%H") qz_duration_hours, DATE_FORMAT(m_quiz_duration, "%i") qz_duration_minutes, DATE_FORMAT(m_quiz_duration, "%s") qz_duration_seconds, mp.m_package_title, cat.m_category_name');

  $this->db->join('master_category cat','cat.m_category_id = mq.m_quiz_category_id');
  $this->db->join('master_packages_tbl mp','mp.m_package_id = mq.m_quiz_package');
  $this->db->join('user_courses_tbl uc','uc.t_reg_package = mp.m_package_id');
  $this->db->where('mq.m_quiz_status', 1);
  $this->db->where('mq.m_quiz_id', $id);
  $this->db->where('uc.t_reg_package', $pk);
  $this->db->where('mp.m_package_status', 1);
  $this->db->where('uc.t_reg_type', 2);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  return $this->db->get('master_quizs_tbl mq')->result();
}

public function get_customer_test_questions($id, $pkj){
  $this->db->select('mq.m_ques_id, mq.m_ques_title_en, mq.m_ques_op1_en, mq.m_ques_op2_en, mq.m_ques_op3_en, mq.m_ques_op4_en, ql.m_level_title');
  $this->db->group_by('mq.m_ques_id');
  $this->db->join('master_ques_levels ql', 'ql.m_level_id = mq.m_ques_level','left');
  $this->db->join('master_quizs_tbl qz', 'qz.m_quiz_id = mq.m_ques_quiz');
  $this->db->join('master_packages_tbl mp','mp.m_package_id = qz.m_quiz_package');
  $this->db->join('user_courses_tbl uc','uc.t_reg_package = qz.m_quiz_package');
  $this->db->where('mq.m_ques_quiz', $id);
  $this->db->where('qz.m_quiz_status', 1);
  $this->db->where('qz.m_quiz_package', $pkj);
  $this->db->where('mp.m_package_status', 1);
  $this->db->where('uc.t_reg_type', 2);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  return $this->db->get('master_questions_tbl mq')->result();
}

public function insert_customer_test_ques_ans(){

  $end_time = date("Y-m-d H:i:s");

  $this->db->select('mq.m_ques_id, mq.m_ques_ans');
  $this->db->group_by('mq.m_ques_id');
  $this->db->join('master_ques_levels ql', 'ql.m_level_id = mq.m_ques_level','left');
  $this->db->join('master_quizs_tbl qz', 'qz.m_quiz_id = mq.m_ques_quiz');
  $this->db->join('master_packages_tbl mp','mp.m_package_id = qz.m_quiz_package');
  $this->db->join('user_courses_tbl uc','uc.t_reg_package = qz.m_quiz_package');
  $this->db->where('mq.m_ques_quiz', $this->input->post('test_id'));
  $this->db->where('qz.m_quiz_status', 1);
  $this->db->where('qz.m_quiz_package', $this->input->post('pkg_id'));
  $this->db->where('mp.m_package_status', 1);
  $this->db->where('uc.t_reg_type', 2);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  $ques_list = $this->db->get('master_questions_tbl mq')->result();
  
  if (empty($ques_list)) return false;

  $pkg_id     = $this->input->post('pkg_id');
  $test_id    = $this->input->post('test_id');
  $user       = $this->session->userdata('customer_id');

  $start_time = $this->input->post('time');
  $ques_ans   = $this->input->post('question');

  $quiz_time = date_diff(date_create($start_time), date_create($end_time));
  $quiz_time = $quiz_time->format("%H:%i:%s");
  $quiz_time = date("H:i:s", strtotime($quiz_time));

  $insert_data = array(
    "t_user_id"    => $this->session->userdata('customer_id'),
    "t_quiz_id"    => $this->input->post('test_id'),
    "t_total_ques" => sizeof($ques_list),
    "t_correct_ans"=> '',
    "t_wrong_ans"  => '',
    "t_quiz_time"  => $quiz_time,
  );
  $this->db->insert('trans_user_quizes',$insert_data);
  $last_id = $this->db->insert_id(); 


    $update_data = array(
      "t_correct_ans"=> 0,
      "t_wrong_ans"  => 0,
    );

  if (!empty($ques_list)) {
    foreach ($ques_list as $i => $vl) {

      if (!empty($ques_ans[$vl->m_ques_id])) {
        
        $insert_data = array(
          "trans_answer_id"=> $last_id,
          "trans_quez_id"  => $test_id,
          "trans_ques_id"  => $vl->m_ques_id,
          "trans_right_ans"=> $vl->m_ques_ans,
          "trans_given_ans"=> $ques_ans[$vl->m_ques_id],
        );
        $this->db->insert('trans_quiz_answers', $insert_data);

        if ($ques_ans[$vl->m_ques_id] == $vl->m_ques_ans) { $update_data['t_correct_ans']++;
        }else{ $update_data['t_wrong_ans']++; }

      }

    }

    $this->db->where('trans_uquiz_id', $last_id);
    return $this->db->update('trans_user_quizes',$update_data);
  }
 
}

public function insert_customer_test_ques_ans_old(){ // ans insert with skipped

  $end_time = date("Y-m-d H:i:s");

  $this->db->select('mq.m_ques_id, mq.m_ques_ans');
  $this->db->group_by('mq.m_ques_id');
  $this->db->join('master_ques_levels ql', 'ql.m_level_id = mq.m_ques_level','left');
  $this->db->join('master_quizs_tbl qz', 'qz.m_quiz_id = mq.m_ques_quiz');
  $this->db->join('master_packages_tbl mp','mp.m_package_id = qz.m_quiz_package');
  $this->db->join('user_courses_tbl uc','uc.t_reg_package = qz.m_quiz_package');
  $this->db->where('mq.m_ques_quiz', $this->input->post('test_id'));
  $this->db->where('qz.m_quiz_status', 1);
  $this->db->where('qz.m_quiz_package', $this->input->post('pkg_id'));
  $this->db->where('mp.m_package_status', 1);
  $this->db->where('uc.t_reg_type', 2);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  $ques_list = $this->db->get('master_questions_tbl mq')->result();
  
  if (empty($ques_list)) return false;

  $pkg_id     = $this->input->post('pkg_id');
  $test_id    = $this->input->post('test_id');
  $user       = $this->session->userdata('customer_id');

  $start_time = $this->input->post('time');
  $ques_ans   = $this->input->post('question');

  $quiz_time = date_diff(date_create($start_time), date_create($end_time));
  $quiz_time = $quiz_time->format("%H:%i:%s");
  $quiz_time = date("H:i:s", strtotime($quiz_time));

  $insert_data = array(
    "t_user_id"    => $this->session->userdata('customer_id'),
    "t_quiz_id"    => $this->input->post('test_id'),
    "t_total_ques" => sizeof($ques_list),
    "t_correct_ans"=> '',
    "t_wrong_ans"  => '',
    "t_quiz_time"  => $quiz_time,
  );
  $this->db->insert('trans_user_quizes',$insert_data);
  $last_id = $this->db->insert_id(); 


    $update_data = array(
      "t_correct_ans"=> 0,
      "t_wrong_ans"  => 0,
    );

  if (!empty($ques_list)) {
    foreach ($ques_list as $i => $vl) {
      $insert_data = array(
        "trans_answer_id"=> $last_id,
        "trans_quez_id"  => $test_id,
        "trans_ques_id"  => $vl->m_ques_id,
        "trans_right_ans"=> $vl->m_ques_ans,
        "trans_given_ans"=> '',
      );

      if (!empty($ques_ans[$vl->m_ques_id])) {
        $insert_data['trans_given_ans'] = $ques_ans[$vl->m_ques_id];
        if ($ques_ans[$vl->m_ques_id] == $vl->m_ques_ans) {
          $update_data['t_correct_ans']++;
        }else{ $update_data['t_wrong_ans']++; }
      }

      $this->db->insert('trans_quiz_answers', $insert_data);
    }


    $this->db->where('trans_uquiz_id', $last_id);
    return $this->db->update('trans_user_quizes',$update_data);
  }
 
}

public function get_customer_notes(){

  $this->db->select('mn.m_notes_id, mn.m_notes_title, mn.m_notes_banner, mn.m_notes_intro, DATE_FORMAT(mn.m_notes_modified, "%d-%m-%Y %h:%i %p") notes_modified, ct.m_category_name, sc.s_category_name');
  $this->db->select("(Case when mn.m_notes_type='1' Then 'Free' when mn.m_notes_type='2' Then 'Paid' else ' ' end) notes_type");

  $this->db->join('master_notes_tbl mn', 'mn.m_notes_id = uc.t_reg_notes');
  $this->db->join('master_category ct', 'ct.m_category_id = mn.m_notes_category','left');
  $this->db->join('sub_category sc', 'sc.s_category_id = mn.m_notes_subcategory','left');
  $this->db->where('mn.m_notes_status', 1);
  $this->db->where('uc.t_reg_type', 3);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  return $this->db->get('user_courses_tbl uc')->result();

}

public function get_customer_notes_subjects($id){

  $this->db->select('ms.m_subject_id, ms.m_subject_title, ms.m_subject_desc, ms.m_subject_icon, mn.m_notes_title');

  $this->db->join('master_notes_tbl mn', 'mn.m_notes_id = ms.m_subject_typeid');
  $this->db->join('user_courses_tbl uc','uc.t_reg_notes = ms.m_subject_typeid');
  $this->db->where('mn.m_notes_status', 1);
  $this->db->where('uc.t_reg_type', 3);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  $this->db->where('ms.m_subject_for', 2);
  $this->db->where('ms.m_subject_typeid',$id);
  $this->db->where('ms.m_subject_status', 1);
  return $this->db->get('master_subject_tbl ms')->result();

}

public function get_customer_nsub_notes_files($sub_id, $notes_id){

  $this->db->select('nf.nf_file_title, nf.nf_file_name, ms.m_subject_title, mn.m_notes_title');
  $this->db->join('master_subject_tbl ms', 'ms.m_subject_id = nf.nf_subject');
  $this->db->join('master_notes_tbl mn', 'mn.m_notes_id = ms.m_subject_typeid');
  $this->db->join('user_courses_tbl uc', 'uc.t_reg_notes = ms.m_subject_typeid');
  $this->db->where('mn.m_notes_status', 1);
  $this->db->where('uc.t_reg_type', 3);
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  $this->db->where('ms.m_subject_for', 2);
  $this->db->where('ms.m_subject_typeid',$notes_id);
  $this->db->where('ms.m_subject_status', 1);
  $this->db->where('nf.nf_subject',$sub_id);
  return $this->db->get('notes_file_tbl nf')->result();

}
//========================/Customer===========================//

//=========================Wishlist===========================//

public function insert_wishlist($id, $user,$type){
   
    if($type == 1)   
    {
       $insert_type = "t_wishlist_course";
       $checkexist = $this->db->query("select t_wishlist_user from user_wishlist_tbl where t_wishlist_user='$user' and t_wishlist_course='$id'")->result();
    }

    if($type == 2)   
    {
       $insert_type = "t_wishlist_package";
       $checkexist = $this->db->query("select t_wishlist_user from user_wishlist_tbl where t_wishlist_user='$user' and t_wishlist_package='$id'")->result();
    }

     if($type == 3)   
    {
       $insert_type = "t_wishlist_notes";
        $checkexist = $this->db->query("select t_wishlist_user from user_wishlist_tbl where t_wishlist_user='$user' and t_wishlist_notes='$id'")->result();
    }

    if(empty($checkexist))
    {
  
     $data = array(
      "t_wishlist_type"=>$type,
      "t_wishlist_user" => $user,
      "".$insert_type."" => $id,
    );
     $this->db->insert('user_wishlist_tbl', $data);
     return true;

    }
    else
    {

        $output = array(
              "status"=>"fail",
              "message"=> "Already Added Into Wishlist"
            );
            echo json_encode($output);
            die();
    }

   }

public function get_all_course_wishlist(){
  $this->db->select('uc.t_wishlist_id, uc.t_wishlist_course, cr.m_course_id, cr.m_course_view, cr.m_course_title, cr.m_course_code, cr.m_course_banner, cr.m_course_price, cr.m_course_offer_price, DATE_FORMAT(uc.t_wishlist_added_on, "%d-%m-%Y %h:%i %p") added_on, ct.m_category_name');
  $this->db->join('master_course_tbl cr', 'cr.m_course_id = uc.t_wishlist_course','left');
  $this->db->join('master_category ct', 'ct.m_category_id = cr.m_course_category','left');
  $this->db->where('uc.t_wishlist_user', $this->session->userdata('customer_id'));
  $this->db->where('uc.t_wishlist_type', 1);
  return $this->db->get('user_wishlist_tbl uc')->result();
}

public function get_all_test_wishlist(){
  $this->db->select('uc.t_wishlist_id, uc.t_wishlist_package, mp.m_package_id, mp.m_package_title, mp.m_package_banner, mp.m_package_price, mp.m_package_offer_price, DATE_FORMAT(uc.t_wishlist_added_on, "%d-%m-%Y %h:%i %p") added_on');
  $this->db->join('master_packages_tbl mp', 'mp.m_package_id = uc.t_wishlist_package','left');
  $this->db->where('uc.t_wishlist_user', $this->session->userdata('customer_id'));
  $this->db->where('uc.t_wishlist_type',2);
  return $this->db->get('user_wishlist_tbl uc')->result();
}

public function get_all_notes_wishlist(){
  $this->db->select('uc.t_wishlist_id, uc.t_wishlist_notes, mn.m_notes_title, mn.m_notes_id, mn.m_notes_banner, mn.m_notes_price, mn.m_notes_offer_price, DATE_FORMAT(uc.t_wishlist_added_on, "%d-%m-%Y %h:%i %p") added_on, ct.m_category_name, sc.s_category_name');
  $this->db->join('master_notes_tbl mn', 'mn.m_notes_id  = uc.t_wishlist_notes','left');
  $this->db->join('master_category ct', 'ct.m_category_id = mn.m_notes_category','left');
  $this->db->join('sub_category sc', 'sc.s_category_id = mn.m_notes_subcategory','left');
  $this->db->where('uc.t_wishlist_user', $this->session->userdata('customer_id'));
  $this->db->where('uc.t_wishlist_type',3);
  return $this->db->get('user_wishlist_tbl uc')->result();
}
//========================/Wishlist===========================//

//============================User============================//
public function customer_details(){
  $this->db->select('au.kh_user_fname, au.kh_user_contact, au.kh_user_alt_contact, au.kh_user_email, au.kh_user_address, au.kh_user_city, au.kh_user_area_id, au.kh_user_image, au.kh_user_status, au.kh_user_gender, au.kh_user_dob, au.khu_adhar_no, au.khu_pan_no,au.kh_user_id');
  $this->db->select('ml.m_location_city, ma.area_name, ms.m_state_id, ms.m_state_name, mc.m_country_id, mc.m_country_name');
  $this->db->join('master_area ma', 'ma.area_id = au.kh_user_area_id','left');
  $this->db->join('master_locations_tbl ml','ml.m_location_id=au.kh_user_city','left');
  $this->db->join('master_state_tbl ms', 'ms.m_state_id = ml.m_location_state','left');
  $this->db->join('master_country_tbl mc', 'mc.m_country_id = ml.m_location_country','left');
  $this->db->where('au.kh_user_id', $this->session->userdata('customer_id'));
  return $this->db->get('master_users au')->result();
}

public function registration_detail($regid){
 
  $this->db->join('master_course_tbl cr', 'cr.m_course_id = uc.t_reg_course','left');
  $this->db->where('uc.t_reg_id', $regid);
  return $this->db->get('user_courses_tbl uc')->result();
}
//===========================/User============================//

//==========================Location==========================//
public function update_address(){

  $update_data = array(
    "kh_user_fname"      => $this->input->post('kh_user_fname'),
    "kh_user_contact"    => $this->input->post('kh_user_contact'),
    "kh_user_alt_contact"=> $this->input->post('kh_user_alt_contact'),
    "kh_user_city"       => $this->input->post('kh_user_city'),
    "kh_user_area_id"    => $this->input->post('kh_user_area_id'),
    "kh_user_email"      => $this->input->post('kh_user_email'),
    "kh_user_address"    => $this->input->post('kh_user_address'),
    "kh_user_gender"     => $this->input->post('kh_user_gender'),
    "kh_user_dob"        => $this->input->post('kh_user_dob'),
    "khu_adhar_no"       => $this->input->post('khu_adhar_no'),
    "khu_pan_no"         => $this->input->post('khu_pan_no'),
    // "kh_modified_by"  => $this->session->userdata('customer_id'),
    // "kh_modified_on"  => date("Y-m-d H:i:s")
  );
  $this->db->where('kh_user_id',$this->session->userdata('customer_id'));
  return $this->db->update('master_users',$update_data);
}
//===========================/User============================//

//============================User============================//
public function check_is_user_course($course_id){
  $this->db->select('t_reg_status');
//  $this->db->where('t_reg_status', 1);
  $this->db->where('t_reg_course', $course_id);
  $this->db->where('t_reg_type', 1);
  $this->db->where('t_reg_user', $this->session->userdata('customer_id'));
  $sql = $this->db->get('user_courses_tbl');
  return ($sql->num_rows() > 0) ? 1 : 0;
}

public function check_is_user_test($package_id){
  $this->db->select('t_reg_status');
//  $this->db->where('t_reg_status', 1);
  $this->db->where('t_reg_package', $package_id);
  $this->db->where('t_reg_type', 2);
  $this->db->where('t_reg_user', $this->session->userdata('customer_id'));
  $sql = $this->db->get('user_courses_tbl');
  return ($sql->num_rows() > 0) ? 1 : 0;
}

public function check_is_user_notes($notes_id){
  $this->db->select('t_reg_status');
//  $this->db->where('t_reg_status', 1);
  $this->db->where('t_reg_notes', $notes_id);
  $this->db->where('t_reg_type', 3);
  $this->db->where('t_reg_user', $this->session->userdata('customer_id'));
  $sql = $this->db->get('user_courses_tbl');
  return ($sql->num_rows() > 0) ? 1 : 0;
}

public function insert_free_course($course_id){
  $info = array('status'=>'success', 'id'=>$course_id, 'message'=>'Course Added Successfully.');
  if ($this->check_is_user_course($course_id)) {
    $info = array( 'status'=>'success', 'id'=>$course_id, 
      'message'=>'Course Already Purchased By You !');
  }else{

    $this->db->select('mq.m_course_type, mq.m_course_price, mq.m_course_offer_price');
    $this->db->where('mq.m_course_status', 1);
    $this->db->where('mq.m_course_id', $course_id);
    $a_course = $this->db->get('master_course_tbl mq')->result();
    
    if (!empty($a_course)) {
      if ($a_course[0]->m_course_type == 1) {
        $insert_data = array(
          "t_reg_type"     => 1,
          "t_reg_status"   => 1,
          "t_reg_user"     => $this->session->userdata('customer_id'),
          "t_reg_course"   => $course_id,
          "t_reg_date"     => date('Y-m-d'),
          "t_reg_amount"   => $a_course[0]->m_course_offer_price,
          "t_reg_payble"   => $a_course[0]->m_course_offer_price,
          "t_reg_discount" => '0',
          "t_reg_coupon"   => '',
          "t_reg_pay_mode" => '',
          "t_reg_remarks"  => 'Free Course, Actual Price : '.$a_course[0]->m_course_price.', Offer Price : '.$a_course[0]->m_course_offer_price,
        );
        $this->db->insert('user_courses_tbl', $insert_data);

      } else { $info = array( 'status'=>'fail', 'message'=>'Sorry Course is Not Free'); }
      
    } else { $info = array( 'status'=>'fail', 'message'=>'Course Details Not Found !'); }

  }
  return $info;
}


public function insert_free_notes($note_id){
  $info = array('status'=>'success', 'id'=>$note_id, 'message'=>'Notes Added Successfully.');
  if ($this->check_is_user_notes($note_id)) {
    $info = array( 'status'=>'success', 'id'=>$note_id, 
      'message'=>'Notes Already Purchased By You !');
  }else{

    $this->db->select('mq.m_notes_type, mq.m_notes_price, mq.m_notes_offer_price');
    $this->db->where('mq.m_notes_status', 1);
    $this->db->where('mq.m_notes_id', $note_id);
    $a_notes = $this->db->get('master_notes_tbl mq')->result();
    
    if (!empty($a_notes)) {
      if ($a_notes[0]->m_notes_type == 1) {
        $insert_data = array(
          "t_reg_type"     => 3,
          "t_reg_status"   => 1,
          "t_reg_user"     => $this->session->userdata('customer_id'),
          "t_reg_notes"   => $note_id,
          "t_reg_date"     => date('Y-m-d'),
          "t_reg_amount"   => $a_notes[0]->m_notes_offer_price,
          "t_reg_payble"   => $a_notes[0]->m_notes_offer_price,
          "t_reg_discount" => '0',
          "t_reg_coupon"   => '',
          "t_reg_pay_mode" => '',
          "t_reg_remarks"  => 'Free Course, Actual Price : '.$a_notes[0]->m_notes_price.', Offer Price : '.$a_notes[0]->m_notes_offer_price,
        );
        $this->db->insert('user_courses_tbl', $insert_data);

      } else { $info = array( 'status'=>'fail', 'message'=>'Sorry Notes is Not Free'); }
      
    } else { $info = array( 'status'=>'fail', 'message'=>'Notes Details Not Found !'); }

  }
  return $info;
}


public function insert_free_test($test_id){
  $info = array('status'=>'success', 'id'=>$test_id, 'message'=>'Test Package Added Successfully.');
  if ($this->check_is_user_notes($test_id)) {
    $info = array( 'status'=>'success', 'id'=>$test_id, 
      'message'=>'Test Package Already Purchased By You !');
  }else{

    $this->db->select('mq.m_package_type, mq.m_package_price, mq.m_package_offer_price');
    $this->db->where('mq.m_package_status', 1);
    $this->db->where('mq.m_package_id', $test_id);
    $a_test = $this->db->get('master_packages_tbl mq')->result();
    
    if (!empty($a_test)) {
      if ($a_test[0]->m_package_type == 1) {
        $insert_data = array(
          "t_reg_type"     => 2,
          "t_reg_status"   => 1,
          "t_reg_user"     => $this->session->userdata('customer_id'),
          //"t_reg_notes"   => $test_id,
          "t_reg_package"   => $test_id,
          "t_reg_date"     => date('Y-m-d'),
          "t_reg_amount"   => $a_test[0]->m_package_offer_price,
          "t_reg_payble"   => $a_test[0]->m_package_offer_price,
          "t_reg_discount" => '0',
          "t_reg_coupon"   => '',
          "t_reg_pay_mode" => '',
          "t_reg_remarks"  => 'Free Course, Actual Price : '.$a_test[0]->m_package_offer_price.', Offer Price : '.$a_test[0]->m_package_price,
        );
        $this->db->insert('user_courses_tbl', $insert_data);

      } else { $info = array( 'status'=>'fail', 'message'=>'Sorry Test Package is Not Free'); }
      
    } else { $info = array( 'status'=>'fail', 'message'=>'Package Details Not Found !'); }

  }
  return $info;
}

public function insert_registration(){

  $update_data = array(
    "t_reg_type"     => $this->input->post('t_reg_type'),
    "t_reg_user"     => $this->session->userdata('customer_id'),
    "t_reg_course"   => $this->input->post('t_reg_course'),
    "t_reg_date"     => date('Y-m-d'),
    "t_reg_amount"   => $this->input->post('t_reg_amount'),
    "t_reg_payble"   => $this->input->post('t_reg_payble'),
    "t_reg_discount" => $this->input->post('t_reg_discount'),
    "t_reg_coupon"   => $this->input->post('t_reg_coupon'),
    "t_reg_pay_mode" => $this->input->post('t_reg_pay_mode'),
    "t_reg_register_from"=>2,
  );
   $this->db->insert('user_courses_tbl',$update_data);
   return $this->db->insert_id();
}


public function insert_test_registration(){

  $update_data = array(
    "t_reg_type"     => $this->input->post('t_reg_type'),
    "t_reg_user"     => $this->session->userdata('customer_id'),
    "t_reg_package"   => $this->input->post('t_reg_package'),
    "t_reg_date"     => date('Y-m-d'),
    "t_reg_amount"   => $this->input->post('t_reg_amount'),
    "t_reg_payble"   => $this->input->post('t_reg_payble'),
    "t_reg_discount" => $this->input->post('t_reg_discount'),
    "t_reg_coupon"   => $this->input->post('t_reg_coupon'),
    "t_reg_pay_mode" => $this->input->post('t_reg_pay_mode'),
    "t_reg_register_from"=>2,
  );
   $this->db->insert('user_courses_tbl',$update_data);
   return $this->db->insert_id();
}


public function insert_notes_registration(){

  $update_data = array(
    "t_reg_type"     => $this->input->post('t_reg_type'),
    "t_reg_user"     => $this->session->userdata('customer_id'),
    "t_reg_notes"   => $this->input->post('t_reg_notes'),
    "t_reg_date"     => date('Y-m-d'),
    "t_reg_amount"   => $this->input->post('t_reg_amount'),
    "t_reg_payble"   => $this->input->post('t_reg_payble'),
    "t_reg_discount" => $this->input->post('t_reg_discount'),
    "t_reg_coupon"   => $this->input->post('t_reg_coupon'),
    "t_reg_pay_mode" => $this->input->post('t_reg_pay_mode'),
    "t_reg_register_from"=>2,
  );
   $this->db->insert('user_courses_tbl',$update_data);
   return $this->db->insert_id();
}



public function update_reg_status($status,$res_array){
   
   
    if(!empty($res_array))
    {

      $orderamount = $res_array['amount']/100;

      $orderid = explode('#',$res_array['description']);

      $checkverifyamount = $this->db->query("select t_reg_payble from user_courses_tbl where t_reg_id='".$orderid[1]."'")->result();

      if($checkverifyamount[0]->t_reg_payble == $orderamount)
      {

           $paystatus = 'Amount Paid Successfully';
      }
      else
      {
          $paystatus = 'Amount Not Matched Failed Payment';
      }

   
       $order = array(
         "t_payment_status" => $status,
         "t_reg_transaction_id" => $res_array['id'],
         "t_reg_pay_mode" =>  $res_array['method'],
         "t_reg_remarks"=>$paystatus,
         "t_reg_status"=>1,
          
       );
   
    $this->db->where("t_reg_id",$orderid[1]);
    $this->db->update("user_courses_tbl", $order);

    return;
    
    }


  }


  public function insert_course_status($topicid,$subject,$customerid){

   $check = $this->db->query("select u_course_statusid from user_course_status where u_course_subject='$subject' and u_course_topic='$topicid' and u_course_userid='$customerid'")->result();

   if(empty($check))
   {

      $update_data = array(
        "u_course_subject"     => $subject,
        "u_course_topic"     => $topicid,
        "u_course_userid"   => $customerid,
      );
       $this->db->insert('user_course_status',$update_data);
       return $this->db->insert_id();

     }
}

//===========================/User============================//

//==========================Location==========================//
public function get_all_countries(){
  $this->db->select('m_country_id, m_country_name');
  return $this->db->get('master_country_tbl')->result();
}

public function get_country_states($id){
  $this->db->select('m_state_id, m_state_name');
  $this->db->where('m_state_country', $id);
  return $this->db->get('master_state_tbl')->result();
}

public function get_state_cities($id){
  $this->db->select('m_location_id, m_location_city');
  $this->db->where('m_location_state', $id);
  $this->db->where('m_location_status', 1);
  return $this->db->get('master_locations_tbl')->result();
}

public function get_all_cities(){
  $this->db->select('m_location_id, m_location_city');
  $this->db->where('m_location_status', 1);
  return $this->db->get('master_locations_tbl')->result();
}

public function get_city_areas($id){
  $this->db->select('area_id, area_name');
  $this->db->where('area_location', $id);
  // $this->db->where('area_status', 1);
  $this->db->where('area_status', 0);
  return $this->db->get('master_area')->result();
}
//=========================/Location==========================//

//========================Wish List Add=======================//
public function insert_user_wishlist($id){
  
  $insert_data = array(
    "t_wishlist_type"   => $this->input->post('type'),
    "t_wishlist_user"   => $this->session->userdata('customer_id'),
    "t_wishlist_course" => 0,
    "t_wishlist_package"=> 0,
    "t_wishlist_notes"  => 0,
  );

   if($insert_data['t_wishlist_type'] == 1){
     $insert_data['t_wishlist_course']  = $this->input->post('wish');
   }else if($insert_data['t_wishlist_type'] == 2){
     $insert_data['t_wishlist_package'] = $this->input->post('wish');
   }else if($insert_data['t_wishlist_type'] == 3){
     $insert_data['t_wishlist_notes']   = $this->input->post('wish');
   }else{ return false; }
}
//=======================/Wish List Add=======================//


//=====================Get Coupon===========================//
  public function get_coupon_code($coupon,$id,$type){

   if($type == 1) 
   {
    $this->db->where('m_coupon_course', $id);
   }

    if($type == 2) 
   {
      $this->db->where('m_coupon_test', $id);
   }
    if($type == 3) 
   {
      $this->db->where('m_coupon_notes', $id);
   }
  
  $this->db->where('coupon_code', $coupon);
  $this->db->where('coupon_start <=', date('Y-m-d'));
  $this->db->where('coupon_end >=', date('Y-m-d'));
  return $this->db->get('master_coupon_tbl')->result();
}

//=====================//==================//==============//

//===========================/User============================//
} ?>