<?php 
class Dependent_Model extends CI_Model
{
	function getStdDetails()
	{
		$id=$this->session->userdata('uid');
		$this->db->where('std_id',$id);
		$data=$this->db->get('stdregister');
		return $data->row();

	}
	function fetchSubject()
	{
		$query=$this->db->get('subject');
		return $query->result();
	}

	function fetchCategory($sub_id)
	{
       $this->db->where('sid',$sub_id);
       $query=$this->db->get('sub_category');
       $output='<option value="">-select Type-</option>';
       foreach($query->result() as $row)
       {
       	$output .='<option value="'.$row->cid.'">'.$row->category.'</option>';
       }
       return $output;
	}

	function getQuestions($stype)
	{

		$this->db->where('cid',$stype);
		$query=$this->db->get('question');
	
		print_r($query);
		
		//$output='<option value="">-select Type-</option>';
      // foreach($query->result() as $row)
       //{
       //	$output .='<option value="'.$row->qid.'">'.$row->questn.'</option>';
      // }
      // return $output;

	}
}
?>