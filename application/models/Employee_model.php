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
            SELECT *
            FROM department
            LEFT JOIN position
            ON department.departmentID=position.departmentID 
            WHERE department.departmentstatus = "Active"

        ');
			$employee = $this->db->query('
            SELECT * FROM employee
            INNER JOIN position
            ON employee.positionID=position.positionID
            INNER JOIN department
            ON employee.departmentID=department.departmentID
        ');
			$department = $this->db->query('
            SELECT * FROM department WHERE departmentstatus = "Active" 
        ');
      $active = $this->db->query('
            SELECT * FROM employee WHERE status ="Active" 
        ');
      $terminated = $this->db->query('
            SELECT * FROM employee WHERE status ="Terminated" 
        ');
      $endo = $this->db->query('
            SELECT * FROM employee WHERE status ="End of Contract" 
        ');
      $resigned = $this->db->query('
            SELECT * FROM employee WHERE status ="Resigned" 
        ');

			$result1 = $employee->result();
			$result2 = $position->result();
			$result3 = $department->result();
      $result4 = $active->result();
      $result5 = $terminated->result();
      $result6 = $endo->result();
      $result7 = $resigned->result();
            return array('employee' => $result1
            	, 'position' => $result2 
              , 'department' => $result3
              , 'active' => $result4
              , 'terminated' => $result5
              , 'endo' => $result6
              , 'resigned' => $result7
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
        
    public function get_position($departmentID){
        $query = $this->db->get_where('position', array('departmentID' => $departmentID));
        return $query;
    }
}
?>


