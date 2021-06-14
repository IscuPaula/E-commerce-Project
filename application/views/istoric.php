<!doctype html>
<html lang="en">
  <head>
  <?php $this->load->helper('traducere')?>
  <meta charset="utf-8">
  <title>Istoric</title>
  <link rel="shortcut icon" href="#">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/istoric.css">
  </head>
<body>
  <div class="container">
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
      <div class="row">
      <div class="py-5 text-center">
        <h1>Istoric comenzi</h1> 
        
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="row">
            <div class="col-lg-12">
              <?php foreach($history as $order){?>
                <div class="card">
                    <div class="card-body">
                    <h5>Comanda livrata la adresa: <php> <h class="card-title"><?=$order["adresa"]?></h></h5>
                    <?php foreach($order["produse"] as $produs){?> 
                      <div class="col-lg-1" style="text-align:right;">
                        <img class="card-img-top" style="width:100px" src="<?php echo base_url($produs->image);?>"/>
                      </div>  
                      <h6 class="card-title"><?=$produs->title?></h6> 
                      <h6 class="card-text">  <?=$produs->price?> ron</h6> 
                      <h6 class="card-text"><?=$produs->description?></h6> <br>
                    <?php }?> 
                  
                    <h6 class="card-text">Total Comanda: <?=$order["total_comanda"]?> RON</h6> <br>
                 </div>
                </div>
              <?php }?> 
            </div> 
          </div>
        </div>
     </div>          
  </div>
</body>
</html>
