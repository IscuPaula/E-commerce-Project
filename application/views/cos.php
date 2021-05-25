<!doctype html>
<html lang="en">
  <head>
  <?php $this->load->helper('traducere')?>
    <meta charset="utf-8">
    <title> Cos </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>

<body>
<main>

  <div class="d-flex justify-content-center" >
  
          <?php if($_SESSION["isLogged"]){?>
              <p class="fs-1"><?php echo traducere('Cos de cumparaturi,', "Shopping cart, ")?> <?=$_SESSION["username"]?>!</p>
            <?php }else{?> 
              <p class="fs-1"><?php echo traducere('Cos de cumparaturi!', "Shopping cart! ")?></p>
            <?php }?> 
          </div>
  
      <div class="container">
      <?=sizeof($_SESSION["shopping_cart"])?> <?php echo traducere('Produse', "Products")?>
      
      <?php foreach($products_details as $product){?>
        <div class="row justify-content-center">
        <div class="col-lg-1" style="text-align:right;">
        <img class="card-img-top" style="width:100px" src="<?php echo base_url($product->image);?>"/>
        </div> 
        <div class="col-lg-2" style="text-align:left;"> 
        <h6 class="card-title"><?=$product->title?></h6>
        <h7 class="card-text">  Pret: <?=$product->price?> Ron</h7> <br>
        <h7 class="card-text"><?=$product->description?></h7> </br>
        <a class="nav-link" href="<?php echo base_url().'products/remove_product/'.$product->products_id?>"><?php echo traducere('Sterge', "Delete")?> </a>
      </div></div> </br>
        <?php }?> 
      </div>
      
      <a  class="nav-link" href="<?php echo base_url();?>finalizare"><?php echo traducere('Finalizare comanda', "Checkout")?></a>
      <a  class="nav-link" href="<?php echo base_url();?>products"><?php echo traducere('Continua cumparaturile ', "Continue shopping ")?></a>
                
            
      <footer class="container">
  </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
      
  </body>
</html>
