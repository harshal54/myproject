<?php
Class Users_model extends CI_Model
{
	function saverecords($data)
	{
		$this->db->insert('users', $data);
	}
	function listdata($id)
	{
	    $this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('id'=>$id));
		//$query = $this->db->get()->result_array();
		$query = $this->db->get()->row_array();
		//$query = $this->db->query("select * from users where id = 1")->result();
		return $query;
	}
	function deleterecords($id)
	{
		$this->db->delete('users', array('id' => $id));
	}
     function displayrecordsById($id)
	{
		$query=$this->db->query("select * from users where id='".$id."'");
		return $query->result();
	}
	function updaterecords($name,$email,$mobile,$id)
	{
		$query=$this->db->query("update users SET name='$name',email='$email',mobile='$mobile' where id='".$id."'");
	}	
	function loginuser($name,$email)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('name'=>$name, 'email'=>$email));
		//$query = $this->db->get()->result_array();
		$query = $this->db->get()->row_array();
		//$query = $this->db->query("select * from users where id = 1")->result();
		return $query;
	}
}
?>