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
  			$query = $this->db->query('SELECT *,CONCAT(md5(payslipID),md5("mgspayroll")) as encryptID FROM payslip WHERE employeeID ='.$id);
         	$data['files'] = $query->result();
			$this->load->view('Viewpayslip/Index',$data);
			$this->load->view('Template/Footer');
		} 

		public function preview() 
		{ 
			$auth = $this->input->get('auth');
			$id = $this->input->get('id');

			if($auth==md5($id).md5("mgspayroll")){
				$query = $this->db->query('SELECT *  FROM payslip WHERE payslipID ='.$id);
		  		$data['files'] = $query->result();
					
				$this->load->view('Viewpayslip/preview',$data);
			}else{
				 $this->load->view('error');
			}
		}
	}
?> 