<?php 
   class Login extends CI_Controller {  
     
		public function index() 
		{ 
		  $data = array(
				'title' => 'Login'
			);

			$this->load->model('Login_model');
			$this->load->view('Template/Header', $data);
			$this->load->view('Login/Index', $data);
			$this->load->view('Template/Footer',  $data);
		} 

		public function canlogin()
		{
			if($this->session->userdata('userdata')) redirect(base_url());
			$data['title'] = 'Login';
			$this->load->view("Login/Index", $data);	
		}
		
		public function login_validation()
		{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				$this->load->model('login_model');
				$validate = $this->login_model->validate($username, $password);
				if($validate->num_rows() > 0){
					$data                = $validate->row_array();
					$employeeID          = $data['employeeID'];
					$name                = $data['username'];
					$email               = $data['email'];
					$role_id             = $data['role_id'];
					$firstname           = $data['firstname'];
					$lastname            = $data['lastname'];
					$status              = $data['status'];
					$gender              = $data['gender'];
					$department          = $data['department'];
					$position            = $data['position'];
					$housenumber         = $data['housenumber'];
					$streetname          = $data['streetname'];
					$barangay            = $data['barangay'];
					$city                = $data['city'];
					$contactinfo         = $data['contactinfo'];
					$birthdate           = $data['birthdate'];
					$civilstatus         = $data['civilstatus'];
					$citizenship         = $data['citizenship'];
					$hireddate           = $data['hireddate'];
					$basicsalary         = $data['basicsalary'];
					$dailyrate           = $data['dailyrate'];
					$allowance           = $data['allowance'];
					$tinnumber           = $data['tinnumber'];
					$sssnumber           = $data['sssnumber'];
					$philhealthnumber    = $data['philhealthnumber'];
					$pagibignumber       = $data['pagibignumber'];
					$session_data        = array(
					'employeeID'         => $employeeID, 
					'username'           => $username,
					'password'           => $password,
					'role_id'            => $role_id,
					'firstname'          => $firstname,
					'lastname'           => $lastname,
					'gender'             => $gender,
					'fullname'           => $firstname.' '.$lastname,
					'status'             => $status,
					'department'         => $department,
					'position'           => $position,
					'address'            => $housenumber.' '.$streetname.' '.$barangay.' '.$city,
					'contactinfo'        => $contactinfo,
					'birthdate'		     => $birthdate,
					'civilstatus'	     => $civilstatus,
					'citizenship'	     => $citizenship,
					'hireddate'		     => $hireddate,
					'basicsalary'		 => $basicsalary,
					'dailyrate'		     => $dailyrate,
					'allowance'		     => $allowance,
					'tinnumber'		     => $tinnumber,
					'sssnumber'		     => $sssnumber,
					'philhealthnumber'	 => $philhealthnumber,
					'pagibignumber'		 => $pagibignumber,
					'logged_in'          => TRUE
					);
					$this->session->set_userdata('userdata',$session_data);
					$this->session->set_flashdata('dashboard', 'success'); 
					redirect(base_url() .'dashboard');
				}
				else
				{

					$this->session->set_flashdata('error', 'Invalid Username or password');
					redirect(base_url());
				}
			}
	     
		 public function logout()
		 {
		    $this->session->unset_userdata('userdata');
		    redirect(base_url());
		 }


	      }     
?>
