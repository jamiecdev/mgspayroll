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
	                $data = array(

	               		'departmentID' => $this->input->post('departmentID'),  
	                    'posdescription' => $this->input->post('posdescription')
	                );  
	                $this->load->model('Position_model');  
	                $this->Position_model->addposition($data); 
	                $this->session->set_flashdata('position', 'pos');  
	                redirect("Position");

	           }  
	           if($_POST["action"] == "Update")  
	           {   
	                $updated_data = array( 
	                	'departmentID' => $this->input->post('departmentID'),   
	                    'posdescription' => $this->input->post('posdescription')
	                );  
	                $this->load->model('Position_model');  
	                $this->Position_model->update($this->input->post("positionID"), $updated_data); 
	                $this->session->set_flashdata('department', 'success'); 
	                redirect("Position"); 
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