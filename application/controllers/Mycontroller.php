<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycontroller extends My_Controller {


	public function __construct()
	{
		parent::__construct();	
		if(!isset($this->session->userdata['name'])){
			redirect("Users/login");
			$this->load->library('phpmailer_lib');
			
		}
		$this->load->model('Welcome_model');
	}


	public function index()
	{ 
      //   $ip="106.14.156.213";
      //   // $_SERVER['REMOTE_ADDR'];

      //   $details=json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip={$ip}"));
      //   // print_r($details);
      // $country=$details->geoplugin_countryCode;
      // if ($country === 'CN') {
      //  echo "<h1 style='text-align:center;margin-top:150px;'>Sorry ,You are Not able to Access This Website</h1>";
      // }else{
		$data['content']='frontpage';
		$this->load->view('_layout',$data);
}
	// }


	public function add_student()
	{
// die('sdffds');
		$data['result']=$this->db->get("course")->result_array();
		$data['content'] = 'Addstudents';
		$this->load->view('_layout',$data);
	}


	public function show_student()
	{
		$this->load->model('Welcome_model');
		// $rows=$this->Welcome_model->num_rows();
		// echo $rows;die();
		// $this->load->library('pagination');
		// $config =[
		// 	'base_url' => base_url('Mycontroller/show_student'),
		// 	'per_page' =>2,
			
		// ];

		// $this->pagination->initialize($config);
		$data['result']=$this->Welcome_model->student_data();
		
		$data['content'] = 'Showstudent';
		$this->load->view('_layout',$data);
	}

	public function add_courses()
	{
		$data['content'] = 'Addcourses';
		$this->load->view('_layout',$data);
	}

	public function show_courses()
	{
		$data['result']=$this->db->get("course")->result_array();
		$data['content'] = 'Showcourses';
		$this->load->view('_layout',$data);
	}
	public function add_fees()
	{
		$data['content'] = 'Addfees';
		$this->load->view('_layout',$data);
	}
	public function show_fees()
	{
		$data['result']=$this->db->get("fees")->result_array();
		$data['content'] = 'Showfees';
		$this->load->view('_layout',$data);
	}
	public function insertstudentdata()
	{
		$data['name']      = $this->input->post('name');
		$data['email']     = $this->input->post('email');	
		$data['course_id'] = $this->input->post('course');	
		$data['fees_id']   = $this->input->post('fees');	
		$data['password']  = md5($this->input->post('password'));

		$config["allowed_types"] = 'jpg|jpeg|png';
		$config['upload_path'] = 'upload'; 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->upload->do_upload('image'))
		{ 
			$uploadData = $this->upload->data(); 
			$data['image'] = $_FILES['image']['name'];
			$this->db->insert('student',$data);
			redirect(base_url('show-student'));
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
		}
	}
	public function insertcourse()
	{
		$data['name']=$this->input->post('course');
		$this->db->insert('course',$data);
		redirect(base_url('add-courses'));
	}

	public function insertfees()
	{
		$data['fees']=$this->input->post('fees');
		$data['course_id']=$this->input->post('course');
		$this->db->insert('fees',$data);
		redirect(base_url('add-fees'));
	}

	public function deletestudent($idd)
	{
		$id= base64_decode($idd);
		$this->db->where('id', $id);
		$user=$this->db->delete('student');
		if ($user == 1) {
			$this->session->set_flashdata('danger','Student Deleted Successfully');
		}
		redirect(base_url('show-student'));
	}

	public function updatestudent($idd)
	{
// die('sdf');
		$id= base64_decode($idd);
		$data['res']=$this->db->get_where("student",array('id'=>$id))->row_array();
// print_r($data['res']);die;
		$data['result']=$this->db->get("course")->result_array();
		$data['content'] = 'updateStudent';
		$this->load->view('_layout',$data);
	}

	public function updateStudentdata($id)
	{


		$data['name']=$this->input->post('name');
		$data['course_id']=$this->input->post('course');
		$data['fees_id']=$this->input->post('fees');
		if(!empty($_FILES['image']['name']))
		{
			$config["allowed_types"] = 'jpg|jpeg|png';
			$config['upload_path'] = 'upload'; 
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('image'))
			{ 
				$uploadData = $this->upload->data(); 
				$data['image'] = $_FILES['image']['name'];
			}

		}
		$this->db->update('student', $data,array('id'=>$id));
		$this->session->set_flashdata('success','Student Updated Successfully');
		redirect(base_url('show-student'));
	}

	public function getfees(){
		if (isset($_POST['courseID']))
		{
			$id=$_POST['courseID'];
			$user=$this->db->get_where('fees',array('course_id'=>$id))->row_array();

			if (!empty($user['fees']))
			{
				$res=["status"=>1,"data"=>$user['fees']];
			}
			else
			{
				$res=["status"=>1,"data"=>'not found'];
			}
			echo json_encode($res);
			die;

		}
	}
	public function google_map()
	{
		$data['content']='googleMap';
		$this->load->view('_layout',$data);

	}
	public function calendar()
	{
		$data['content']='calender';
		$this->load->view('_layout',$data);

	}
	public function products(){
		$data['result']=$this->db->get("products")->result_array();

		$data['content']='products';
		$this->load->view('_layout',$data);
	}

}
?>