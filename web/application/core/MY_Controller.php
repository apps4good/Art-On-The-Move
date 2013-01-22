<?php

class MY_Controller extends CI_Controller {

	var $page_title;
	var $navidata = array();
	var $xtra_scripts = '';
	var $header_search_present;
	var $header_page_title;
	var $navbar_links = '';
	var $header_navi = '';
	var $sess_display_name;
	var $sess_uid;
	var $sess_utype;
	var $sess_is_logged_in;

	function __construct() {
		parent::__construct();
		$this -> page_title = $this -> config -> item('site_name');
		$this -> header_search_present = TRUE;
		$this -> sess_display_name = $this -> session -> userdata('display_name');
		$this -> sess_uid = $this -> session -> userdata('uid');
		$this -> sess_utype = $this -> session -> userdata('user_type');
		$this->sess_is_logged_in = $this->session->userdata('logged_in');
	}

	function load_view($content, $navi) {
		// Load the base template with output content available as $content
		$data['content'] = $content;

		$data['navi'] = $navi;

		$data['page_title'] = $this -> page_title;

		$this -> load_header_navi();
		$this -> load -> view('page-tpl', $data);
	}

	function load_1col_view($content, $header_navi = NULL) {
		$data['content'] = $content;

		$data['navi'] = array('header_navi' => $header_navi);

		$data['page_title'] = $this -> page_title;

		$this -> load_header_navi();
		$this -> load -> view('1col-page-tpl', $data);
	}

	function load_header_navi() {
		if ($this -> session -> userdata('logged_in')) {
			$data = array('display_name' => $this -> sess_display_name, 'uid' => $this -> sess_uid);

			if ($this -> sess_utype == 1) {
				$this -> header_navi = $this -> load -> view('member/artist/header_navi', $data, TRUE);
			} else {
				$this -> header_navi = $this -> load -> view('member/header_navi', $data, TRUE);
			}

		} else {
			$this -> header_navi = $this -> load -> view('header_navi', '', TRUE);
		}
	}

}
