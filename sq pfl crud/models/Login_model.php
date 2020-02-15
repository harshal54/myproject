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
	function updaterecords($name,$email,$password,$mobile,$address,$id)
	{
		$query=$this->db->query("update admin SET name='$name',email='$email',password='$password',mobile='$mobile',address='$address' where id='".$id."'");
	}	
}
?>