<?php
    $config = array(
		'login' => array(
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|trim|valid_email'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'trim|min_length[8]|max_length[32]|required|md5'
			)
		),
		
		'register' => array(
			array(
				'field' => 'name',
				'label' => 'Full Name',
				'rules' => 'required|trim'
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|trim|valid_email'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'trim|min_length[8]|max_length[32]|required|md5'
			)
		),

		'settings' => array(
			array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required|trim'
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|trim|valid_email|callback_email_check'
			)
		),

		'password_change' => array(
			array(
				'field' => 'current_password',
				'label' => 'Current Password',
				'rules' => 'trim|min_length[8]|max_length[32]|required|md5|callback_password_check'
			),
			array(
				'field' => 'new_password',
				'label' => 'New Password',
				'rules' => 'trim|min_length[8]|max_length[32]|matches[passconf]|required'
			),
			array(
				'field' => 'passconf',
				'label' => 'Confirm New Password',
				'rules' => 'trim'
			)
		)
	);
?>