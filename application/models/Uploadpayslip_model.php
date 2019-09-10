<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploadpayslip_model extends CI_Model
{

  function __construct() 
  { 
     parent::__construct(); 
  }

    public function getallposition()
        {
           /* $payslipname = $this->db->query('
            SELECT * FROM payslip 
        ');*/
            /*$payslip = $this->db->query('
            SELECT * FROM payslip 
        ');*/

            $payslip = $this->db->query('
            SELECT payslip.payslip, payslip.payslipdate, payslip.datecreated, payslip.payslipID, employee.firstname, employee.lastname, employee.position, employee.department
            FROM employee
            LEFT JOIN payslip
            ON employee.employeeID=payslip.employeeID
        ');
            /*$departmentID = $this->db->query('
            SELECT * FROM department 
        ');

*/
           $fullname = $this->db->query('
                SELECT employeeID, firstname, middlename, lastname FROM employee
            ');
           $department = $this->db->query('
            SELECT * FROM department 
        ');


            $select = $fullname->result();
            $result1 = $payslip->result();
            $result2 = $department->result();
            /*$result2 = $payslipname->result();*/
            // $result3 = $departmentID->result();
            return array('payslip' => $result1
              , 'fullname' => $select
              , 'department' => $result2
                /*, 'payslipname' => $result2 */
                // 'departmentID' => $result3
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
}
?>

