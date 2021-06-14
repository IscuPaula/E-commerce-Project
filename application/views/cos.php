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
  <nav class="navbar navbar-expand-sm navbar navbar-dark bg-custom-2 ">
    <img src ="uploads/logo3.jpg" class="logo"> </img>
    <ul class="navbar-nav">
          <li class="nav-link">
          <a class="nav-link" href="<?php echo base_url();?>home"><?php echo traducere('Acasa ', "Home ")?></a>
        </li>
        <li class="nav-link">
         <a class="nav-link" href="<?php echo base_url();?>products"><?php echo traducere('Produse ', "Products ")?></a>
        </li>
        </ul> 
  </nav>
  <div class="container">
      <?php if($_SESSION["isLogged"]){?>
      <p class="fs-5"><?php echo traducere('Cos de cumparaturi,', "Shopping cart, ")?> <?=$_SESSION["username"]?>!</p>
        <?php }else{?> 
          <p class="fs-5"><?php echo traducere('Cos de cumparaturi!', "Shopping cart! ")?></p>
          <?php }?>   
              <p class="fs-5"><?=sizeof($_SESSION["shopping_cart"])?> <?php echo traducere('Produse', "Products")?></p>
              <div class="container">
              <a  class="nav-link" href="<?php echo base_url();?>products"><?php echo traducere('Continua cumparaturile ', "Continue shopping ")?></a> 
                <?php foreach($products_details as $product){?>
                <div class="row justify-content-center">
                  <div class="row">
                  <div class="col-lg-1" >
                  <img class="card-img-top" style="width:100px" src="<?php echo base_url($product->image);?>"/>
                </div>
                  <div class="col" > 
                    <h6 class="card-title"><?=$product->title?></h6>
                    <h7 class="card-text">  Pret: <?=$product->price?> Ron</h7> <br>
                    <h7 class="card-text"><?=$product->description?></h7> </br>
                     <a class="nav-link" href="<?php echo base_url().'products/remove_product/'.$product->products_id?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg></a> 
                  </div>
                </div>
              </div> </br>
         <?php }?> 
         <a  class="nav-link" href="<?php echo base_url();?>finalizare"><?php echo traducere('Finalizare comanda', "Checkout")?></a>
  </div>
</body>
</html>
