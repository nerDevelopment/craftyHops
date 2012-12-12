<?php
class suggest_model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();	
	}
	public function pullFirstResult($result)
	{
	//	$this->db->query('Select beerName from Beers where beer_id = '' OR beer_id = '';'');
	}
	
	public function autoName($name)
	{
			$query = $this->db->query('Select beerName From Beers');
				$results = $query->result_array();
				return $results;
	}
}