<?php 
   class Istoric_model extends CI_Model 
   {

    function istoric_comenzi()
	{
        $username = $_SESSION["username"];
        $query = "SELECT * FROM final_order WHERE username RLIKE '".$username."'";
        $results = $this->db->query($query)->result();
        $history = array();
        foreach ($results as $result){
            $query = "SELECT * FROM orders wHERE order_id=".$result->order_id;
            $orders_id = $this->db->query($query)->result();
            $produse = array();
            $total_comanda = 0;
            foreach ($orders_id as $order_id){
                $query = "SELECT * FROM products wHERE products_id=".$order_id->product_id;
                $product_details = $this->db->query($query)->result()[0];
                $total_comanda = $total_comanda + $product_details->price;
                array_push($produse,$product_details);
            }
            $order = array(
                "adresa" => $result->address. " " . $result->county,
                "produse" => $produse,
                "total_comanda" => $total_comanda,
                );
            array_push($history,$order);
        }
        return $history;
    }
}
?>