<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * User Model 
 * 
 */

class User_model extends CI_Model {
	
	var $uid;
	var $user_tbl;

	public function __construct() {
		parent::__construct();
	}
	
	public function get_user() {
		$this->db->where('user.uid', $this->uid);
		$qry = $this->db->get('user');
		
		return $qry->row();
	}
}

?>