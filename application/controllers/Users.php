<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends My_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	 public function send($email){
	 	$email=base64_decode($email);
        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'incubers.harshal@gmail.com';
        $mail->Password = 'incubers';
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;
        $mail->setFrom('incubers.harshal@gmail.com', 'incubers');
        $mail->addAddress($email);
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';
        $mail->isHTML(true);
        $mailContent = "<p>Reset Password Link</p>
        http://localhost/ci_demo/Users/recoverypassword";
        $mail->Body = $mailContent;
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
        	$this->session->set_flashdata("success","Email Has Been Sent");
            $this->load->view('Forgotpassword');
        }
    }
	public function login()
	{ 
         if(isset($this->session->userdata['name']))
		{
			redirect("Mycontroller");
		}
	   $this->form_validation->set_rules('email','Email','required|valid_email');
	   $this->form_validation->set_rules('password','Password','required|min_length[6]');
	   if ($this->form_validation->run()==TRUE) {
            
	   	$email=$this->input->post('email');
	   	$password=md5($this->input->post('password'));

            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where(array('email'=>$email,'password'=>$password));
             $query=$this->db->get();
             $user=$query->row();
             if($user->email)
             {
                   $this->session->set_flashdata("success","You are Logged In");
                   	$detail=array
                   	(
                   		'id' =>$user->id,
                   		'name'=>$user->name,
                   		'email'=>$user->email,
                   		'logged_in' => TRUE
                   );
                   	$this->session->set_userdata($detail);
                    redirect(base_url('Mycontroller'));
             }
             else
             {
                  $this->session->set_flashdata("danger","invalid Email or Password");
                  redirect(base_url('Users/login'));
             }
	   	}	
		$this->load->view('Login');
	}

	public function register()
	{ 
      if(isset($this->session->userdata['name']))
		{
			redirect("Mycontroller");
		}
	   $this->form_validation->set_rules('name','Name','required');
	   $this->form_validation->set_rules('email','Email','required|valid_email');
	   $this->form_validation->set_rules('password','Password','required|min_length[6]');
	   $this->form_validation->set_rules('password2','Confirm Password','required|min_length[6]|matches[password]');
	   if ($this->form_validation->run()==TRUE) {
	   	$data=array(
           'name' =>$this->input->post('name'),
            'email' =>$this->input->post('email'),
             'password' =>md5($this->input->post('password')) ,
	   	);
	   	// $data['name']=$this->input->post('name');
	    // $data['email']=$this->input->post('email');
        //$data['password']=$this->input->post('password');

	   	$this->db->insert('admin',$data);
	   	$this->session->set_flashdata("success","Registered Successfully");
	   	redirect(base_url('Users/login'));
	   	}	
     $this->load->view('Register');
	}

	public function logout()
	{
		$this->session->unset_userdata('name');  
		redirect('Users/login');
	}

	public function forgotpassword()
	{
		 $this->form_validation->set_rules('email','Email','required|valid_email');
		 if($this->form_validation->run()==TRUE)
		 {
		 $data['email']=base64_encode($this->input->post('email'));
		 $email= $this->input->post('email');
		 $check= $this->db->get_where('admin',array('email'=>$email))->num_rows();
             // echo $data['email'];die;	
           if($check==1){
           	// print_r($data); die();
            redirect(base_url('send/'.$data['email']));

           }else{
              $this->session->set_flashdata("danger","wrong Email");
           }
		 }
		$this->load->view('Forgotpassword');
	}

	public function recoverypassword()
	{
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('password1','Confirm Password','required|min_length[6]|matches[password]');
	  if ($this->form_validation->run()==TRUE) {
          $data['password']=$this->input->post('password');
          $user=$this->db->get('admin')->result_array();
          $this->session->set_flashdata("info","Password Changed");
	  }
		  $this->load->view('recoverypassword');
	}
}
?>