<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploadpayslip_model extends CI_Model
{

  function __construct() 
  { 
     parent::__construct(); 
  }

    public function getallposition()
        {
          $payslip = $this->db->query('
            SELECT *
            FROM payslip
            INNER JOIN employee
            ON payslip.employeeID=employee.employeeID
        ');
    
          $fullname = $this->db->query('
            SELECT employeeID, firstname, middlename, lastname 
            FROM employee
        ');

           $department = $this->db->query('
            SELECT * FROM department WHERE status = "Active" 
        ');

            $select = $fullname->result();
            $result1 = $payslip->result();
            $result2 = $department->result();
            return array('payslip' => $result1
              , 'fullname' => $select
              , 'department' => $result2
            );

        }
  

    public function addpayslip($data)  
        {  
           $this->db->insert('payslip', $data);
        }

    public function fetch_single_user($employeeID)  
        {  
           $this->db->where("employeeID", $employeeID);  
           $query=$this->db->get('employee');  
           return $query->result(); 
        }

    public function deleterecord($id)
        {
           $this->db->query("delete from payslip where payslipID ='".$id."'");
        }


    function get_employee($departmentID){
        $query = $this->db->get_where('employee', array('departmentID' => $departmentID));
        return $query;
    }

}
?>

