<?php 

class order_model extends MY_Model
{

	function __construct()
	{
		
	}

	public function insert($table, $data)
	{

		$this->db->insert($table, $data);
		return $this->db->insert_id(); 
	}
	

	



}