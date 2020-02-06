<?php
Class Login_model extends CI_Model
{
	function loginuser($mobile,$password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where(array('mobile'=>$mobile, 'password'=>$password));
		
		$query = $this->db->get()->result();
		
		return $query;
	}
	//  function displayrecordsById($id)
	// {
	// 	$query=$this->db->query("select * from admin where id='".$id."'");
	// 	return $query->result();
	// }
}
?>