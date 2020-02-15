<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Login extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->database();
	    	$this->load->model('Login_model');
		}
		public function index()
		{	
			 if(isset($this->session->userdata['mobile']))
			{
				redirect("Welcome");
			}
	            $this->load->view('login');
	     	}
		public function login()
		{
			 if(isset($this->session->userdata['mobile']))
			{
				redirect("Welcome");
			}
				$mobile=$this->input->post('mobile');
				$password=$this->input->post('password');
				$user=$this->Login_model->loginuser($mobile,$password);
				if($user)
				{ 
					$session_data=array
					(
						  'id'=>$user[0]->id,
						'type'=>$user[0]->type,
						'name'=>$user[0]->name,
					   'email'=>$user[0]->email,
	                  'mobile'=>$user[0]->mobile,
					);
					$this->session->set_userdata($session_data);
					redirect("Welcome");
				}
				else
				{
					 $this->session->set_flashdata(array("data"=>array("type"=>'alert alert-danger', 'content'=>'Username Password Invalid')));
					redirect("Login");
				}    
	}
	    public function logout(){
		$this->session->unset_userdata('mobile');
		redirect("Login");
	}
	}
?>