<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('home_view');
	}
	public function addbeer()
	{
		$this->load->view('add_view');
	}
	
	public function register()
	{
		$this->load->view('register_view');
	}
	
	public function login()
	{
		$this->load->view('login_view');
	}
}

