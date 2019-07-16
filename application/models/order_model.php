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
	
	
	public function get_order_detail()
	{
		
		return $this->db->get('orders')->result_array();

		 // return $this->db->get_where('status', array('is_archive ' =>0))->result_array();
	}
	public function update($table, $data, $id)
	{
		return $this->db->where('id', $id)->update($table, $data);
	}
public function delete($table, $id)
	{
		//return $this->db->where("id", $id)->update($table, array('is_archive' => 1));
		$this->db->delete($table, array('id' => $id));
	}
	public function get_row_single($table,$id){

      //return $this->db->get_where($table, 'id'=> $id)->row_array();
       //return $this->db->get_where($table,$where)->row_array();
      $row = $this->db->get_where($table,array('id' => $id))->row_array();


	}




}