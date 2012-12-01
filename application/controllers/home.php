<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
	}
		
	public function index()
	{
		$this->load->view('home_view');
	}
}

