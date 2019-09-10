<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model
{

  function __construct() 
  { 
     parent::__construct(); 
  }

	public function getallposition()
		{
			$position = $this->db->query('
            SELECT * FROM position 
        ');
			$employee = $this->db->query('
            SELECT * FROM employee
        ');
			$department = $this->db->query('
            SELECT * FROM department 
        ');
      $active = $this->db->query('
            SELECT * FROM employee WHERE status = "Active" 
        ');

			$result1 = $employee->result();
			$result2 = $position->result();
			$result3 = $department->result();
      $result4 = $active->result();
            return array('employee' => $result1
            	, 'position' => $result2 
              , 'department' => $result3
              , 'active' => $result4
            );
		}
  

  	public function addemployee($data)  
	    {  
	       $this->db->insert('employee', $data);  
	    }

    public function fetch_single_user($employeeID)  
        {  
           $this->db->where("employeeID", $employeeID);  
           $query=$this->db->get('employee');  
           return $query->result();  
        }  
    public function update($employeeID, $data)  
        {  
           $this->db->where("employeeID", $employeeID);  
           $this->db->update("employee", $data);  
      	}    
}
?>

