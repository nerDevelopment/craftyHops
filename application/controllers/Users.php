<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index()
	{
	}
	public function setSession($user)
		{
			$data = array(
						'fbUser_id' => $user[0]['fbUser_id'],
						'firstName' => $user[0]['firstName'],
						'lastName' => $user[0]['lastName'],
						'email' => $user[0]['email'],
						'loggedIn' => TRUE
					);
	}
	
	public function addUserToData()
	{
		$email_exists = $this->users_model->email_exists($_POST['email']);
		if ($email_exists){
			echo json_encode (array(
				'success' => false,
				'message' => 'emailError',
				'text' => 'Sorry, it looks like your email already exists!'
			));
			
		}else{
			$user = $this->users_model->addUser($_POST);
			$this->setSession($user);
			
		}
	}
			
	public function addFbUser()
	{
		$user = $this->users_model->checkFaceData($_POST);
		$this->setSession($user);
	}
}