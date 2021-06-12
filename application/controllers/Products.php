<?php

class Products extends CI_Controller
{
        public function index()
        {
                $this->load->helper(array('form','url'));
                $this->load->library('form_validation'); 
                $this->load->model('Products_model');
                if ($this->input->get("filtru",TRUE)){
                        $data["products"] = $this->Products_model->get_items_filtered($this->input->get("filtru",TRUE));
                }else{
                        if($this->input->get("filtreazaNume",TRUE)){
                                $data["products"] = $this->Products_model->get_items_filtered_name($this->input->get("filtreazaNume",TRUE)); 
                        }else{
                                $data["products"] = $this->Products_model->get_items();
                        }
                }
                #filtrare dupa categorie
                $this->load->view('products',$data);   
        }

        public function add_product()
        {
                $this->load->library('session');
                if ($_SESSION["isLogged"]){
                        $product_id = $this->uri->segment(3);
                        if($_SESSION["shopping_cart"] == ""){
                                $cart = [$product_id];
                                $_SESSION["shopping_cart"] = $cart;
                        }else{
                                $cart = $_SESSION["shopping_cart"];
                                array_push($cart, $product_id);
                                $_SESSION["shopping_cart"] = $cart;
                        }
                        redirect('products');
                }else{
                        redirect('login');
                }
                
        }

        public function remove_product()
        {
                $this->load->library('session');
                if ($_SESSION["isLogged"]){
                        $product_id = $this->uri->segment(3);
                        if(sizeof($_SESSION["shopping_cart"]) != 0){
                                $cart = $_SESSION["shopping_cart"];
                                if (($key = array_search($product_id, $cart)) !== false) {
                                        unset($cart[$key]);
                                    }
                                $_SESSION["shopping_cart"] = $cart;
                        }
                        redirect('cos');
                }else{
                        redirect('login');
                }
                
        }
       
        
}

?>