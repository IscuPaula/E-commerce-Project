<?php
class  Register extends CI_Controller
{       
       public function _construct()
        {
                parent::__construct(); 
                $this->load->helper('url','form'); 
                $this->load->library('session');     
        }

        public function index()

        {        
                $this->load->helper(array('form', 'url'));                       
                $this->load->library('form_validation');
                $this->form_validation->set_rules('fname', 'FirstName', 'required');
                $this->form_validation->set_rules('lname', 'LastName', 'required');
                $this->form_validation->set_rules('uname', 'UserName', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'required');
               
                if($this->form_validation->run()==FALSE) 
                {
                        $this->load->view('registerform');

                }
                else
                
                {      
                        
                        $this->load->model('Register_model');
                        $this->Register_model->insert_users();
                        redirect('login','refresh');
                        
                }
        }
}
?>