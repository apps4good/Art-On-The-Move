<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * User Model 
 * 
 */

class Artpiece_model extends CI_Model {
	
	var $id;
	var $per_page;
	var $art_piece_tbl;

	public function __construct() {
		parent::__construct();
		$this->art_piece_tbl = "art_piece";
	}
	
	function get_items() {
		$this->db->limit('30', $this->per_page);
		$this->db->order_by("ap_title", "random"); 
		
		$qry = $this->db->get($this->art_piece_tbl);
		
		return $qry->result();
	}
}

/* End of file artpiece_model.php */
/* Location: ./application/models/artpiece_model.php */ 