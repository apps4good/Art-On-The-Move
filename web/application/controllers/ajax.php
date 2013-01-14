<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends MY_Controller {
	
	function __construct() {
		parent::__construct();
	}

	public function fetch_tags()
	{
		$this->load->model('artpiece_model');
		$tags = $this->artpiece_model->get_tags();
		
		echo json_encode($tags);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */