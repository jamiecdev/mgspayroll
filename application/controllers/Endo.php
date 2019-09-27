<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

   class Endo extends CI_Controller {

   function __construct(){
        parent::__construct();
        $this->load->model('Employee_model','employee_model');
    }
     
		public function index() 
		{ 
		  $data = array(
				'title' => 'End of Contract Employee Records'
			);

			$this->load->model('Employee_model');
	  		$results = $this->Employee_model->getallposition();
	  		$data=array('results'=>$results);
			$this->load->view('Template/Header');
			$this->load->view('Employee/showendo', $data);
			$this->load->view('Template/Footer');
		} 
}     
?>
