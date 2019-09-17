<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Product_model extends CI_Model{
     
   public function getallposition()
        {
   
           $department = $this->db->query('
            SELECT * FROM department WHERE status = "Active" 
        ');

            $result2 = $department->result();
            return array('department' => $result2);

        }
 
    function get_employee($departmentID){
        $query = $this->db->get_where('employee', array('departmentID' => $departmentID));
        return $query;
    }
     
}
