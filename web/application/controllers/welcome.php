<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
	
	function __construct() {
		parent::__construct();
		$this->page_title = "Art on the Move - A discovery engine for local artwork and artists!";
	}

	public function index()
	{
		$this->header_page_title = "The Stage";
		$this->header_search_present = TRUE;

		$this->load->model('artpiece_model');
		
		$data['items'] = $this->artpiece_model->get_items();
		$sidenavi_data['categories'] = $this->artpiece_model->get_categories();
		
		$navi = $this->load->view('categories_navi', $sidenavi_data, TRUE);
		
		$this->navbar_links = $this->load->view('navbar/artworks', '', TRUE);
		
		$content = $this->load->view('artworks_gridview', $data, TRUE);
		
		$this->load_view($content, $navi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */