<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * Register Model 
 * 
 */

class Login_model extends CI_Model {
	
	var $uid;
	var $password;
	var $loginId;
	
	public function __construct() {
		parent::__construct();
	}
	
	public function login()
	{
		$this->db->where('password', $this->password);
		$this->db->where('email', $this->loginId);
		
		$qry = $this->db->get('user');
		
		if($qry->num_rows() == 1) {
			$user = $qry->row();

			$sess_data = array(
				'logged_in' => TRUE,
				'uid' => $user->uid,
				'display_name' => $user->fullname,
				'user_type' => $user->user_type
			);
			
			$this->session->set_userdata($sess_data);
			
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
?>