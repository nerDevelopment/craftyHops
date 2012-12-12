<?php
class users_model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();	
	}
	
	public function updateUser($user)
	{
		$this->db->query('Update Users Set firstName = "'.$user["firstN"].'",
											lastName = "'.$user["lastN"].'",
											email = "'.$user["email"].'",
											password = "'.$user["pass"].'"
											');
								  
		$query = $this->db->query('Select firstName, lastName, user_id, email From Users Where email ="'.$user["email"].'"');
		$results = $query->result_array();
		return $results;
	}
	
	public function email_exists($user)
	{
		$emailCh = $this->db->query("Select email From Users Where email ='$user'");
		return ($emailCh->num_rows() > 0) ? true : false;
	}
	
	public function addUser($user)
	{
		$password = $_POST['pass'];
		$salt = 'nerDev';
		$newPass = md5($salt.$password);
		$email = $_POST["email"];
		$info = $_POST;
			
			$this->db->query('Insert into Users(firstName, lastName, email, password)
												Value("'.$info['firstN'].'","'.$info["lastN"].'","'.$email.'","'.$newPass.'")');
				
//				$userId = $this->db->insert_id();
//						  
//			$query = $this->db->query('Select fistName, lastname, user_id From Users Where user_Id ="'.$userId.'";');
//			$results = $query->result_array();
//			return $results;
	}
		
		public function checkFaceData($fbUser_id)
		{
			$info = $_POST;
			$idCheck = $this->db->query('Select fbUser_id from Users Where fbUser_id ="'.$_POST["fbUser_id"].'"');
			
			if($idCheck->num_rows() > 0){
					$this->db->query('Update Users Set firstName = "'.$info["firstName"].'",
												lastName = "'.$info["lastName"].'",
												email = "'.$info["email"].'", profilePic"'.$info["url"].'"
												Where Users.fbUser_id ="'.$info["fbUser_id"].'"');
					
				$query = $this->db->query('Select email, fbUser_id From Users Where fbUser_id ="'.$fbUser["fbUser_id"].'";');
					$results = $query->result_array();
					return $results;
			}else{
				$this->db->query('Insert into Users(fbUser_id, firstName, lastName, email, profilePic)
												Value("'.$info['fbUser_id'].'","'.$info["firstName"].'","'.$info["lastName"].'","'.$info["email"].'","'.$info["url"].'")');	
												
				$uId = $this->db->insert_id();
				
				$select = $this->db->query('SELECT user_id, firstName, lastName, email, profilePic FROM Users WHERE user_id ="'.$uId.'"');
				$results = $select->result_array();
				return $results;
			}		
		}		
	}