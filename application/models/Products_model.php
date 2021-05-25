<?php 
   class Products_model extends CI_Model 

   {
 
    function get_items(){
        //iei produsele din baza de date si le returnezi
        //functia asta trebuie apelata in controller
        return $this->db->get("products")->result();
        
    }

    function get_item($id){
        $result = $this->db->query('SELECT * FROM products WHERE products_id = ?',$id)->result()[0];
        return $result;
    }

     function add_item()
	{
       
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        
        $target_dir = "product_images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        } else {
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        }

        $data=array
        (
            'Title'=> $title,
            'Description'=> $description,
            'Price'=> $price,
            'image'=> $target_file
           
        );
        $this->db->insert('products',$data);
        
    }	
    
}
?>