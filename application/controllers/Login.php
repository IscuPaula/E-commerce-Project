<?php
class Login extends CI_Controller
{
        public function index()

        {
                
                $this->load->helper(array('form','url'));
                $this->load->library('form_validation');
                $this->load->library('session');
                

                $this->form_validation->set_rules('uname', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
               

                if($this->form_validation->run()==FALSE) 
                {
                        $this->load->view('loginform');
                }
                else
                {
                        $this->load->model('Register_model');
                        if($this->Register_model->verify_credentials())
                        {       
                                $this->session->set_userdata('username',$this->input->post('uname'));
                                $this->session->set_userdata('isLogged',true);
                                $_SESSION["shopping_cart"] = [];
                                $_SESSION["limba"] = "romana";
                                if($this->Register_model->verify_administrator()){
                                        redirect('administrator');
                                }else{
                                        redirect('home');
                                }
                                $this->load->model('Products_model');
                                $data["products"] = $this->Products_model->get_items();
                                $this->load->view('products',$data);
                               
                        }else{
                                $this->session->set_userdata('username',$this->input->post('uname'));
                                $this->session->set_userdata('isLogged',false);  
                                $_SESSION["shopping_cart"] = [];
                                $_SESSION["limba"] = "romana";
                                $this->load->view('loginform');
                        }
                }
                

        }

}

?>