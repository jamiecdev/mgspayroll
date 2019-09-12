<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Department'
			);
		$this->load->view('Template/Header', $data);
		$query = $this->db->get("department");
		$data ['records'] = $query->result();
		$this->load->view('Maintenance/department', $data);			
		$this->load->view('Template/Footer',  $data);
	}
	
	public function department_action(){  
	           if($_POST["action"] == "Add")  
	           {  
	                $data = array(
 
	                    'description' => $this->input->post('description'),
	                    'status' => $this->input->post('status')
	                );  
	                $this->load->model('Department_model');  
	                $this->Department_model->adddepartment($data); 
	                $this->session->set_flashdata('department', 'dept');  
	                redirect("Department/index");

	           }  
	           if($_POST["action"] == "Update")  
	           {   
	                $updated_data = array(   

	                    'description' => $this->input->post('description'),
	                    'status' => $this->input->post('status')
	                );  
	                $this->load->model('Department_model');  
	                $this->Department_model->update($this->input->post("departmentID"), $updated_data); 
	                $this->session->set_flashdata('department', 'dept'); 
	                redirect("Department"); 
	           }  
	      }

    public function fetch_single_dept()  
	      {  
	           $output = array();  
	           $this->load->model("Department_model");  
	           $data = $this->Department_model->fetch_single_dept($_POST["departmentID"]);  
	           foreach($data as $r)  
	           { 
	                $output['description'] = $r->description;
	           }  
	           echo json_encode($output);  
	      }  
}
?>