<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller {
	
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
				'field' => 'name',
				'label' => 'Full Name',
				'rules' => 'required|trim'
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|trim'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'trim|min_length[8]|max_length[32]|required|md5'
			)
		);
		
		$this->form_validation->set_rules($config);
		
		if ($this->form_validation->run() == FALSE) {
			$this->page_title = "Register | ".$this->config->item('site_name');

//			$view = $this->load->view('member/artist/get_started/create_profile', '', TRUE);
			$view = $this->load->view('register', '', TRUE);
			$this->load_1col_view($view);
		} else {
			$type = $this->input->post('userType');
			$this->register_model->fullname = $this->input->post('name');
			$this->register_model->usr_email = $this->input->post('email');
			$this->register_model->user_type = $type;
			
			$is_created = $this->register_model->create_user();
			
			if ($is_created) {
				if($type == 1) {
					// Redirect to Artist profile creation
					// redirect('artist/get_started/create_profile');
				} else {
					// Else just send user to home page
					redirect('welcome');
				}
			} else {
				// Set error msg and redirect to registration form
				$this->session->set_flashdata('sys_msg', 'Oops! Something went wrong. Please try again.');
				redirect('register');
			}			
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */