<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Department_model extends CI_Model{

    function __construct() 
    { 
       parent::__construct(); 
    }

    public function adddepartment($data)  
    {  
      $query = $this->db->query("SELECT description FROM department WHERE description = '".$data."'");

      if($query->num_rows() == 0){
      $data = array(
        'description' => $this->input->post('description'),
        'departmentstatus' => $this->input->post('departmentstatus')
         );
        $this->db->insert('department', $data);
      }
      else 
      {
      return false;
      }         
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
              return 'true|';
        }
      }else{
          return 'false|Department already exist!'; 
      }
    } 
}
?>
