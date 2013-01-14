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
	var $category_tbl;

	public function __construct() {
		parent::__construct();
		$this->art_piece_tbl = "art_piece";
		$this->category_tbl = "art_category";
	}
	
	function get_items() {
		$categ_id = $this->input->get('category');
		if(!empty($categ_id))
		{
			$this->db->where('ap_category', $categ_id);
		}

		$this->db->limit('30', $this->per_page);
		$this->db->order_by("ap_title", "random"); 
		
		$qry = $this->db->get($this->art_piece_tbl);
		
		return $qry->result();
	}
	
	function get_categories() {
		$qry = $this->db->get($this->category_tbl);
		
		return $qry->result();
	}
	
	function get_tags() {
		$this->db->select('tag_id AS id, tag AS name', FALSE);
		$this->db->like('tag', $this->input->get('q'), 'after');
		$qry = $this->db->get('art_tag');
		
		return $qry->result_array();
	}
}

/* End of file artpiece_model.php */
/* Location: ./application/models/artpiece_model.php */ 