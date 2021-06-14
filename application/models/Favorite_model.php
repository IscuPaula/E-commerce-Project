<?php 
   class Favorite_model extends CI_Model 

   {
 
    function get_items()
    {
        //iei produsele din baza de date si le returnezi
        //functia asta trebuie apelata in controller
        $result = $this->db->query('SELECT * FROM products ORDER BY products_id DESC')->result();
        return $result;
    
    }
    }
    ?>
