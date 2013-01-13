<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_started extends MY_Controller {
	
	function __construct() {
		parent::__construct();
		$this->header_search_present = FALSE;
		$this->header_page_title = "Register";
		$this->load->model('register_model');
	}

	public function index()
	{
		$config = array(
			array(
				'field' => 'city',
				'label' => 'City',
				'rules' => 'required|trim'
			),
			array(
				'field' => 'region',
				'label' => 'Region',
				'rules' => 'required|trim'
			),
			array(
				'field' => 'about',
				'label' => 'About',
				'rules' => 'trim|required'
			)
		);
		
		$this->form_validation->set_rules($config);
		
		if ($this->form_validation->run() == FALSE) {
			$this->page_title = "Create Profile | ".$this->config->item('site_name');

			$view = $this->load->view('member/artist/get_started/create_profile', '', TRUE);
			$this->load_1col_view($view);
		} else {
			$type = $this->input->post('userType');
			$this->register_model->uid = $this->session->userdata('uid');
			
			$is_created = $this->register_model->create_profile();
			
			if ($is_created) {
				redirect('welcome');
			} else {
				// Set error msg and redirect to registration form
				$this->session->set_flashdata('sys_msg', 'Oops! Something went wrong. Please try again.');
				redirect('get_started');
			}			
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */