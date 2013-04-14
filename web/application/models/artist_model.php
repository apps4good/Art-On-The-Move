<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * Artist Model 
 * 
 */

class Artist_model extends CI_Model {
	
	var $uid;
	var $per_page;

	public function __construct() {
		parent::__construct();
		$this->uid = $this->session->userdata('uid');
	}
	
	function get_profile() {
		$this->db->join('user', 'user.uid = artist_profile.uid', 'left');
		$this->db->join('region', 'region.region_id = artist_profile.region', 'left');
		$this->db->where('artist_profile.uid', $this->uid);

		$qry = $this->db->get('artist_profile');
		
		return $qry->row();
	}
	
	function get_artist_tagmap() {
		$this->db->where('artist_tagmap.uid', $this->uid);
		$this->db->join('art_tag', 'art_tag.tag_id = artist_tagmap.tag_id');
		$qry = $this->db->get('artist_tagmap');
		
		return $qry->result();
	}

	function get_artist_categorymap() {
		$this->db->where('artist_category_map.uid', $this->uid);
		$this->db->join('art_category', 'art_category.categ_id = artist_category_map.categ_id');
		$qry = $this->db->get('artist_category_map');
		
		return $qry->result();
	}
	
	function update_basic_info()
	{
		$data = array();
		$data['gender'] = $this->input->post('gender');
		$data['about'] = $this->input->post('about');
		
		$this->db->where('uid', $this->uid);
		$qry = $this->db->update('artist_profile', $data);
		
		if($qry) {
			return true;
		} else {
			return false;
		}
	}
}

/* End of file artpiece_model.php */
/* Location: ./application/models/artpiece_model.php */ 