<?php
class suggest_model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();	
	}
	public function pullFirstResult($result)
	{
		$avg1 = $this->db->query('Select avg(rating) as avg from Beers where beerName = "Fat Tire" OR beerName = "Rogue Santas Private Reserve ";')->result();
		$avg2 = $this->db->query('Select avg(rating) as avg from Beers where beerName = "Fat Tire" OR beerName = "Tröegs HopBack Amber Ale";')->result();
		$avg3 = $this->db->query('Select avg(rating) as avg from Beers where beerName = "Rogue Santas Private Reserve"  OR beerName = "Tröegs HopBack Amber Ale";')->result();
		
//		echo '<pre>';
//		echo var_export($avg1);
//		echo '</pre>';
		
		$result1 = $avg1[0]->avg;
		$result2 = $avg2[0]->avg;
		$result3 = $avg3[0]->avg;
		return $result3;
	}
	
	public function autoName($name)
	{
			$query = $this->db->query('Select beerName From Beers limit 10');
			$results = $query->result_array();
			return $results;
	}
	
}