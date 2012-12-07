<?php
class users_model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();	
	}
	
	public function addUser($user)
	{
		$password = $_POST['pass'];
		$salt = 'nerDev';
		$newPass = md5($salt.$password);

			$emailCh = $this->db->query('Select email from Users Where email ="'.$_POST["email"].'"');
		if($emailCh->num_rows() > 0){
			$this->db->query('Update Users Set firstName = "'.$user["firstN"].'",
												lastName = "'.$user["lastN"].'",
												email = "'.$user["email"].'",
												password = "'.$user["pass"].'"
												');
									  
			$query = $this->db->query('Select firstName, lastName, user_id, email From Users Where email ="'.$user["email"].'"');
			$results = $query->result_array();
			return $results;
		}
		else{
			$this->db->query('Insert into Users(firstName, lastName, email, password)
												Value("'.$_POST['firstN'].'","'.$_POST["lastN"].'","'.$_POST["email"].'","'.$newPass.'")');
				
				$userId = $this->db->insert_id();
						  
			$query = $this->db->query('Select fistName, lastname, user_id From Users Where user_Id ="'.$userId.'";');
			$results = $query->result_array();
			return $results;
		}
	}
		
		public function checkFaceData($fbUser_id)
		{
			$idCheck = $this->db->query('Select fbUser_id from Users Where fbUser_id ="'.$_POST["fbUser_id"].'"');
			
			if($idCheck->num_rows() > 0){
					$this->db->query('Update Users Set firstName = "'.$_POST["firstName"].'",
												lastName = "'.$_POST["lastName"].'",
												email = "'.$_POST["email"].'", profilePic"'.$_POST["url"].'"
												Where Users.fbUser_id ="'.$_POST["fbUser_id"].'"');
					
				$query = $this->db->query('Select email, fbUser_id From users Where fbUser_id ="'.$fbUser["fbUser_id"].'";');
					$results = $query->result_array();
					return $results;
			}else{
				$this->db->query('Insert into Users(fbUser_id, firstName, lastName, email, profilePic)
												Value("'.$_POST['fbUser_id'].'","'.$_POST["firstName"].'","'.$_POST["lastName"].'","'.$_POST["email"].'","'.$_POST["url"].'")');	
												
				$uId = $this->db->insert_id();
				
				$select = $this->db->query('SELECT user_id, firstName, lastName, email, profilePic FROM Users WHERE user_id ="'.$uId.'"');
				$results = $select->result_array();
				return $results;
			}		
		}		
	}