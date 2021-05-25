<?php 
   class Register_model extends CI_Model 
   {

    function insert_users()
	{
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $uname = $this->input->post('uname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
     
        $data=array
        (
            'FirstName'=> $fname,
            'LastName'=> $lname,
            'Username'=> $uname,
            'Email' => $email,
            'Password' => $password,
            
        );
        
        $this->db->insert('users',$data);
    }

    function verify_credentials()
    {
      
        $username = $this->input->post('uname');
        $password = $this->input->post('password');
        
        $data=array
        (
            'Username'=> $username,
            'Password'=> $password
        );
        $query = $this->db->get_where('users', $data)->result();

        if(sizeof($query) > 0)
        {
            //logat succes
            return true;
     
        }else
        {
            //login fail, retry
            return false;
        }
    }

    function verify_administrator(){
        $username = $_SESSION["username"];
        $result = $this->db->query('SELECT * FROM users WHERE username = "'.$username.'"')->result();
        return $result[0]->Administrator;
    }
	
}
?>