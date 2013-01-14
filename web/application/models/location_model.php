<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * Register Model 
 * 
 */

class Location_model extends CI_Model {
	var $regionId;
	
	function __construct() {
		parent::__construct();
	}
	
	function get_regions() {
		$qry = $this->db->get('region');
		
		return $qry->result();
	}
}
?>