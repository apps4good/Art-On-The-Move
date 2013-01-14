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
		)
	);
?>