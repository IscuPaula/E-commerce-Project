<?php 
   class Finalizare_model extends CI_Model 
   {

    function creaza_comanda($data, $cart)
	{
        $query = 'INSERT INTO final_order (firstName,lastName,username,email,address,county,city,zip,payment,cardName,cardNumber,cardExpiration,cardCVV)';
        $query = $query . ' VALUES (';
        foreach ($data as $order_info){
            $query = $query . '"'. $order_info . '",';
        }
        $query = substr_replace($query ,"",-1);
        $query = $query . ')';
        $result = $this->db->query($query);
        $insert_id = $this->db->insert_id();
        
        foreach ($_SESSION["shopping_cart"] as $product){
            $query = 'INSERT INTO orders (order_id,product_id) VALUES ('.$insert_id.','.$product.');';
            $this->db->query($query);
        } 
    }

}
?>