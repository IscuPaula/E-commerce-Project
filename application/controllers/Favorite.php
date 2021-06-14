<?php
class Favorite extends CI_Controller
{
        public function index()

        {
            if ($_SESSION["isLogged"]){
                $cart = $_SESSION["shopping_cart"];
                $products_details = [];
                foreach($cart as $product_id){
                    $this->load->model('Favorite_model');
                    $product_details = $this->Favorite_model->get_item($product_id);
                    array_push($products_details,$product_details);
                }
                $data["products_details"] = $products_details;
                $this->load->view('favorite', $data);
            }else{
                redirect("login");
            }
        }

}

?>