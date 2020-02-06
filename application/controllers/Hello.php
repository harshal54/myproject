<?php
Class Hello extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
	}
	public function savedata()
	{
	// 	$this->form_validation->set_rules('name','Name','required');
	// 	$this->form_validation->set_rules('email','Email','required|valid_email');
	// 	$this->form_validation->set_rules('mobile','Mobile','required|max_length[10]');
	// 	if($this->form_validation->run() == false)
	// {
	$this->load->view('registration');
	// }
	// else
	// {       
	    if($this->input->post('save'))
    {
		          
		    $data=array();
			$data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['mobile']=$this->input->post('mobile');
			$this->Users_model->saverecords($data);
			$this->session->set_flashdata('success','Your Account Has been Registered!');
			redirect('Hello/savedata');	
    }
	}
	public function listdata()
	{
		if(!isset($this->session->userdata['name'])){
			redirect("Hello/login");
		} 
		$id=$this->session->userdata['id'];
		$user['data']=$this->Users_model->listdata($id);
		//echo "<pre>";print_r($data['harshal']);die;
		$this->load->view('listdata',$user);
	}  
	public function deletedata()
	{
		$id=$this->input->get('id');
		$this->Users_model->deleterecords($id);
		$this->session->set_flashdata('danger','Your Account Has been Deleted!');
		redirect('Hello/listdata');
	}
	public function updatedata()
	{
		$id=$this->input->get('id');
		$result['harshal']=$this->Users_model->displayrecordsById($id);
		$this->load->view('update_records',$result);

		if($this->input->post('update'))
		{
		$n=$this->input->post('name');
		$e=$this->input->post('email');
		$m=$this->input->post('mobile');
		$this->Users_model->updaterecords($n,$e,$m,$id);
		$this->session->set_flashdata('info','Your Account Has been Updated!');	
		redirect("Hello/listdata");
		}
	}
	public function login()
	{
		if(isset($this->session->userdata['name']))
		{
			redirect("Hello/listdata");
		}
		if($this->input->post('login'))
		{ 
			$n=$this->input->post('name');
			$e=$this->input->post('email');
			if($user=$this->Users_model->loginuser($n,$e))
			{ 
			     
               $id=$user['id'];
				$session_data=array
				(   
					'id'=>$id,
                   'name'=>$n
				);
			$this->session->set_userdata($session_data);
				redirect("Hello/listdata");
			}else
			{
				$this->session->set_flashdata('danger','Invalid Login');
			}
		}
		$this->load->view('login');
	}
	public function logout(){
		 $this->session->unset_userdata('name');  
		redirect('Hello/login');
	}
}
?>