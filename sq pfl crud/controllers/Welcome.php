<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		 if(!isset($this->session->userdata['mobile']))
		{
			redirect("Login");
		}
		$this->load->view('header');
		$this->load->view('content');
		$this->load->view('footer');
	}
}
