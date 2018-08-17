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
		$this->form_validation->set_rules('nam','Name','required');
		$this->form_validation->set_rules('eml','Email-Id','required|valid_email');
		$this->form_validation->set_rules('pass','Password','required|exact_length[6]');
		$this->form_validation->set_rules('gndr','Gender','required');
		$this->form_validation->set_rules('dob','Date-Of-Birth','required');

		if($this->form_validation->run()==false)
		{
			echo "wrong";
			$this->load->view('register');
		}
		else
	   {
	   	$this->load->model('RegisterModel');
		
		$status=$this->RegisterModel->registration();

		if($status==true)
		{
			$data['message']="seccessfully inserted";
		}
		else
		{
			$data['message']="register again";
		}
		 $this->load->view('register.php',$data);
	  }
	 
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
				echo "not matched";
				//$data['message']="Invalid Credentials";
				//$this->load->view('ulogin',$data);
			}
		}
	}

	function Dashboard()
	{
      // $id=$this->session->userdata('uid');
      // $this->load->model('RegisterModel');
      // $data['user_info']=$this->RegisterModel->fetchdata($id);
       $this->load->view('welcomeUser');
	}
} 
?>