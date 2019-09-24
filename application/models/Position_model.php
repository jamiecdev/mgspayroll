
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Position_model extends CI_Model
{

  function __construct() 
  { 
     parent::__construct(); 
  }

  public function getallposition()
    {
      $position = $this->db->query('
            SELECT *
            FROM position
            LEFT JOIN department
            ON position.departmentID=department.departmentID
        ');
      $departmentID = $this->db->query('
            SELECT * FROM department 
        ');

      $result1 = $position->result();
      $result3 = $departmentID->result();
            return array('position' => $result1,
              'department' => $result3
            );
    }

    public function addposition($data,$positiondescription)  
      {  
          $query = $this->db->query("SELECT departmentID, positiondescription FROM position
                               WHERE positiondescription = '".$positiondescription."'");
         if($query->num_rows() == 0){
        $data = array(
            'departmentID' => $this->input->post('departmentID'),
            'positiondescription' => $this->input->post('positiondescription')
             );
            $this->db->insert('position', $data);
        }
        else {
            return false;
        }
             //$this->db->insert('department', $data);  
          }



         //$this->db->insert('position', $data);  
      //}

    public function fetch_single_position($positionID)  
        {  
           $this->db->where("positionID", $positionID);  
           $query=$this->db->get('position');  
           return $query->result();  
        }  
    public function update($positionID, $data)  
        {  
           $this->db->where("positionID", $positionID);  
           $this->db->update("position", $data);  
        }    
}
?>
