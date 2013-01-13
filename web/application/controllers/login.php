<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {
	
	function __construct() {
		parent::__construct();
		$this->header_search_present = FALSE;
		$this->header_page_title = "Login";
	}

	public function index()
	{
		$config = array(
			array(
				'field' => 'login_id',
				'rules' => 'required|trim'
			),
			array(
				'field' => 'password',
				'rules' => 'trim|min_length[8]|max_length[32]|required|md5'
			)
		);
		
		$this->form_validation->set_rules($config);
		
		if ($this->form_validation->run() == FALSE) {
			$this->page_title = "Login | ".$this->config->item('site_name');

			$view = $this->load->view('login', '', TRUE);
			$this->load_1col_view($view);
		} else {
			
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */