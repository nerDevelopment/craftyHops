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
		//	$this->session->set_userdata($data);
	}
		
	public function addUserToData()
		{
			$user = $this->users_model->addUser($_POST);
			$this->setSession($user);
		}
	
	public function addFbUser()
	{
		$exists = $this->users_model->checkFaceData($_POST);
		$this->setSession($user);
	}
}