<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {
	
	function __construct() {
		parent::__construct();
		$this->header_search_present = FALSE;
		$this->load->model('user_model');
	}
	
	function index() {
		
	}
}

?>