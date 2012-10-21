<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Art_piece extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('artpiece_model');
	}

	public function get_expo_items()
	{
		$per_page = $this->input->get('per_page');
		
		$this->artpiece_model->per_page = $this->input->get('per_page');
		$items = $this->artpiece_model->get_items();

		echo json_encode($items);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */