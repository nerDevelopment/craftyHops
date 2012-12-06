<?php
class users_model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();	
	}
	
	public function checkEmail($email)
	{
//		$query = $this->db->query('Select email from Users email ="'.$_POST['email'].'"');
//		$results = $query->result_array();
//		if($results){
//			return 1;
//		}
	}
	
public function addUser($user)
	{
		$password = $_POST['pass'];
		$salt = 'nerDev';
		$newPass = md5($salt.$password);
	
		$this->db->query('Insert into Users(firstName, lastName, email, password)
											Value("'.$_POST['firstN'].'","'.$_POST["lastN"].'","'.$_POST["email"].'","'.$newPass.'")');
			
			$userId = $this->db->insert_id();
					  
		$query = $this->db->query('Select fistName, lastname, user_id From Users Where user_Id ="'.$userId.'";');
		$results = $query->result_array();
		return $results;
	}
	
	public function updateUser($user)
	{
//		$this->db->query('Update Users Set firstName = "'.$user["firstN"].'",
//											lastName = "'.$user["lastN"].'",
//											email = "'.$user["email"].'",
//											password = "'.$user["pass"].'"
//											');
//								  
//		$query = $this->db->query('Select firstName, lastName, user_id, email From Users Where email ="'($user["email"]).'"');
//		$results = $query->result_array();
//		return $results;
	}
	
		public function checkFaceData($fbUser_id)
		{
			$query = $this->db->query('Select fbUser_id from Users Where fbUser_id ="'.$fbUser_id.'"');
			
			if($query->num_rows() > 0){
				
			}else{
				$this->db->query('Insert into Users (fbUser_id, firstName, lastName, email) value("'.$fbUser["fbUser_id"].'","'.$fbUser["firstName"].'","'.$fbUser["lastName"].'","'.$fbUser["email"].'")');
			}		
		}
		
		
		public function updateFBUser($fbUser) 
		{
			$this->db->query('Update Users Set firstName = "'.$fbUser["firstName"].'",
										lastName = "'.$fbUser["lastName"].'",
										email = "'.$fbUser["email"].'",
										Where Users.fbUser_id ="'.$fbUser["fbUser_id"].'"');
		
			$query = $this->db->query('Select email, fbUser_id From users Where fbUser_id ="'.$fbUser["fbUser_id"].'";');
					$results = $query->result_array();
					return $results;
		}
		
		public function addFacePhoto($pic)
		{
			$this->db->query('Update Users Set profilePic = "'.$pic["url"].'"
								Where Users.fbUser_id= "'.$pic["fbUser_id"].'"');	
	
		}
		
	public function addFaceUser($fbUser)
		{
			$this->db->query('Insert into Users(fbUser_id, firstName, lastName, email)
											Value("'.$_POST['fbUser_id'].'","'.$_POST["firstName"].'","'.$_POST["lastName"].'","'.$_POST["email"].'")');			
			
			$uId = $this->db->insert_id();	
			
			
			
//			$query = $this->db->query('SELECT fbUser_id, firstName, lastName, email FROM Users WHERE fbUser_id ="'.$uId.'";');
//			$results = $query->result_array();
//			return $results;
		}
}