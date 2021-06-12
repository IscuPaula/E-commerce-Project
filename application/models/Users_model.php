<?php 
   class Users_model extends CI_Model 
   {

    function get_email_after_username($username)
	{
        $query = "SELECT email FROM users WHERE username RLIKE '".$username."'";
        $result = $this->db->query($query)->result()[0];
        return $result;
    }
	
}
?>