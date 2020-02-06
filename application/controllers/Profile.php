<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->database();
    	$this->load->model('Login_model');
	}
	public function index(){

		 $id = $this->session->userdata('id');
		 $data['result'] = $this->db->query("select * from admin where id = $id")->result();
		$this->load->view('header');
		$this->load->view('profile',$data);
		
		$this->load->view('footer');
	}
}
?>