<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Settings extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->header_search_present = FALSE;
		$this -> header_page_title = "Settings";
		$this -> load -> model('user_model');
	}

	function index() {
		$this -> account();
	}

	public function account() {
		if ($this -> form_validation -> run('settings') == FALSE) {
			$this -> header_page_title = 'Account';

			$this -> user_model -> uid = $this -> sess_uid;

			$data = array('user' => $this -> user_model -> get_user());

			$navi_data = array('active_link' => '#dashboard li#account');

			$navi = $this -> load -> view('member/dashboard/navi', $navi_data, TRUE);
			$content = $this -> load -> view('member/dashboard/account_settings', $data, TRUE);

			$this -> load_view($content, $navi);
		} else {

		}
	}

	public function password() {
		if ($this -> form_validation -> run('password_change') == FALSE) {
			$this -> header_page_title = "Change Password";

			$this -> user_model -> uid = $this -> sess_uid;

			$data = array('user' => $this -> user_model -> get_user());

			$navi_data = array('active_link' => '#dashboard li#password');

			$navi = $this -> load -> view('member/dashboard/navi', $navi_data, TRUE);

			$content = $this -> load -> view('member/dashboard/change_password', '', TRUE);

			$this -> load_view($content, $navi);
		} else {

		}
	}

}
?>