<?php
class  Home extends CI_Controller
{

        public function index()
        {
                $this->load->helper(array('form','url'));
                $this->load->library('session');
                
                $this -> load -> view('templates/header');  
                $this -> load -> view('home');  
        
        }
        public function  change_romanian_language(){
                $_SESSION["limba"] = "romana";
                redirect('home');
        }

        public function  change_english_language(){
                $_SESSION["limba"] = "engleza";
                redirect('home');
        }
}

?>