<?php 
class RegisterModel extends CI_model
{
	function registration($array)
	{
		//$insertArray = array(
       
      // 'Name' => $this->input->post('nam'),
      // 'Email' =>$this->input->post('eml'),
       //'RollNo'=>$this->input->post('roll'),
       //'password'=>$this->input->post('pass'),
      // 'Gender'=>$this->input->post('gndr'),
      // 'DOB'=>$this->input->post('dob'),
       //'image'=>$this->input->post('uploads'),
      // );
       

       // $this->load->database();

      if( $this->db->insert('stdregister',$array))
       {
       	return true;
       }
       else
       {
       	return false;
       }
		
	}

       function loginwork()
       {
              $email = $this->input->post('eml');
              $password = $this->input->post('pass');
            //$post= $this->input->post();
           // array_pop($post);

              $this->db->where(['Email'=> $email ,'password'=> $password]);
            //$this->db->where($post);
            $data = $this->db->get('stdregister');

            if($data->num_rows()!=0)
            {
              
              $userdata=$data->row();
              //print_r($userdata);
              //$this->load->library('session');
              $this->session->set_userdata('uid',$userdata->std_id);
              
            
              return true;

            }
            else
            {
              return false;
            }

       }

       function fetchdata($id)
       {
        $this->db->where('std_id',$id);
        $data=$this->db->get('stdregister');
        
        return $data->row();
       }
}
?>