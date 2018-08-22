<?php
class HomeControll extends CI_Controller
{
	function index()
	{
		$this->load->view('home.php');
	}

	function uregister()
	{
		$this->load->view('register');
	}
	function regist()
	{
		//$this->load->library('form_validation');
		$this->form_validation->set_rules('Name','Name','required');
		$this->form_validation->set_rules('Email','Email-Id','required|valid_email');
		$this->form_validation->set_rules('RollNo','Rollno','required');
		$this->form_validation->set_rules('password','Password','required|exact_length[6]');
		$this->form_validation->set_rules('Gender','Gender','required');
		$this->form_validation->set_rules('DOB','Date-Of-Birth','required');

		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='100';
		$config['max_width']='50';
		$config['max_height']='50';

		$this->load->library('upload',$config);

		if($this->form_validation->run() && $this->upload->do_upload('imagefile'))
		{
			$post=$this->input->post();
			array_pop($post);
			$data=$this->upload->data();
			//echo "<pre>";
			//print_r($data);
			//echo $post('userfile');
			$image=base_url("uploads/".$data['raw_name'].$data['file_ext']);
			//echo $image_path;
			//exit;
			$post['image']=$image;
			$this->load->model('RegisterModel');
			$status=$this->RegisterModel->registration($post);
			if($status==true)
			{
				$data['message']="successfully inserted";
			}
			else
			{
				$data['message']="not inserted";
			}
			$this->load->view('register',$data);
		}
		else
		{
			$upload_error = $this->upload->display_errors();
			$this->load->view('register',compact('upload_error'));
		}
		

		//if($this->form_validation->run()==false)
		//{
			//echo "wrong";
			//$this->load->view('register');
		//}
		//else
	  // {
	   //	$this->load->model('RegisterModel');
		
		//$status=$this->RegisterModel->registration();

		//if($status==true)
		//{
		//	$data['message']="seccessfully inserted";
		//}
		//else
	//	{
		//	$data['message']="register again";
		//}
		// $this->load->view('register.php',$data);
	//  }
	 
	}
	function homepage()
	{
		$this->load->view('home');
	}

	function userloginview()
	{
		$this->load->view('ulogin');
	}
	function userLogin()
	{

		$this->form_validation->set_rules('eml','Email','required|valid_email');
		$this->form_validation->set_rules('pass','Password','required|exact_length[6]');
		if($this->form_validation->run()==false)
		{
			$this->load->view('ulogin');
		}
		else
		{
			$this->load->model('RegisterModel');
			$status = $this->RegisterModel->loginwork();

			if($status == true)
			{

				redirect(base_url('dashboard'));
			}
		    
		    if($status == false)
			{
			
				$data['message']="Invalid Credentials";
				$this->load->view('ulogin',$data);
			}
		}
	}

	function Dashboard()
	{
       if($this->session->userdata('uid'))
       {
       	
       	$id=$this->session->userdata('uid');
        $this->load->model('RegisterModel');
       $data['user_info']=$this->RegisterModel->fetchdata($id);
       $this->load->view('welcomeUser',$data);
      }
	}

	
} 
?>