<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * Register Model 
 * 
 */

class Register_model extends CI_Model {
	
	var $uid;
	var $user_tbl;
	var $artist_tbl;
	var $user_type;
	var $usr_email;
	var $fullname;

	public function __construct()
	{
		parent::__construct();
		$this->artist_tbl = "artist_profile";
		$this->user_tbl = "user";
	}
	
	function create_user()
	{
		$userdata['fullname'] = $this->fullname;
		$userdata['signup_date'] = time();
		$userdata['status'] = 'active';
		$userdata['user_type'] = $this->user_type;
		$userdata['email'] = $this->usr_email;
		$userdata['email_verif_key'] = md5(time() . $this->usr_email);
		$userdata['password'] = $this->input->post('password');
		
		$qry = $this->db->insert('user', $userdata);
		
		if($qry) {
			$this->uid = $this->db->insert_id();
						
			if($this->user_type == 1) {
				$profile_data['uid'] = $this->uid;
				$this->db->insert('artist_profile', $profile_data);
			}
			
			$this->auto_login();
			
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	function create_artist()
	{
		$data['gender'] = $this->input->post('gender');
		$data['street_addr'] = $this->input->post('street_addr');
		$data['city'] = $this->input->post('city');
		$data['region'] = $this->input->post('region');
		$data['about'] = $this->input->post('about');
		$data['category'] = $this->input->post('category');
		
		$this->db->where('uid', $this->uid);
		$qry = $this->db->update('artist_profile', $data);
		
		if ($qry) {
			$tags = $this->input->post('specialty');
			$tags_array = explode(",", $tags);
			if(!empty($tags_array)) {
				foreach ($tags_array as $tag) {
					$exists = $this->check_if_tag_exists($tag);
					$tagged = FALSE;
					$tagId = null;

					if(!empty($exists)) {
						$tagId = $exists->tag_id;
						$tagged = $this->_already_tagged($tagId);
					} else {
						$this->db->insert('art_tag', array('tag' => $tag));
						$tagId = $this->db->insert_id();
					}
					
					if(!empty($tagId) && !$tagged) {
						$tag_data['uid'] = $this->uid;
						$tag_data['tag_id'] = $tagId;
						
						$this->db->insert('artist_tagmap', $tag_data);
					}
				}
			}
			return TRUE;
		} else {
			return FALSE;
		}		
	}

	private function _already_tagged($tagId)
	{
		$qry = $this->db->get_where('artist_tagmap', array('uid' => $this->uid, 'tag_id' => $tagId));
		return $qry->num_rows() > 0;
	}
	
	function check_if_tag_exists($tag)
	{
		$this->db->where('tag', $tag);
		$qry = $this->db->get('art_tag');
		
		return $qry->row();
	}

	function auto_login()
	{
		$data = array(
			'logged_in' => TRUE,
			'user_type' => $this->user_type,
			'uid' => $this->uid,
			'fullname' => $this->fullname
		);

		$this->session->set_userdata($data);
	}
}

/* End of file artpiece_model.php */
/* Location: ./application/models/artpiece_model.php */ 