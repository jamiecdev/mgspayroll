<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Position'
			);

		$this->load->model('Position_model');
		$results = $this->Position_model->getallposition();
		$data=array('results'=>$results);
		$this->load->view('Template/Header', $data);
		$this->load->view('Maintenance/position', $data);
		$this->load->view('Template/Footer',  $data);
	}
	
	public function position_action(){  
	           if($_POST["action"] == "Add")  
	           { 
	           $this->load->library('form_validation');
			    // field name, error message, validation rules
	            $this->form_validation->set_rules('posdescription', 'DepartmentID', 'trim|callback_exists_in_database'); 
			     if($this->form_validation->run() == FALSE)
	               {
	                $data = array(

	               		'departmentID' => $this->input->post('departmentID'),  
	                    'posdescription' => $this->input->post('posdescription')
	                );  
	               	$posdescription = $this->input->post('posdescription');
	                $this->load->model('Position_model');  
	                $this->Position_model->addposition($data,$posdescription); 
	                $this->session->set_flashdata('position', 'pos');  
	                redirect("Position");
	           } 
	            else
				    {
				    	$data = array(
	               		'departmentID' => $this->input->post('departmentID'),  
	                    'posdescription' => $this->input->post('posdescription')
	                );
				    $posdescription = $this->input->post('posdescription');
	                 $this->load->model('Position_model');  
	                $this->session->set_flashdata('error', 'Info');
				    redirect("Position");
				    $this->reservate(); 




				     $data = array(

	               		'departmentID' => $this->input->post('departmentID'),  
	                    'posdescription' => $this->input->post('posdescription')
	                );  
	               	$posdescription = $this->input->post('posdescription');
	                $this->load->model('Position_model');  
	                $this->Position_model->addposition($data,$posdescription); 
	                $this->session->set_flashdata('position', 'pos');  
	                redirect("Position");
			  }

	          } 	     

	           if($_POST["action"] == "Update")  
	           {   
	           	 $this->load->library('form_validation');
	           	  $this->form_validation->set_rules('posdescription', 'DepartmentID', 'trim|callback_exists_in_database'); 
			     if($this->form_validation->run() == FALSE)
	               {
	                $updated_data = array( 
	                	'departmentID' => $this->input->post('departmentID'),   
	                    'posdescription' => $this->input->post('posdescription')
	                );  
	                $posdescription = $this->input->post('posdescription');
	                $this->load->model('Position_model');  
	                $this->Position_model->update($this->input->post("positionID"), $updated_data); 
	                $this->session->set_flashdata('position', 'pos'); 
	                redirect("Position"); 
	            } 
	            else
				    {
				    	$data = array(
	               		'departmentID' => $this->input->post('departmentID'),  
	                    'posdescription' => $this->input->post('posdescription')
	                );
				    $posdescription = $this->input->post('posdescription');
	                 $this->load->model('Position_model');  
	                $this->session->set_flashdata('error', 'Info');
				    redirect("Position");
				    $this->reservate(); 

	      }
	  }
	}
	       public function exists_in_database($posdescription)
        {

                $query = $this->db->get_where('position', array('posdescription' => $posdescription)); 

                if ($query->num_rows() == 0 )
                {
                        $this->form_validation->set_message('exists_in_database', 'Please enter an existing department');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

    public function fetch_single_position()  
	      {  
	           $output = array();  
	           $this->load->model("Position_model");  
	           $data = $this->Position_model->fetch_single_position($_POST["positionID"]);  
	           foreach($data as $r)  
	           { 
	                $output['posdescription'] = $r->posdescription;
	           }  
	           echo json_encode($output);  
	      }  
}
?>