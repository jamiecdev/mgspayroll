<?php 
	class Viewpayslip extends CI_Controller 
	{  
 		
		public function index() 
		{ 
			$data = array(
				'title' => 'View Payslip'
			);

  			$this->load->view('Template/Header',$data);
  			$id= $this->session->userdata('userdata')['employeeID'];
  			$query = $this->db->query('SELECT * FROM payslip WHERE employeeID ='.$id);
         	$data['files'] = $query->result();
			$this->load->view('Viewpayslip/Index',$data);
			$this->load->view('Template/Footer');
		} 

		public function preview() 
		{ 
			$data = array(
				'title' => 'Preview Payslip'
			);

  	/*		$this->load->view('Template/Header',$data);*/
/*  	if(isset($_GET['payslipID'])) {*/
		$id = $this->input->get('id');
  			$query = $this->db->query("SELECT * FROM payslip WHERE payslipID ='".$id."'");
  			$data['files'] = $query->result();
				/*foreach ($data['files'] as $frow) {
	         		header("Content-type: application/pdf");
	       		 	echo $frow->payslip;
	              }*/
			$this->load->view('Viewpayslip/preview',$data);
			$this->load->view('Template/Footer');
		}
	

}
?> 