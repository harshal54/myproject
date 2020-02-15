<?php
class Sellerprofile extends CI_Model
{
	function sellerdata($data)
	{
		$this->db->insert('seller',$data);
	}	

	function listdata()
	{
	    $this->db->select('*');
		$this->db->from('seller');
		$query = $this->db->get()->result();
		return $query;
	}

	function deleteseller($tablename,$where){
	 	$res = 	$this->db->delete($tablename,$where);
	 	return $res;
	}

	function sellerrecordsbyid($id){
		$query=$this->db->query("select * from seller where seller_id='".$id."'");
		return $query->result();
	}
	
	function updateseller($tablename,$data,$where){
		$this->db->set($data);
		$this->db->where($where);
		$res = $this->db->update($tablename);
		return $res;
	}
}
?>