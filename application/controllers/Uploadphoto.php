<?php 
   class Uploadphoto extends CI_Controller {

	   	function __construct(){
	        parent::__construct();
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
                    $output['departmentID'] = $r->departmentID;
                    $output['positionID'] = $r->positionID;
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
                    $output['photo'] = $r->photo;

               }  
               echo json_encode($output);  
          }


    	public function do_upload()
        {
                $config['upload_path']   = "./uploads/";
                $config['allowed_types'] = 'jpg|png';
                $config['overwrite']     = True;
                $config['max_size']      = 2048000;
                $config['max_width']     = 100000;
                $config['max_height']    = 100000;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->input->post('photo');

                if ( ! $this->upload->do_upload('photo'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    echo var_dump($error);
                 /*   $this->load->view('Employee/Index', $error);*/
                }
                else{
                	$data = array(

                        'photo' => $_FILES['photo']['name']
                    );  
                    $this->load->model('Employee_model');  
                    $this->Employee_model->update($this->input->post('empID'), $data); 
                    $this->session->set_flashdata('employee', 'success'); 
                    redirect("Employee"); 
                }
        }
	}
?>