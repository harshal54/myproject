<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {
Public function insert_single_signature($image)
{
	$check=$this->get_single_signs();
	if($check==0)
	{
		$data=array(			
			'img'=>$image,
			'rowno'=>$_POST['rowno']		
			);

		$this->db->insert('signature', $data);
	}
	else
	{
		$data=array('img'=>$image);

		$this->db
		      ->where('rowno',$_POST['rowno'])		
		     ->update('signature', $data);
	}
	return ($this->db->affected_rows()!=1)?false:true;
}
public function get_single_signs()
{
	$datas=array(
			'rowno'=>$_POST['rowno']			
		);
	return $this->db->get_where('signature',$datas)->num_rows();
}
public function student_data(){

		$query=$this->db->select()
		->from('student')
		// ->limit($limit,$offset)
		->get();
		return $query->result_array();
}
} 
?>