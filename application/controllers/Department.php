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
		
		public function department_action()
		{  
	       	if($_POST["action"] == "Add")  
	       	{  

	       		$this->load->library('form_validation');
		    // field name, error message, validation rules
		    	$this->form_validation->set_rules('description', 'Description', 'trim|callback_exists_in_database');
			    if($this->form_validation->run() == FALSE)
		        {
				    $data = $this->input->post("description");
		            $this->load->model('Department_model');  
		            $this->Department_model->adddepartment($data); 
		            $this->session->set_flashdata('department', 'dept');  
		            redirect("Department");
					$this->reservate();				       
				}else{

				    $data = $this->input->post("description");
					$this->load->model('Department_model');  
		            $this->session->set_flashdata('error', 'exists');
				    redirect("Department",'refresh');
				    $this->reservate();
	       		}
	    	} 
	       	if($_POST["action"] == "Update")  
	       	{   
	       		$this->load->library('form_validation');
		    // field name, error message, validation rules
		    	$this->form_validation->set_rules('description', 'Description');
		      
			    if($this->form_validation->run() == FALSE)
			    {

		            $updated_data = array(   

		                'description' => $this->input->post('description'),
		                'departmentstatus' => $this->input->post('departmentstatus')
		            );  
		            $this->load->model('Department_model');  
		            $result = $this->Department_model->update($this->input->post("departmentID"), $updated_data); 
		            $retval = explode("|",$result);

		            if($retval[0] == "false" && $retval[1] == "Department is currently in used!"){
						$this->session->set_flashdata('error', 'used'); 
		                redirect("Department"); 
		            }else if($retval[0] == "false" && $retval[1] == "Department already exist!"){
		    			$this->session->set_flashdata('error', 'exists'); 
		                redirect("Department"); 
		            }else{
		                $this->session->set_flashdata('department', 'dept'); 
		                redirect("Department"); 
		            }   
		        } 
		  	}
		}

		public function exists_in_database($description)
	    {
            $query = $this->db->get_where('department', array('description' => $description)); 

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

	    public function fetch_single_dept()  
	    {
           $output = array();  
           $this->load->model("Department_model");  
           $data = $this->Department_model->fetch_single_dept($_POST["departmentID"]);  
           foreach($data as $r)  
           { 
                $output['description'] = $r->description;
                $output['departmentstatus'] = $r->departmentstatus;
           }  
           echo json_encode($output);  
	   	}  
	}
?>