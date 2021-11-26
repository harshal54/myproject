<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signature_controller extends My_Controller {

  public function index(){
  	 $data['content']='signature';
		$this->load->view('_layout',$data);
  }
	public function __construct()
	{
		parent::__construct();	
			if(!isset($this->session->userdata['name'])){
			redirect("Users/login");
			}
	}
	
	public function insert_single_signature(){
    
	$img = $_POST['image'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = './signature-image/' . uniqid() . '.png';
	$success = file_put_contents($file, $data);
	$image=str_replace('./','',$file);
    $this->Welcome_model->insert_single_signature($image);
	 echo '<img src="'.base_url().$image.'">';
	}
	}
?>