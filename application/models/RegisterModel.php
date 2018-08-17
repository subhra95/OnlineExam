<?php 
class RegisterModel extends CI_model
{
	function registration()
	{
		$insertArray = array(
       
       'Name' => $this->input->post('nam'),
       'Email' =>$this->input->post('eml'),
       'RollNo'=>$this->input->post('roll'),
       'password'=>md5($this->input->post('pass')),
       'Gender'=>$this->input->post('gndr'),
       'DOB'=>$this->input->post('dob'),
       );
       

       // $this->load->database();

      if( $this->db->insert('stdregister',$insertArray))
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
            $udata = $this->db->get('stdregister');

            if($udata->num_rows()!=0)
            {
              return true;
             // $userdata=$data->row();
              //print_r($userdata);
              //$this->load->library('session');
             // $this->session->set_userdata('uid',$userdata->std_id);
             // return true;

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
        if($data->num_rows()==1)
        {
          $userdata=$data->row();
          return $userdata;
        }
        else
        {
          echo "wrong userid";
        }



       }
}
?>