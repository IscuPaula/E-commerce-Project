<?php

class Delogare extends CI_Controller
{
        
        public function index()

        {
                $_SESSION['username'] = "";
                $_SESSION['isLogged'] = false;
                $_SESSION["shopping_cart"] = [];

                redirect('home');
                
        }

}

?>