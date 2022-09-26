<?php date_default_timezone_set('Asia/Kolkata');
class Main_model extends CI_model{
//============================Main============================//


  public function get_all_banners(){

  $this->db->where('m_banner_status', 1);
  return $this->db->get('master_banners_tbl')->result();
}
public function get_all_teams(){
  
  return $this->db->get('our_tems_master')->result();
}
public function get_all_partners(){
  return $this->db->get('partners_master')->result();
}
public function get_all_u_reviews(){
  return $this->db->get('master_user_reviews')->result();
}
public function get_all_popular_courses(){
  $this->db->select('cr.*, ct.m_category_name');
  $this->db->join('master_category ct','ct.m_category_id=cr.m_course_category','left');
  $this->db->where('cr.m_course_popular','1');
  $this->db->where('cr.m_course_status','1');
  return $this->db->get('master_course_tbl cr')->result();
}
public function get_all_recomended_courses(){
  $this->db->select('cr.*, ct.m_category_name');
  $this->db->join('master_category ct','ct.m_category_id=cr.m_course_category','left');
  $this->db->where('cr.m_course_recomended','1');
  $this->db->where('cr.m_course_status','1');
  return $this->db->get('master_course_tbl cr')->result();
}
public function get_all_testimonials(){
  $this->db->select('cq.rating, cq.review,mq.m_course_id, mq.m_course_title, ct.kh_user_fname');

  $this->db->join('master_course_tbl mq', 'mq.m_course_id = cq.course_id');
  $this->db->join('master_users ct', 'ct.kh_user_id = cq.user_id');

  return $this->db->get('testimonials_tbl cq')->result();
}


//==========================Category==========================//
public function get_popular_course_categories($limit){
	$this->db->limit($limit);
	$this->db->select('m_category_id, m_category_name, m_category_icon');
	$this->db->where('m_category_for', 1);
	$this->db->where('m_category_status', 1);
	return $this->db->get('master_category')->result();
}

public function get_all_categories_for($for){
  $this->db->select('m_category_id, m_category_name, m_category_icon');
  $this->db->where('m_category_for', $for);
  $this->db->where('m_category_status', 1);
  return $this->db->get('master_category')->result();
}

public function get_popular_categories($limit){
	$this->db->limit($limit);
	$this->db->select('m_category_id, m_category_name, m_category_icon, m_category_for');
	$this->db->select("(Case when m_category_for='1' Then 'Course' when m_category_for='2' Then 'Test Series' when m_category_for='3' Then 'Notes' else 0 end)category_for");
	$this->db->where('m_category_status', 1);
	return $this->db->get('master_category')->result();
}

public function get_a_category_dtl($id){
  $this->db->select('m_category_id, m_category_name, m_category_icon');
  $this->db->where('m_category_id', $id);
  $this->db->where('m_category_status', 1);
  return $this->db->get('master_category')->result();
}
//=========================/Category==========================//

//===========================Course===========================//
public function get_all_courses(){
  $this->db->select('*')->where('m_course_status','1');
  $res = $this->db->get('master_course_tbl')->result();
  if (!empty($res)) { foreach ($res as $i => $vl) {
  	$res[$i]->course_list = $this->get_aoffer_courses_limit1();
  } }
  return $res;
}
public function get_all_offers_cources(){
  $this->db->select('mc.m_offer_id, mc.m_offer_title');
  $this->db->where('mc.m_offer_status',1);
  $res = $this->db->get('master_offers_tbl mc')->result();
  if (!empty($res)) { foreach ($res as $i => $vl) {
  	$res[$i]->course_list = $this->get_aoffer_courses_limit($vl->m_offer_id);
  } }
  return $res;
}

public function get_aoffer_courses_limit($id){
  $this->db->limit(6);
  $this->db->select('cq.owc_id, mq.m_course_id, mq.m_course_title, mq.m_course_video_link, mq.m_course_banner, mq.m_course_description, mq.m_course_type, mq.m_course_price, mq.m_course_view, mq.m_course_offer_price, DATE_FORMAT(mq.m_course_modified, "%d-%m-%Y %h:%i %p") course_modified');
  $this->db->select("(Case when m_course_type='1' Then 'Free' when m_course_type='2' Then 'Paid' else ' ' end) course_type");
  $this->db->join('master_course_tbl mq', 'mq.m_course_id = cq.owc_course_id');
  $this->db->where('mq.m_course_status', 1);
  $this->db->where('cq.owc_offer_id', $id);
  return $this->db->get('offer_wise_course cq')->result();
}
public function get_aoffer_courses_limit1(){
  $this->db->limit(6);
  $this->db->select('cq.owc_id, mq.m_course_id, mq.m_course_title, mq.m_course_video_link, mq.m_course_banner, mq.m_course_description, mq.m_course_type, mq.m_course_price, mq.m_course_view, mq.m_course_offer_price, DATE_FORMAT(mq.m_course_modified, "%d-%m-%Y %h:%i %p") course_modified');
  $this->db->select("(Case when m_course_type='1' Then 'Free' when m_course_type='2' Then 'Paid' else ' ' end) course_type");
  $this->db->join('master_course_tbl mq', 'mq.m_course_id = cq.owc_course_id');
  $this->db->where('mq.m_course_status', 1);
  // $this->db->where('cq.owc_offer_id', $id);
  return $this->db->get('offer_wise_course cq')->result();
}

public function get_aoffer_all_courses($id){
  $this->db->select('cq.owc_id, mq.m_course_id, mq.m_course_title, mq.m_course_video_link, mq.m_course_banner, mq.m_course_description, mq.m_course_type, mq.m_course_view, mq.m_course_price, mq.m_course_offer_price, DATE_FORMAT(mq.m_course_modified, "%d-%m-%Y %h:%i %p") course_modified, ct.m_category_name');
  $this->db->select("(Case when m_course_type='1' Then 'Free' when m_course_type='2' Then 'Paid' else ' ' end) course_type");
  $this->db->join('master_course_tbl mq', 'mq.m_course_id = cq.owc_course_id');
  $this->db->join('master_category ct', 'ct.m_category_id = mq.m_course_category');
  $this->db->where('mq.m_course_status', 1);
  $this->db->where('cq.owc_offer_id', $id);
  return $this->db->get('offer_wise_course cq')->result();
}

public function get_a_course_details($id){
  $this->db->select('mq.m_course_id,mq.m_course_code,mq.m_course_status ,mq.m_course_title, mq.m_course_video_link, mq.m_course_banner, mq.m_course_intro, mq.m_course_view, mq.m_course_description, mq.m_course_type, mq.m_course_price, mq.m_course_offer_price, DATE_FORMAT(mq.m_course_modified, "%d-%m-%Y %h:%i %p") course_modified, ct.m_category_name');
  $this->db->select("(Case when m_course_type='1' Then 'Free' when m_course_type='2' Then 'Paid' else '' end) course_type");
  $this->db->join('master_category ct', 'ct.m_category_id = mq.m_course_category');
  $this->db->where('m_course_status', 1);
  $this->db->where('m_course_id', $id);
  return $this->db->get('master_course_tbl mq')->result();
}



public function get_popular_courses($limit){
  $this->db->limit($limit);
  $this->db->select('m_course_title, m_course_view');
  $this->db->where('m_course_status', 1);
  return $this->db->get('master_course_tbl')->result();
}

public function get_a_category_cources($id=''){
  $this->db->select('mq.m_course_id, mq.m_course_title, mq.m_course_video_link, mq.m_course_banner, mq.m_course_intro, mq.m_course_description, mq.m_course_view, mq.m_course_type, mq.m_course_price, mq.m_course_offer_price, DATE_FORMAT(mq.m_course_modified, "%d-%m-%Y %h:%i %p") course_modified, ct.m_category_name');
  $this->db->select("(Case when m_course_type='1' Then 'Free' when m_course_type='2' Then 'Paid' else ' ' end) course_type");
  $this->db->join('master_category ct', 'ct.m_category_id = mq.m_course_category');
  $this->db->where('m_course_category', $id);
  $this->db->where('m_course_status', 1);
  return $this->db->get('master_course_tbl mq')->result();
}

public function get_a_cource_subjects_topics($id=''){
  $this->db->select('sm.m_subject_id, sm.m_subject_title');
  $this->db->order_by('sm.m_subject_id','asc');
  $this->db->where('sm.m_subject_typeid', $id);
  $this->db->where('sm.m_subject_for', 1);
  $this->db->where('sm.m_subject_status', 1);
  $res = $this->db->get('master_subject_tbl sm')->result();
  if (!empty($res)) { foreach ($res as $i => $vl) {
    $res[$i]->topic_list = $this->get_acsubject_topics($vl->m_subject_id); 
  } }
  return $res;
}

public function get_acsubject_topics($id=''){
  $this->db->select("ml_title, (Case when ml_type='1' Then 'on YouTube' when ml_type='2' Then 'as Video' when ml_type='5' Then 'as PDF' else ' ' end) ml_type");
  $this->db->where('ml_subject', $id);
  $this->db->where('ml_status', 1);
  return $this->db->get('master_lecture_tbl')->result();
}
//==========================/Course===========================//

//=============================Test===========================//
public function get_a_tcategory_packages($id=''){
  $this->db->select('m_package_id, m_package_title, m_package_banner, m_package_price, m_package_offer_price, m_package_intro, m_package_desc, m_package_total_test, DATE_FORMAT(m_package_modified, "%d-%m-%Y %h:%i %p") package_modified, ct.m_category_name');
  $this->db->select("(Case when m_package_type='1' Then 'Free' when m_package_type='2' Then 'Paid' else ' ' end) package_type");
  $this->db->join('master_category ct', 'ct.m_category_id = mp.m_package_category','left');
  $this->db->where('m_package_category', $id);
  $this->db->where('m_package_status', 1);
  return $this->db->get('master_packages_tbl mp')->result();
}

public function get_a_tpackage_details($id){
  $this->db->select('m_package_id,m_package_status, m_package_title, m_package_banner, m_package_price, m_package_offer_price, m_package_intro, m_package_desc, m_package_total_test, DATE_FORMAT(m_package_modified, "%d-%m-%Y %h:%i %p") package_modified,m_package_type');
  $this->db->select("(Case when m_package_type='1' Then 'Free' when m_package_type='2' Then 'Paid' else ' ' end) package_type");
  $this->db->where('m_package_status', 1);
  $this->db->where('m_package_id', $id);
  return $this->db->get('master_packages_tbl')->result();
}
//============================/Test===========================//

//============================Notes===========================//
public function get_all_notes($ct='', $sc=''){
  $this->db->select('m_notes_id, m_notes_title, m_notes_banner, m_notes_price, m_notes_offer_price, m_notes_intro, m_notes_desc, m_notes_file, DATE_FORMAT(m_notes_modified, "%d-%m-%Y %h:%i %p") notes_modified, ct.m_category_name, sc.s_category_name');
  $this->db->select("(Case when m_notes_type='1' Then 'Free' when m_notes_type='2' Then 'Paid' else ' ' end) notes_type");
  $this->db->join('master_category ct', 'ct.m_category_id = mn.m_notes_category','left');
  $this->db->join('sub_category sc', 'sc.s_category_id = mn.m_notes_subcategory','left');
  if(!empty($sc)) $this->db->where('m_notes_subcategory', $sc);
  if(!empty($ct)) $this->db->where('m_notes_category', $ct);
  $this->db->where('m_notes_status', 1);
  return $this->db->get('master_notes_tbl mn')->result();
}

public function get_a_notes_details($id){
  $this->db->select('m_notes_id, m_notes_title, m_notes_banner, m_notes_price, m_notes_offer_price,m_notes_type ,m_notes_intro, m_notes_desc, m_notes_file, DATE_FORMAT(m_notes_modified, "%d-%m-%Y %h:%i %p") notes_modified, ct.m_category_name, sc.s_category_name');
  $this->db->select("(Case when m_notes_type='1' Then 'Free' when m_notes_type='2' Then 'Paid' else ' ' end) notes_type");
  $this->db->join('master_category ct', 'ct.m_category_id = mn.m_notes_category','left');
  $this->db->join('sub_category sc', 'sc.s_category_id = mn.m_notes_subcategory','left');
  $this->db->where('m_notes_status', 1);
  $this->db->where('m_notes_id', $id);
  return $this->db->get('master_notes_tbl mn')->result();
}
public function get_a_ncategory_subcategories($id=''){
  $this->db->select('s_category_id, s_category_name, s_category_icon');
  $this->db->where('s_m_category_id',$id);
  $this->db->where('s_category_status', 1);
  return $this->db->get('sub_category')->result();
}

public function get_a_subcategory_dtl($id){
  $this->db->select('s_category_id, s_category_name, s_category_icon');
  $this->db->where('s_category_id',$id);
  $this->db->where('s_category_status', 1);
  return $this->db->get('sub_category')->result();
}
//===========================/Notes===========================//

//===========================Explore==========================//
public function get_all_offers(){
  $this->db->select('mc.m_offer_id, mc.m_offer_title, m_offer_image');
  $this->db->where('mc.m_offer_status',1);
  return $this->db->get('master_offers_tbl mc')->result();
}

public function get_a_offer($id=''){
  $this->db->select('m_offer_title');
  $this->db->where('m_offer_id',$id);
  $this->db->where('m_offer_status',1);
  return $this->db->get('master_offers_tbl')->result();
}
//==========================/Explore==========================//

//============================View============================//
public function insert_course_view($id){
  $this->db->set('m_course_view', 'm_course_view+1', FALSE);    
  $this->db->where('m_course_id',$id);
  return $this->db->update('master_course_tbl');
}
//===========================/View============================//

//===========================/Main============================//
} ?>