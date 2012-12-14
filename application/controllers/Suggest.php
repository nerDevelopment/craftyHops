<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suggest extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('suggest_model');
	}

	public function index()
	{
	}
	
	public function autocomplete()
	{
		$beer = $this->suggest_model->autoName($_POST);
		echo json_encode (array(
			'name' => $beer
		));
		//echo $beer;
	}
	
	public function suggestInfo()
	{
		$result = $this->suggest_model->pullFirstResult($_POST);
		
		echo  json_encode($result);
	}
}