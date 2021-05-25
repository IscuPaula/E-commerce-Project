<?php
class  Add_item extends CI_Controller
{
        public function index()
        {       if ($_SESSION["isLogged"]){
                        $this->load->helper(array('form','url'));
                        $this->load->library('form_validation');

                        $this->form_validation->set_rules('title', 'Title', 'required');
                        $this->form_validation->set_rules('description', 'Description', 'required');
                        $this->form_validation->set_rules('price', 'Price', 'required');

                        if ($this->form_validation->run()==FALSE) 
                        {
                                                
                                $this->load->view('add_item');
                        }
                        else
                        {        
        
                                $this->load->model('Products_model');
                                $this->Products_model->add_item();
                                $data["products"] = $this->Products_model->get_items();
                                $this->load->view('products',$data);                            
                        }
                }else{
                        redirect('login');
                }
        }
        
}

?>