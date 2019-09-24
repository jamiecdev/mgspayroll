<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model
{


    public function getallinfo()
        {
          $info = $this->db->query('
            SELECT *
            FROM employee
            INNER JOIN department
            ON employee.departmentID=department.departmentID
            INNER JOIN position
            ON employee.positionID=position.positionID
        ');
            $result = $info->result();
            return array('info' => $result);

        }
}
?>

