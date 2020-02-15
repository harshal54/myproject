<?php
class Seller extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->database();
    	$this->load->model('Sellerprofile');
	}
public function index()
{
 if(!isset($this->session->userdata['mobile']))
		{
			redirect("Login");
		}
		$this->load->view('header');
		$this->load->view('seller');
		$this->load->view('footer');
	}
	public function sellerdata()
	{
		if($this->input->post('submit'))
		{
			$data['seller_name']=$this->input->post('name');
			 $data['bus_name']=$this->input->post('bname');
			  $data['email']=$this->input->post('email');
			   $data['mobile']=$this->input->post('mobile');
			    $data['password']=$this->input->post('password');
			     $data['whatsapp']=$this->input->post('whatsapp');
			      $data['address']=$this->input->post('address');

			if(!empty($_FILES['image']['name']))
			{
			 $config['upload_path'] = './uploads/';
			  $config['allowed_types'] = 'gif|jpg|jpeg|png';
			   $config['overwrite'] = TRUE;
			    $config['encrypt_name'] = FALSE;
			     $config['file_name'] = $_FILES['image']['name'];
			$this->load->library('upload',$config);
			 $this->upload->initialize($config);
			  if ($this->upload->do_upload('image'))
			  {
		  	   $uploadData=$this->upload->data();
			    $data['image']= $uploadData['file_name'];
			}
			else
			{
			$this->session->set_flashdata(array("data"=>array("type"=>'alert alert-danger', 'content'=>$this->upload->display_errors())));
			redirect($_SERVER['HTTP_REFERER']);
			}
			}
			else
			{
			$data['image']="";
			}
			 $this->Sellerprofile->sellerdata($data);
			  $this->session->set_flashdata(array("data"=>array("type"=>'alert alert-success', 'content'=>'Profile Inserted Successfully')));
				redirect('Seller');	
		}
	}
	public function sellerlist(){

		$user['seller'] = $this->Sellerprofile->listdata();
		 $this->load->view('header');
		  $this->load->view('sellerinfo',$user);
		   $this->load->view('footer');
		
	}
	public function deleteseller()
	{
        $id=$this->input->get('id');
        $res = $this->Sellerprofile->deleteseller('seller',array('seller_id'=>$id));

        if($res){
          	$this->session->set_flashdata(array("data"=>array("type"=>'alert alert-success', 'content'=>'Seller Deleted Successfully')));
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$this->session->set_flashdata(array("data"=>array("type"=>'alert alert-danger', 'content'=>'Seller Deletion failed')));
			redirect($_SERVER['HTTP_REFERER']);
		}
		
	}
	public function editseller(){
		$id=$this->input->get('id');
		 $result['seller']= $this->Sellerprofile->sellerrecordsbyid($id);
		  $this->load->view('header');
		   $this->load->view('sellerupdate',$result);		 
		    $this->load->view('footer');
    }
    public function updateseller()
    { 
    	 	$id=$this->input->get('id');
		     $data['seller_name']=$this->input->post('name');
			  $data['bus_name']=$this->input->post('bname');
			   $data['email']=$this->input->post('email');
			    $data['mobile']=$this->input->post('mobile');
			     $data['password']=$this->input->post('password');
			      $data['whatsapp']=$this->input->post('whatsapp');
			       $data['address']=$this->input->post('address');
			        $where['seller_id'] = $id;

			if(isset($_FILES['image']['name']) &&  $_FILES['image']['name'] !='')
			{
				$config['upload_path'] = './uploads/';
				 $config['allowed_types'] = 'gif|jpg|jpeg|png';
				  $config['overwrite'] = TRUE;
				   $config['encrypt_name'] = FALSE;
				    $config['file_name'] = $_FILES['image']['name'];
				     $this->load->library('upload',$config);
				      $this->upload->initialize($config);
				if($this->upload->do_upload('image'))
			 	{
					$uploadData=$this->upload->data();
					$data['image']= $uploadData['file_name'];
				}
				else
				{
					$this->session->set_flashdata(array("data"=>array("type"=>'alert alert-danger', 'content'=>$this->upload->display_errors())));
					redirect($_SERVER['HTTP_REFERER']);
				}
			}else{
				$data['image']= $this->input->post('hiddenimage');
				
			}
			
			 $res = $this->Sellerprofile->updateseller('seller',$data,$where);
			 if($res){
			 	$this->session->set_flashdata(array("data"=>array("type"=>'alert alert-success', 'content'=>'Profile updated Successfully')));
				redirect('Seller/sellerlist');
			 }else{
			 	$this->session->set_flashdata(array("data"=>array("type"=>'alert alert-danger', 'content'=>'Profile updated failed')));
				redirect('Seller/sellerlist');
			 }			 
			}		
}
?>