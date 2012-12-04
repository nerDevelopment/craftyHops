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


	public function addFbUser()
	{
		$fbUser = $_POST;
		$exists = $this->users_model->checkFaceData($fbUser['user_id']);
//		if($exists){
//			$user = $this->users_model->updateFaceUser($fbUser);		
//			$this->setSession($user);
//		}else{
//			$user = $this->users_model->addFaceUser($fbUser);
//			$this->setSession($user);
//		}
		
	}

	public function addFbImageURL(){
		$user = $this->users_model->addFacePhoto($_POST);
	}
	
	function setSession($user)
	{
		$data = array(
					'user_id' => $user[0]['user_id'],
					'firstName' => $user[0]['firstName'],
					'lastName' => $user[0]['lastName'],
					'email' => $user[0]['email'],
					'loggedIn' => TRUE
				);
		$this->session->set_userdata($data);
	}
	
}