<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('artpiece_model');
		
		$data['items'] = $this->artpiece_model->get_items();
		
		$this->load->view('index', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */