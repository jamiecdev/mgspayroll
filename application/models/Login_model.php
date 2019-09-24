<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{

  function __construct() 
  { 
     parent::__construct(); 
  }
  
	function can_login($username, $password, $status)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->where('status', $status);
		$query = $this->db->get('employee');

		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function validate($username,$password){
    /*$this->db->where('username',$username);
    $this->db->where('password',$password);
    $this->db->where('status = "Active"',$status);*/
    $result = $this->db->query('select * from employee LEFT JOIN position ON position.positionID=employee.positionID LEFT JOIN department ON department.departmentID=employee.departmentID where username="'.$username.
    				 '" AND password="'.$password.'"');
    return $result;
  }
}
?>

