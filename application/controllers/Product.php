<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Product extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Product_model','product_model');
    }
 
    function index(){
       $results = $this->product_model->getallposition();
      $data=array('results'=>$results);
        $this->load->view('product_view', $data);
    }
 
    function get_employeename(){
        $departmentID = $this->input->post('id',TRUE);
        $data = $this->product_model->get_employee($departmentID)->result();
        echo json_encode($data);
    }
}