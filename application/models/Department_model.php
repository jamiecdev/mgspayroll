<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Department_model extends CI_Model
{

  function __construct() 
  { 
     parent::__construct(); 
  }

  	public function adddepartment($data)  
	    {  
	       $this->db->insert('department', $data);  
	    }

    public function fetch_single_dept($departmentID)  
        {  
           $this->db->where("departmentID", $departmentID);  
           $query=$this->db->get('department');  
           return $query->result();  
        }  
    public function update($departmentID, $data)  
        {  
           $this->db->where("departmentID", $departmentID);  
           $this->db->update("department", $data);  
        }   
}
?>
