<?php 
   class Employee extends CI_Controller {  
     
		public function index() 
		{ 
		  $data = array(
				'title' => 'Employee Records'
			);

			$this->load->model('Employee_model');
  			$results = $this->Employee_model->getallposition();
  			$data=array('results'=>$results);
			$this->load->view('Template/Header');
  			/*$query = $this->db->query('SELECT * FROM employee');
         	$data['results'] = $query->result();*/
			$this->load->view('Employee/Index', $data);
			$this->load->view('Template/Footer');
		} 


	    public function employee_action(){  
	           if(($_POST["action"] == "Add"))  
	           {  
	                $data = array( 
	                	
	                    'firstname' => $this->input->post('firstname'),
				        'middlename' => $this->input->post('middlename'),
				        'lastname' => $this->input->post('lastname'),
				        'gender' => $this->input->post('gender'),
				        'housenumber' => $this->input->post('housenumber'),
				        'streetname' => $this->input->post('streetname'),
				        'barangay' => $this->input->post('barangay'),
				        'city' => $this->input->post('city'),
				        'birthdate' => $this->input->post('birthdate'),
				        'contactinfo' => $this->input->post('contactinfo'),
				        'civilstatus' => $this->input->post('civilstatus'),
				        'citizenship' => $this->input->post('citizenship'),
				        'hireddate' => $this->input->post('hireddate'),
				        'department' => $this->input->post('department'),
				        'position' => $this->input->post('position'),
				        'status' => $this->input->post('status'), 
				        'basicsalary' => $this->input->post('basicsalary'),
				        'dailyrate' => $this->input->post('dailyrate'),
				        'allowance' => $this->input->post('allowance'),
				        'tinnumber' => $this->input->post('tinnumber'),
				        'sssnumber' => $this->input->post('sssnumber'),
				        'philhealthnumber' => $this->input->post('philhealthnumber'),
				        'pagibignumber' => $this->input->post('pagibignumber'),
				        'username' => $this->input->post('username'),
				        'password' => $this->input->post('password'),
				        'role_id' => $this->input->post('role_id'),

				        
	                );  
	                $this->load->model('Employee_model');  
	                $this->Employee_model->addemployee($data); 
	                $this->session->set_flashdata('employee', 'success'); 
	                redirect("Employee");

	           }  
	           if(($_POST["action"] == "Update")) 
	           {   
	                $updated_data = array(

	                	'firstname' => $this->input->post('firstname'),
				        'middlename' => $this->input->post('middlename'),
				        'lastname' => $this->input->post('lastname'),
				        'gender' => $this->input->post('gender'),
				        'housenumber' => $this->input->post('housenumber'),
				        'streetname' => $this->input->post('streetname'),
				        'barangay' => $this->input->post('barangay'),
				        'city' => $this->input->post('city'),
				        'birthdate' => $this->input->post('birthdate'),
				        'contactinfo' => $this->input->post('contactinfo'),
				        'civilstatus' => $this->input->post('civilstatus'),
				        'citizenship' => $this->input->post('citizenship'),
				        'hireddate' => $this->input->post('hireddate'),
				        'department' => $this->input->post('department'),
				        'position' => $this->input->post('position'),
				        'status' => $this->input->post('status'), 
				        'basicsalary' => $this->input->post('basicsalary'),
				        'dailyrate' => $this->input->post('dailyrate'),
				        'allowance' => $this->input->post('allowance'),
				        'tinnumber' => $this->input->post('tinnumber'),
				        'sssnumber' => $this->input->post('sssnumber'),
				        'philhealthnumber' => $this->input->post('philhealthnumber'),
				        'pagibignumber' => $this->input->post('pagibignumber'),
				        'username' => $this->input->post('username'),
				        'password' => $this->input->post('password'),
				        'role_id' => $this->input->post('role_id'),

	                );  
	                $this->load->model('Employee_model');  
	                $this->Employee_model->update($this->input->post("employeeID"), $updated_data); 
	                $this->session->set_flashdata('employee', 'success'); 
	                redirect("Employee"); 
	           }  
	      }

	    public function fetch_single_user()  
	      {  
	           $output = array();  
	           $this->load->model("Employee_model");  
	           $data = $this->Employee_model->fetch_single_user($_POST["employeeID"]);  
	           foreach($data as $r)  
	           { 
	                $output['firstname'] = $r->firstname;
	                $output['middlename'] = $r->middlename;  
	                $output['lastname'] = $r->lastname;
	                $output['gender'] = $r->gender; 
	                $output['housenumber'] = $r->housenumber;
	                $output['streetname'] = $r->streetname;
	                $output['barangay'] = $r->barangay;
	                $output['city'] = $r->city;
	                $output['birthdate'] = $r->birthdate;
	                $output['contactinfo'] = $r->contactinfo;
	                $output['civilstatus'] = $r->civilstatus; 
	                $output['citizenship'] = $r->citizenship;
	                $output['hireddate'] = $r->hireddate;
	                $output['department'] = $r->department;
	                $output['position'] = $r->position;
	                $output['status'] = $r->status; 
	                $output['basicsalary'] = $r->basicsalary;
	                $output['dailyrate'] = $r->dailyrate;
	                $output['allowance'] = $r->allowance;
	                $output['tinnumber'] = $r->tinnumber;
	                $output['sssnumber'] = $r->sssnumber;
	                $output['philhealthnumber'] = $r->philhealthnumber;
	                $output['pagibignumber'] = $r->pagibignumber;
	                $output['username'] = $r->username;
	                $output['password'] = $r->password;
	                $output['role_id'] = $r->role_id;

	           }  
	           echo json_encode($output);  
	      }

	     public function show_active()
	      {

	      	$this->load->view('Template/Header');
  			/*$id= $this->session->userdata('userdata')['employeeID'];*/
  			$query = $this->db->query('SELECT * FROM employee WHERE status ="Active"');
         	$data['results'] = $query->result();
			$this->load->view('Employee/Index',$data);
			$this->load->view('Template/Footer');
	      }

	      public function show_terminated()
	      {

	      	$this->load->view('Template/Header');
  			/*$id= $this->session->userdata('userdata')['employeeID'];*/
  			$query = $this->db->query('SELECT * FROM employee WHERE status ="Terminated"');
         	$data['results'] = $query->result();
			$this->load->view('Employee/Index',$data);
			$this->load->view('Template/Footer');
	      }

	      public function show_endo()
	      {

	      	$this->load->view('Template/Header');
  			/*$id= $this->session->userdata('userdata')['employeeID'];*/
  			$query = $this->db->query('SELECT * FROM employee WHERE status ="End of Contract"');
         	$data['results'] = $query->result();
			$this->load->view('Employee/Index',$data);
			$this->load->view('Template/Footer');
	      }

	      public function show_resigned()
	      {

	      	$this->load->view('Template/Header');
  			/*$id= $this->session->userdata('userdata')['employeeID'];*/
  			$query = $this->db->query('SELECT * FROM employee WHERE status ="Resigned"');
         	$data['results'] = $query->result();
			$this->load->view('Employee/Index',$data);
			$this->load->view('Template/Footer');
	      }
	      }     
?>
