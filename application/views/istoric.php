<!doctype html>
<html lang="en">
  <head>
  <?php $this->load->helper('traducere')?>
    <meta charset="utf-8">
    <title>Autentificare</title>
    <link rel="shortcut icon" href="#">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/signin.css">
  </head>

  <body class="text-center">
    <h1> Istoric Comenzi </h1>
              <div class="card-group">
                <?php foreach($history as $order){?>
                    <div class="card" style="width:14rem">
                        <div class="card-body">
                          <h5 class="card-title"><?=$order["adresa"]?></h5>
                          <?php foreach($order["produse"] as $produs){?>
                            <h5 class="card-title"><?=$produs->title?></h5> 
                            <h6 class="card-text">  <?=$produs->price?> ron</h6> 
                            <h7 class="card-text"><?=$produs->description?></h7> 
                          <?php }?> 
                          <br>
                          <h7 class="card-text">Total Comanda <?=$order["total_comanda"]?> RON</h7> 
                        </div>
                    </div>
                <?php }?> 
                            
            </div>
  </body>
</html>
