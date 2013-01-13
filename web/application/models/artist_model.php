<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * User Model 
 * 
 */

class Artist_model extends CI_Model {
	
	var $uid;
	var $per_page;
	var $profile_tbl;
	var $user_tbl;
	var $region_tbl;

	public function __construct() {
		parent::__construct();
		$this->profile_tbl = "artist_profile";
		$this->user_tbl = "user";
		$this->region_tbl = "region";
	}
	
	function get_profile() {
		$this->db->join($this->user_tbl, $this->user_tbl.'.uid = '.$this->profile_tbl.'.uid', 'left');
		$this->db->join($this->region_tbl, $this->region_tbl.'.region_id = '.$this->profile_tbl.'.region', 'left');
		$this->db->where($this->profile_tbl.'.uid', $this->uid);

		$qry = $this->db->get($this->profile_tbl);
		
		return $qry->result();
	}
}

/* End of file artpiece_model.php */
/* Location: ./application/models/artpiece_model.php */ 