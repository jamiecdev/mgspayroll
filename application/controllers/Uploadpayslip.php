<?php 
   class Uploadpayslip extends CI_Controller {  
     
		public function index() 
		{ 
		  $data = array(
				'title' => 'Upload Payslip'
			);

			$this->load->model('Uploadpayslip_model');
  			$results = $this->Uploadpayslip_model->getallposition();
  			$data=array('results'=>$results);
			$this->load->view('Template/Header', $data);
			$this->load->view('Uploadpayslip/Index', $data);
			$this->load->view('Template/Footer',  $data);

		} 


	    public function addpayslip(){
	    $payslip = file_get_contents($_FILES['userImage']['tmp_name']);
	    $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

        $data = array( 
        	
        	'employeeID' => $this->input->post('employeeID'),
	        /*'payslipname' => $this->input->post('payslipname'),
*/	        'payslip' => $payslip
	     
        );  


        $this->load->model('Uploadpayslip_model');  
        $this->Uploadpayslip_model->addpayslip($data); 	             
        $this->session->set_flashdata('employee', 'success');  	
        redirect("Uploadpayslip");

	    }
	    

	    public function fetch_single_id()  
	      {  
	           $output = array();  
	           $this->load->model("Uploadpayslip_model");  
	           $data = $this->Uploadpayslip_model->fetch_single_user($_POST["employeeID"]);  
	           foreach($data as $r)  
	           { 
	                $output['employeeID'] = $r->employeeID;
	           }  
	           echo json_encode($output);  
	      }

	      public function deletedata()
	{
		$this->load->model('Uploadpayslip_model');
		$id = $this->input->get('id');
		$this->Uploadpayslip_model->deleterecord($id);
		redirect("Uploadpayslip");
	}  
}     
?>
