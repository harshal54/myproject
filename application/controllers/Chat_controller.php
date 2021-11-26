<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_controller extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!isset($this->session->userdata['name'])){
			redirect("Users/login");
		}
	}
	public function chatBox($idd)
	{ 
		$receiver_id=base64_decode($idd);

		$session_id=$this->session->userdata('id');

		$data['result']=$this->db->query("SELECT * FROM `chat` WHERE (sender_id='".$session_id."' OR sender_id='".$receiver_id."') AND (receiver_id='".$receiver_id."' OR receiver_id='".$session_id."');")->result_array();

		$data['receiver_id'] = $receiver_id;
		$data['content']='chat';
		$this->load->view('_layout',$data);
	}
	public function InsertChat()
	{
		$data['sender_id']=$this->session->userdata['id'];
		$data['message']=$this->input->post('message');
		$data['receiver_id']=$this->input->post('receiver');
		$config["allowed_types"] = 'jpg|jpeg|png';
		$config['upload_path'] = 'upload'; 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->upload->do_upload('image'))
		{ 
			$uploadData = $this->upload->data(); 
			$data['image'] = str_replace(' ', '_', $_FILES['image']['name']);
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			$data['image'] = '';
		}
		$user= $this->db->insert('chat',$data);

		if ($user)
		{

			if(empty($data['image'])){
				$imageText = '';
			}else{
				$imageText = base_url().'upload/'.$data['image'];
			}
			$result = array(
				'status'     => 1,
				'message'    => $data['message'],
				'image_path' => $imageText
			);
		}
		else
		{
			// $res=["status"=>0 ];

			$result = array(
				'status'     => 0,
				'message'    => 0,
				'image_path' => 0
			);
		}
		echo json_encode($result);
	}
	public function deletedata()
	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
         $chatData=$this->db->delete('chat');
         if($chatData)
         {
         	$result=['status' =>1];
         }
         else
         {
         	$result=['status' =>0];
         }
         echo json_encode($result);
         die;
	}
	public function updatedata(){

		$data['message']=$this->input->post('message');
        $id=$this->input->post('id');
        $this->db->update('chat',$data, array('id' => $id));
	}
}
?>