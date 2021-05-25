<?php
class Cos extends CI_Controller
{
        public function index()

        {
            if ($_SESSION["isLogged"]){
                $cart = $_SESSION["shopping_cart"];
                $products_details = [];
                foreach($cart as $product_id){
                    $this->load->model('Products_model');
                    $product_details = $this->Products_model->get_item($product_id);
                    array_push($products_details,$product_details);
                }
                $data["products_details"] = $products_details;
                $this->load->view('cos', $data);
            }else{
                redirect("login");
            }
        }

}

?>