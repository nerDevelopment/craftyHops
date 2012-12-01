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
		$exists = $this->member_model->fbCheckDB($fbUser['user_id']);		
		if($exists){
			$user = $this->member_model->updateFBUser($fbUser);
		}else{
			$user = $this->member_model->addFBUser($fbUser);
		}
	}

//	public function addFbImageURL(){
//		$user = $this->member_model->addFBImageURL($_POST);
//	}
}