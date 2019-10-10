<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

   class Uploadpayslip extends CI_Controller { 

   function __construct(){
        parent::__construct();
        $this->load->model('Uploadpayslip_model','uploadpayslip_model');
        
    } 
     
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

	    public function addpayslip()
	    {
	    	$this->load->model('Uploadpayslip_model');  
	    	$error = "";
	    	$pdfFilename = "";
	    	$pdfFilesize = "";
	    	$pdfFilenameOverwrite = "";

	    	$pdfFilenameCount = 0;
	    	$pdfSuccessCount = 0;
	    	$pdfFilesizeCount = 0;
	    	$pdfOverwriteCount = 0;

			if ($_SERVER['CONTENT_LENGTH'] > 8380000) {
				$pdfFilenameCount++;
				$pdfFilename .= '- POST Content-Length ERROR! <br>';
			} 

	    	for($i=0; $i<count($_FILES['userImage']['name']); $i++)
	        {
	            $_FILES['userfile']['name']= $_FILES['userImage']['name'][$i];
	            $_FILES['userfile']['type']= $_FILES['userImage']['type'][$i];
	            $_FILES['userfile']['tmp_name']= $_FILES['userImage']['tmp_name'][$i];
	            $_FILES['userfile']['error']= $_FILES['userImage']['error'][$i];
	            $_FILES['userfile']['size']= $_FILES['userImage']['size'][$i];
	            
	            $payslip  = file_get_contents($_FILES['userfile']['tmp_name']);
	    		$filename = explode('.',$_FILES['userfile']['name']);

			    $now = date("Y-m-d H:i:s");

			    if(strlen($filename[0]) < 6){
					$pdfFilenameCount++;
					$pdfFilename .= '- '.$_FILES['userfile']['name'].'<br>';
					continue;
				}

				if($filename[1]!="pdf"){
					$pdfFilenameCount++;
					$pdfFilename .= '- '.$_FILES['userfile']['name'].'<br>';
					continue;
				}

				if ($_FILES['userfile']['size'] >= 3000000) {
					$pdfFilesizeCount++;
					$pdfFilesize .= '- '.$_FILES['userfile']['name'].'<br>';
					continue;
				}

				if(!is_numeric($filename[0])){
					$pdfFilenameCount++;
					$pdfFilename .= '- '.$_FILES['userfile']['name'].'<br>';
					continue;
				}

			    // VALIDATION
	    		$query = $this->db->query("SELECT * FROM employee WHERE employeeID='".$filename[0]."'");

				if($query->num_rows() == 0){
					$pdfFilenameCount++;
					$pdfFilename .= '- '.$_FILES['userfile']['name'].'<br>';
				}else{
					$queryPayslip = $this->db->query("SELECT * FROM payslip WHERE employeeID='".$filename[0]."' AND payslipdate='".$this->input->post('payslipdate')."'");

					if($queryPayslip->num_rows() == 0){
						$pdfSuccessCount++;
						$data = array( 
				        	'employeeID' => $filename[0],
				        	'payslipuploaded' => $now,
					        'payslip' => $payslip,
					        'payslipdate' => $this->input->post('payslipdate')
				        );  
				        $this->Uploadpayslip_model->addpayslip($data);
		        	}else{
		        		$pdfOverwriteCount++;
						$pdfFilenameOverwrite .= '- '.$_FILES['userfile']['name'].'<br>';

						$data = array( 
					        	'payslipuploaded' => $now,
						        'payslip' => $payslip
				        );  
				        $this->Uploadpayslip_model->updatepayslip($filename[0], $this->input->post('payslipdate'), $data);
		        	}
				}
	        }

	        if($pdfFilenameCount!=0 || $pdfFilesizeCount!=0 || $pdfOverwriteCount!=0 || $pdfSuccessCount!=0){
	        	if($pdfFilenameCount!=0){
	        		$error.= "<b>".$pdfFilenameCount." file(s) not uploaded. It's either wrong format or employee number doesn't exist.</b><br>".$pdfFilename;
	        	}

	        	if($pdfFilesizeCount!=0){
	        		$error.= "<b>".$pdfFilesizeCount.' file(s) has exceeded the maximum filesize [3 MB].</b><br>'.$pdfFilesize;
	        	}

	        	if($pdfOverwriteCount!=0){
	        		$error.= "<b style='color:#4171b8;'>".$pdfOverwriteCount.' record(s) has been overwritten.</b><br>'.$pdfFilenameOverwrite;
	        	}

	        	if($pdfSuccessCount!=0){
	        		$error.= "<b style='color:#4ab841;'>".$pdfSuccessCount.' file(s) has been successfully uploaded.</b>';
	        	}
	        }

        	if($error!=""){
        		$this->session->set_flashdata('error', $error); 
        	}else{
				$this->session->set_flashdata('employee', 'success');  	
        	}
	        
	        redirect("Uploadpayslip");

		    /*$payslip = file_get_contents($_FILES['userImage']['tmp_name']);
		    $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

		    $now = date("Y-m-d H:i:s");

	        $data = array( 
	        	
	        	'employeeID' => $this->input->post('employeeID'),
	        	'payslipuploaded' => $now,
		        'payslip' => $payslip
		     
	        );  


	        $this->load->model('Uploadpayslip_model');  
	        $this->Uploadpayslip_model->addpayslip($data); 	             
	        $this->session->set_flashdata('employee', 'success');  	
	        redirect("Uploadpayslip");*/

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

		public function get_employeename()
		{
	        $departmentID = $this->input->post('id',TRUE);
	        $data = $this->uploadpayslip_model->get_employeename($departmentID)->result();
	        echo json_encode($data);
    	}
}     
?>


