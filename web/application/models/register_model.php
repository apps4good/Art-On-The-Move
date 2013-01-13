<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * User Model 
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
		$data['full_name'] = $this->fullname;
		$data['signup_date'] = time();
		$data['status'] = 'active';
		$data['user_type'] = $this->user_type;
		$data['email'] = $this->usr_email;
		$data['email_verif_key'] = md5(time() . $this->usr_email);
		$data['password'] = $this->input->post('password');
		
		$qry = $this->db->insert('user', $data);
		
		if($qry) {
			$this->uid = $this->db->insert_id();
						
			if($this->user_type == 1) {
				$data['uid'] = $this->uid;
				$this->db->insert('artist_profile', $data);
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
		$data['addr'] = $this->input->post('street_addr');
		$data['city'] = $this->input->post('city');
		$data['region'] = $this->input->post('region');
		$data['about'] = $this->input->post('about');
		
		$this->sb->where('uid', $this->uid);
		$qry = $this->db->update('artist_profile', $data);
		
		if ($qry) {
			return TRUE;
		} else {
			return FALSE;
		}		
	}
	
	function send_verification_key()
	{
		
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