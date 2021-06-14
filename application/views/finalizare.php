<!doctype html>
<html lang="en">
  <head>
  <?php $this->load->helper('traducere')?>
    <meta charset="utf-8">
    <title>Checkout</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/finalizare.css">
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
        <li class="nav-link">
         <a class="nav-link" href="<?php echo base_url();?>cos"><?php echo traducere('Cos ', "Cart ")?></a>
        </li>
        </ul> 
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <div class="py-5 text-center">
        <h2><?php echo traducere('Finalizeaza comanda ', "Complete the order ")?></h2>
        <br>
        <form action="/CC-Store/finalizare/finalizareComanda/" class="needs-validation">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label"><?php echo traducere('Numele ', "First Name ")?></label>
              <input type="text" class="form-control" name="firstName" id="firstName" placeholder="<?php echo traducere('Numele tau ', "Your First Name ")?>" required>
              <div class="invalid-feedback"> 
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label"><?php echo traducere('Prenume ', "Last Name ")?></label>
              <input type="text" class="form-control" name="lastName" id="lastName" placeholder="<?php echo traducere('Prenumele ', "Last Name ")?>" value="" required>
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label"><?php echo traducere('Adresa ', "Address ")?></label>
              <input type="text" class="form-control" name="address" id="address" placeholder="<?php echo traducere('Adresa ta ', "Your Address ")?>" required>
              <div class="invalid-feedback">
              </div>
            </div>
            
           <div class="col-md-6">
              <label for="county" class="form-label"><?php echo traducere('Judet ', "County ")?></label>
              <input type="text" class="form-control" name="county" id="county" placeholder="<?php echo traducere('Judetul tau ', "Your County ")?>"required>
          </div>
            <div class="col-md-6">
              <label for="city" class="form-label"><?php echo traducere('Oras ', "County ")?></label>
              <input type="text" class="form-control" name="city" id="city" placeholder="<?php echo traducere('Orasul tau ', "Your City")?>" required>
            </div>
            <div class="col-md-3">
              <label for="zip" class="form-label"><?php echo traducere('Cod postal ', "ZIP ")?></label>
              <input type="text" class="form-control" name="zip" id="zip" placeholder="<?php echo traducere('Cod Postal ', "ZIP ")?>" required>
            </div>
          </div>
          <hr class="my-4">
          <h4 class="mb-3"><?php echo traducere('Plata ', "Payment ")?></h4>
        
          <div class="my-3">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" name="paymentMethod" id="paymentMethod">
              <label class="form-check-label" for="flexCheckIndeterminate">
              <?php echo traducere('Card(Nu selecta pentru Ramburs) ', "Card(Unselect for Ramburs)")?>
              </label>
            </div>
          </div>
          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cardName" class="form-label"><?php echo traducere('Nume Card ', "Name on card ")?></label>
              <input type="text" class="form-control" name="cardName" id="cardName" placeholder="<?php echo traducere('Nume Card ', "Name on card ")?>">
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="col-md-6 ">
              <label for="cardNumber" class="form-label"><?php echo traducere('Numar Card ', "Card Number ")?></label>
              <input type="text" class="form-control" name="cardNumber" id="cardNumber" placeholder="<?php echo traducere('Numar Card ', "Card Number ")?>" >
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="col-md-3 ">
              <label for="cardExpiration" class="form-label"><?php echo traducere('Data expirarii ', "Expiration ")?></label>
              <input type="text" class="form-control" name="cardExpiration" id="cardExpiration" placeholder="<?php echo traducere('Data expirarii ', "Expiration ")?>" >
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="col-md-3">
              <label for="cardCVV" class="form-label">CVV</label>
              <input type="text" class="form-control" name="cardCVV" id="cardCVV" placeholder="CVV">
              <div class="invalid-feedback">
              </div>
            </div>
          </div>
          
          <hr class="my-4">
          <input type="submit" value="<?php echo traducere('Confirma', "Confirm")?>">
        </form>
      </div>
    </div>
    <div class="col-lg-2"></div>

</div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
  </footer>
</div>
<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>

</body>