<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Department_model extends CI_Model
{

  function __construct() 
  { 
     parent::__construct(); 
  }

    public function adddepartment($data)  
    {  
       
          $query = $this->db->query("SELECT description FROM Department
                               WHERE description = '".$data."'");
         if($query->num_rows() == 0){
        $data = array(
            'description' => $this->input->post('description'),
            'departmentstatus' => $this->input->post('departmentstatus')
             );
            $this->db->insert('department', $data);
        }
        else {
            return false;
        }
             //$this->db->insert('department', $data);  
          }
    

    public function fetch_single_dept($departmentID)  
        {  
           $this->db->where("departmentID", $departmentID);  
           $query=$this->db->get('department');  
           return $query->result();  
        }  
    public function update($departmentID, $data)  
        {  


          $query = $this->db->query("select departmentid,employeeID,fullname,description,status from 
              (
              select emp.departmentid,emp.employeeID,concat(emp.firstname,' ',emp.middlename,' ',emp.lastname) as fullname,d.description,emp.status from employee as emp
              left  join  department as  d on emp.departmentid = d.departmentid
              where emp.status like 'Active' and emp.departmentid = '".$departmentID."'
              )a");
            if($query->num_rows() == 0){
                $data1 = array(
                'description' => $this->input->post('description'),
                'departmentstatus' => $this->input->post('departmentstatus')
             );
               if($data1 == 0) {
              $cond = "5";
              }else{
             $cond = "" .$data;
          } 

           $this->db->where("departmentID", $departmentID);  
           $this->db->update("department", $data);  
        } 
         else {
            return false;
        } 
      } 
}
?>
