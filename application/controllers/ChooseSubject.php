<?php 

class ChooseSubject extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dependent_Model');
	}
	function index()
	{
	$data['user_info']=$this->Dependent_Model->getStdDetails();
	//echo"<pre>";
	//print_r($data);
	
	$subject['subject_data'] =$this->Dependent_Model->fetchSubject();
     
       $this->load->view('selectSubject',$subject);

   
	}

	function subjectType()
	{
		if($this->input->post('sub_id'))
		{
			echo $this->Dependent_Model->fetchCategory($this->input->post('sub_id'));
		}
	}

	function questions()
	{
		if($this->input->post('stype'))
		{
	         
			echo $this->Dependent_Model->getQuestions('stype');
		}
	}

}
?>