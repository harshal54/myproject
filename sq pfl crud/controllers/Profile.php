<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->database();
    	$this->load->model('Login_model');
	}
public function index()
{
 if(!isset($this->session->userdata['mobile']))
		{
			redirect("Login");
		}
		 $id = $this->session->userdata('id');
		 $data['result'] = $this->db->query("select * from admin where id = $id")->result();
		$this->load->view('header');
		$this->load->view('profile',$data);
		$this->load->view('footer');
	}
  public function updatedata(){
  	 $id = $this->session->userdata('id');
  	 $name=$this->input->post('name');
  	 $email=$this->input->post('email');
  	 $password=$this->input->post('password');
  	 $mobile=$this->input->post('mobile');
  	 $address=$this->input->post('address');
  	 $this->Login_model->updaterecords($name,$email,$password,$mobile,$address,$id);
  	$this->session->set_flashdata(array("data"=>array("type"=>'alert alert-info', 'content'=>'Profile Updated Succesfully')));
  	 redirect("Profile");
  	
  }
}
?>