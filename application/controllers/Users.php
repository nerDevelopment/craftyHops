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
	
	public function addUserToData()
	{
		//$email_exists = $this->users_model->email_exists($_POST['email']);
		/* $loginObjct = array('email' => $this->input->post('email')); */
		/* $login = $this->users_model->checkRegister($loginObjct); */
		/*
if($email_exists){
		  echo json_encode (array(
				'success' => false,
				'message' => 'emailError',
				'text' => 'Sorry, it looks like your email already exists!'
			));
		}else{
		  $user = $this->users_model->addUser($_POST);
			$this->session->set_userdata('currentUser', $currentUser);
			$this->session->set_userdata('loggedin', true);
			echo('added');
		}
*/


    $email_exists = $this->users_model->email_exists($_POST['email']);
  		if ($email_exists){
  			echo json_encode (array(
  				'success' => false,
  				'message' => 'emailError',
  				'text' => 'Sorry, it looks like your email already exists!'
  			));
  		}else{
  			$user = $this->users_model->addUser($_POST);  
  			$this->session->set_userdata('currentUser', $currentUser);
  			$this->session->set)userdata('loggedin', true);
  			echo('user added');
  			echo($currentUser);			
  		}
	}
		
	public function addFbUser()
	{
		$exists = $this->users_model->checkFaceData($_POST);
		$this->setSession($user);
	}
	
	/*
public function checkLogin(){
  	$salt = 'nerDev';
		$loginObjct = array('email' => $this->input->post('email'), 'password' => md5($salt.$this->input->post('password')));
		$login = $this->Users->checkLogin($loginObjct);
		
		if($login == false){
  		echo 'email and/or password is incorrect.';
		}else{
  		$currentUser = $login;
  		$this->session->set_userdata('currentUser', $currentUser);
  		$this->session->set_userdata('loggedin', true);
  		echo('logged in');
		}
	}	
*/
}