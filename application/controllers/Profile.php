<?php 
	class Profile extends CI_Controller 
	{  
 		
		public function index() 
		{ 
			$data = array(
				'title' => 'Profile'
			);

			$this->load->view('Template/Header',$data);
			$this->load->view('Profile/Index');
			$this->load->view('Template/Footer');
		} 
	} 
?> 