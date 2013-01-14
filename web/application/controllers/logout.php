<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->session->sess_destroy();
		
		redirect('welcome');
	}
}

/* End of file logout.php */
/* Location: ./application/controllers/logout.php */