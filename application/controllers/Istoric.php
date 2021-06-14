<?php

class  Istoric extends CI_Controller
{       
        public function index()

        {                        
                $this->load->helper(array('form', 'url'));                       
                $this->load->library('form_validation');
                $this->load->model('Istoric_model');
                $data["history"] = $this->Istoric_model->istoric_comenzi();
                $this->load->view('istoric',$data);
        }
        
}
?>