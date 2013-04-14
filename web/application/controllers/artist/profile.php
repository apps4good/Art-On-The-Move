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
		$this->page_title = $user->fullname." | ".$this->config->item('site_name');

		$data = array(
			'user' => $user,
			'categs' => $this->artist_model->get_artist_categorymap(),
			'tags' => $this->artist_model->get_artist_tagmap()
		);
		
		$navdata['user'] = $user;

		$navi = $this->load->view('member/artist/profile/navi', $navdata, TRUE);
				
		$content = $this->load->view('member/artist/profile/profile_info', $data, TRUE);
		
		$this->load_view($content, $navi);
	}
	
	public function edit($form_type = NULL)
	{
		if($form_type == 'basic') {
			if($this->form_validation->run('artist_basic_info') == TRUE) {
				$this->artist_model->update_basic_info();
			}
		}
		
		redirect(base_url().'artist/profile/?id='.$this->sess_uid);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */