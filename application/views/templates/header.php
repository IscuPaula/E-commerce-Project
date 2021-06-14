
<html lang="en">
<head>
<?php $this->load->helper('traducere')?>
<meta charset="utf-8">
<title> Home </title>
<link rel = "stylesheet" type = "text/css"  href = "http://localhost/CC-Store/css/header.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
  <body>
<nav class="navbar navbar-expand-sm navbar navbar-dark bg-custom-2 ">
<img src ="uploads/logo3.jpg" class="logo" ></img>
<div class="container">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse">
<ul class="navbar-nav mr-center">
    <li class="nav-item ">
      <a class="nav-link" href="<?php echo base_url();?>products"><?php echo traducere('Produse ', "Products ")?></a>
    </li>
</ul> </div>
    <div class="collapse navbar-collapse justify-content-end" >
      <ul class="navbar-nav">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>home/change_romanian_language">RO</a>
    </li>
  
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>home/change_english_language">EN</a>
    </li>
      <?php 
      if(in_array("isLogged",$_SESSION)){
        if($_SESSION["isLogged"]){?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>istoric"> Istoric Comenzi</a>
              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
            </svg></a>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>cos"><?php echo traducere('Cos ', "Cart ")?> (<?=sizeof($_SESSION["shopping_cart"])?>) <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
            </svg></a>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>delogare"><?php echo traducere('Delogheaza-te ', "Logout")?></a>
          </li>
        
        <?php }else{?> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>login"><?php echo traducere('Autentificare', "Login")?><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            </svg></a> </li>           
      <?php }}else{?> 
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>login"><?php echo traducere('Autentificare', "Login")?><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg></a> </li>           
      <?php } ?>  
</ul> </div>
</nav>
  </body>
</html>

