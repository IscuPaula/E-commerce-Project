<!doctype html>
<html lang="en">
<head>
  <?php $this->load->helper('traducere')?>
  <meta charset="utf-8">
  <title>Add item</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel = "stylesheet" type = "text/css"  href = "http://localhost/CC-Store/css/additem.css"/>  </head>
</head>
<body class="text-center">
<div class="container">
<a class="nav-link" href="<?php echo base_url();?>home"><?php echo traducere('Acasa ', "Home ")?></a>
    <div class="row">
      <div class="col">
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form method="post" enctype="multipart/form-data" >
            <form method="post"action="<?php echo site_url('add_item');?>">
            <h1 class="h3 mb-3 fw-normal"><?php echo traducere('Adauga produs ', "Add product")?></h1>
            <div class="form-floating">
              <input type="text" class="form-control" name="title" require value="<?php echo set_value('title'); ?>" placeholder="<?php echo traducere('Numele produsului', "Name of product")?>">
              <label for="floatingInput"><?php echo traducere('Numele produsului', "Name of product")?></label>
            </div><br>
            <div class="form-floating">
              <input type="text" class="form-control" name="price" require value="<?php echo set_value('price'); ?>" placeholder="Price">
              <label for="floatingInput"><?php echo traducere('Pretul produsului', "Price of product")?></label>
            </div><br>
            <div class="form-floating">
              <input type="text" class="form-control" name="description" require value="<?php echo set_value('description'); ?>" placeholder="Description">
              <label for="floatingInput"><?php echo traducere('Descriere', "Description")?></label>
            </div><br>
            <div class="form-floating">
              <input type="file" class="form-control" id="image" name="image" require value="<?php echo set_value('image'); ?>"  placeholder="Image">
            </div><br>
              <button type="submit" class="btn btn-success"><?php echo traducere('Adauga', "Add")?></button>
            </form>
          </div>  
       </div>
  </div>
</body>
</html>
