<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller {
	
	function __construct() {
		parent::__construct();
		$this->page_title = "Art on the Move - A discovery engine for local artwork and artists!";
		$this->load->model('artist_model');
	}

	public function index()
	{
		$uid = $this->input->get('id');
		
		$this->artist_model->uid = $uid;
		$user = $this->artist_model->get_profile();
		
		$this->header_page_title = $user->fullname;
		$this->header_search_present = FALSE;

		
		$data['user'] = $user;

		$navi = $this->load->view('member/artist/profile/navi', $data, TRUE);
				
		$content = $this->load->view('member/artist/profile/profile_info', $data, TRUE);
		
		$this->load_view($content, $navi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */