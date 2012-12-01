<?php
class users_model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();	
	}
	
	public function addFaceUser($fbUser)
	{
		$this->db->query('INSERT INTO Users (user_id, firstName, lastName, email)
							VALUE ("'.$fbUser[""].'","'.$fbUser["user_id"].'","'.$fbUser["firstName"].'","'.$fbUser["lastName"].'","'.$fbUser["email"]'");');
		$uId = $this->db->insert_id();				
		
		$query = $this->db->query('SELECT user_id, firstName, lastName, email FROM Users WHERE user_id ="'.$uId.'";');
		$results = $query->result_array();
		return $results;
	}
	
}