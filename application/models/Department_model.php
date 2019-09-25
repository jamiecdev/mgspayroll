<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Department_model extends CI_Model
{

  function __construct() 
  { 
     parent::__construct(); 
  }

    public function adddepartment($data)  
    {  
       
          $query = $this->db->query("SELECT description FROM department
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
          public function DescriptionDuplicatechecking($data)
{
            $query = $this->db->get_where('department', array('departmentID' <> $data)); 

                if ($query->num_rows() == 0 )
                {
                      return FALSE;
                }
                else
                {
                        return TRUE;
                }
}

    public function update($departmentID,$data)  
        {  
                $queryDuplicate = $this->db->query('select * from department where departmentid!='.$departmentID.' AND description="'.$this->input->post('description').'"');

                if($queryDuplicate->num_rows() == 0){
                  if($this->input->post('departmentstatus')=="Inactive"){
                      $queryCheckUser = $this->db->query('select * from employee where departmentid='.$departmentID.' AND status="Active"');
                          
                      if($queryCheckUser->num_rows() == 0){
                          $data1 = array( 'description' => $this->input->post('description'),
                                        'departmentstatus' => $this->input->post('departmentstatus')
                                  );

                        $this->db->where("departmentID", $departmentID);  
                        $this->db->update("department", $data1);  
                        //$departmentstatus = $this->input->post('departmentstatus');
                        return 'true';
                      }else{
                        return 'false|Department is currently in used!'; 
                      }
                  }else{
                        $data1 = array( 'description' => $this->input->post('description'),
                                        'departmentstatus' => $this->input->post('departmentstatus')
                                  );

                        $this->db->where("departmentID", $departmentID);  
                        $this->db->update("department", $data1);  
                        //$departmentstatus = $this->input->post('departmentstatus');
                        return 'true|';
                  }
                }else{
                    return 'false|Department already exist!'; 
                }
              
          /*$query = $this->db->query("select departmentid,employeeID,fullname,description,status from 
              (
              select emp.departmentid,emp.employeeID,concat(emp.firstname,' ',emp.middlename,' ',emp.lastname) as fullname,d.description,emp.status from employee as emp
              left  join  department as  d on emp.departmentid = d.departmentid
              where emp.status like 'Active' and emp.departmentid = '".$departmentID."'
              )a");
            if($query->num_rows() == 0){
                $queryDuplicate = $this->db->query('select * from department where departmentid!='.$departmentID.' AND description=='.$this->input->post('description'));

                if($queryDuplicate->num_rows() == 0){
                        $data1 = array( 'description' => $this->input->post('description'),
                                        'departmentstatus' => $this->input->post('departmentstatus')
                                  );

                        $this->db->where("departmentID", $departmentID);  
                        $this->db->update("department", $data1);  
                        //$departmentstatus = $this->input->post('departmentstatus');
                }else{
                    return 'false|Duplicate'; 
                }
              }else {
                 return 'false|Already Used'; 
             } */
      } 
}
?>
