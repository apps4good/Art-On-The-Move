<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {
	
	function __construct() {
		parent::__construct();
		$this->header_search_present = FALSE;
		$this->header_page_title = "Login";
		$this->load->model('login_model');
	}

	public function index()
	{
		if ($this->form_validation->run('login') == FALSE) {
			$this->page_title = "Login | ".$this->config->item('site_name');

			$view = $this->load->view('login', '', TRUE);
			$this->load_1col_view($view);
		} else {
			$this->login_model->loginId = $this->input->post('email');
			$this->login_model->password = $this->input->post('password');
			
			$loggedIn = $this->login_model->login();
			
			if($loggedIn) {
				redirect('welcome');
			} else {
				redirect('login');
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */