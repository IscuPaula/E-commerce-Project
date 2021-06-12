<?php
class Finalizare extends CI_Controller
{
    public function index()
    {
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation'); 
        $this->load->view('finalizare');
    }

    public function finalizareComanda(){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation'); 
        $this->load->model('Finalizare_model');
        $payment = $this->input->get("paymentMethod") ? "Card" : "Ramburs";
        if ($payment == "Card"){
            if (!($this->input->get("cardName") && $this->input->get("cardNumber") && $this->input->get("cardExpiration") && $this->input->get("cardCVV"))){
                echo "Completeaza detalii card";
                $this->load->view('finalizare');
                return;
            }
        }
        $detaliiComanda = [
        $this->input->get("firstName"),
        $this->input->get("lastName"),
        $_SESSION["username"],
        $this->input->get("email"),
        $this->input->get("address"),
        $this->input->get("county"),
        $this->input->get("city"),
        $this->input->get("zip"),
        ($this->input->get("paymentMethod"))? "Card" : "Ramburs",
        ($payment == "Card") ? ($this->input->get("cardName")) : "",
        ($payment == "Card") ? ($this->input->get("cardNumber")) : "",
        ($payment == "Card") ? ($this->input->get("cardExpiration")) : "",
        ($payment == "Card") ? ($this->input->get("cardCVV")) : "",
        ];

        $cart = $_SESSION["shopping_cart"];
        $this->load->model('Products_model');
        $this->load->model("Users_model");
        $total_comanda = 0;
        $message = "";
        foreach ($cart as $product){
            $product_details = $this->Products_model->get_item($product);
            $user_item_email = $this->Users_model->get_email_after_username($product_details->added_by_user);
            $this->load->model('Email_model');
            $this->Email_model->send_vanzator($user_item_email->email,$product_details);
            $message = $message . "Titlu: " . $product_details->title . "\r\n";
            $message = $message . "Pret: " . $product_details->price . "\r\n";
            $message = $message . "Descriere: " . $product_details->description . "\r\n";
            $message = $message . "-----------------------------------------------" . "\r\n";
            $total_comanda = $total_comanda + $product_details->price;
        }
        $message = $message . "Total Comanda: " .$total_comanda." RON" . "\r\n";
        $this->Email_model->send_cumparator($this->input->get("email"),$message);
        $this->Finalizare_model->creaza_comanda($detaliiComanda,$cart);
        
        redirect('istoric',$data);
    }
}
?>