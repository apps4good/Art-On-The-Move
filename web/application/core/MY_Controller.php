<?php

class MY_Controller extends CI_Controller {
	
	var $page_title;
	var $navidata = array();
	var $xtra_scripts = '';
	var $header_search_present;
	var $header_page_title;
	var $navbar_links = '';
	var $header_navi = '';


	function __construct()
	{
		parent::__construct();
		$this->page_title = $this->config->item('site_name');
		$this->header_search_present = TRUE;
		$this->load_header_navi();
	}
	
	function load_view($content, $navi)
	{
		// Load the base template with output content available as $content
		$data['content'] = $content;

		$data['navi'] = $navi;

		$data['page_title'] = $this->page_title;
		$this->load->view('page-tpl', $data);		
	}
	
	function load_1col_view($content, $header_navi = NULL) {
		$data['content'] = $content;
		
		$data['navi'] = array('header_navi' => $header_navi);
		
		$data['page_title'] = $this->page_title;
		$this->load->view('1col-page-tpl', $data);
	}
	
	function load_header_navi() {
		if ($this->session->userdata('logged_in')) {
			$this->header_navi = $this->load->view('member/header_navi', '', TRUE);
		} else {
			$this->header_navi = $this->load->view('header_navi', '', TRUE);
		}
	}
}