<!doctype html>
<html lang="en">
    <head>
    <?php $this->load->helper('traducere')?>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="#">
        <title> Products </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel = "stylesheet" type = "text/css"  href = "http://localhost/CC-Store/css/products.css"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar navbar-dark bg-custom-2 ">
        <div class="container">
        <a class="navbar-brand" ><?php echo traducere('Produse', "Products")?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-center">
        <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>home"><?php echo traducere('Acasa', "Home")?><a>
        </li></ul></div>
        <form action="/CC-Store/products">
            <input type="text" name="filtreazaNume" id="filtreazaNume">
            <input type="submit" value="<?php echo traducere('Cauta ', "Search")?>">
        </form>
        <div class="collapse navbar-collapse justify-content-end" >
        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>add_item"><?php echo traducere('Adauga produs', "Add item")?>
        </a> </li>
        <li class=nav-item>
        <a class="nav-link" href="<?php echo base_url();?>cos"> <?php echo traducere('Vizualizare cos', "Cart")?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
(<?=sizeof($_SESSION["shopping_cart"])?>) </li> </a>
</ul> </div> </nav> 
            <form action="/CC-Store/products">
                <select name="filtru" id="filtru">
                    <option value="" disabled selected><?php echo traducere('Sorteaza ', "Sort ")?></option>
                    <option value="pretCresc"><?php echo traducere('Cel mai mic pret', "The lowest price ")?></option>
                    <option value="pretDescr"><?php echo traducere('Cel mai mare pret ', "The highest price")?></option>
                </select>
                <button type="submit" class="btn btn-light" value="<?php echo traducere('Filtreaza', "Filter ")?>"> </button>
            </form>
            <div class="card-group">
                <?php foreach($products as $product){?>
                    <div class="card" style="width:14rem">
                        <img class="card-img-top" src="<?php echo base_url($product->image);?> "/>
                        <div class="card-body">
                        <h5 class="card-title"><?=$product->title?></h5>
                        <h6 class="card-text">  <?php echo traducere('Pret:', "Price:")?> <?=$product->price?> ron</h6> 
                        <h7 class="card-text"><?=$product->description?></h7> 
                        <br>
                        <h7 class="card-text"><?php echo traducere('Adaugat de: ', "Added by:  ")?> <?=$product->added_by_user?></h7> 
                        <a class="nav-link" href="<?php echo base_url().'products/add_product/'.$product->products_id?>"> <?php echo traducere('Adauga in ', "Add to ")?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg> </a>  
</div>
                    </div>
                <?php }?> 
                
            </div>
        </body>
</html>