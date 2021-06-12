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
  <div class="container">
  <main>
  <div class="py-5 text-center">
      <h2>Finalizare</h2>

  <div class="col-md-7 col-lg-8 ">
        <h4 class="mb-3">Adresa</h4>
        <form action="/CC-Store/finalizare/finalizareComanda/" class="needs-validation">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Your  First  Name" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            
           <div class="col-md-6">
              <label for="county class="form-label">County</label>
              <input type="text" class="form-control" name="county" id="county" placeholder="" required>
            </div>

            <div class="col-md-6">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" name="city" id="city" placeholder="" required>
            </div>
            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
            </div>
          </div>
          <hr class="my-4">
          <h4 class="mb-3">Payment</h4>
        
          <div class="my-3">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" name="paymentMethod" id="paymentMethod">
              <label class="form-check-label" for="flexCheckIndeterminate">
                Card (Unselect for Ramburs)
              </label>
            </div>
          </div>
          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cardName" class="form-label">Name on card</label>
              <input type="text" class="form-control" name="cardName" id="cardName" placeholder="">
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6 ">
              <label for="cardNumber" class="form-label">Credit card number</label>
              <input type="text" class="form-control" name="cardNumber" id="cardNumber" placeholder="" >
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3 ">
              <label for="cardExpiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" name="cardExpiration" id="cardExpiration" placeholder="" >
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cardCVV" class="form-label">CVV</label>
              <input type="text" class="form-control" name="cardCVV" id="cardCVV" placeholder="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>
          <hr class="my-4">
          <input type="submit" value="<?php echo traducere('Finalizare', "Finalizare")?>">
        </form>
      </div>
    </div>
  </main>
  <footer class="my-5 pt-5 text-muted text-center text-small">
  </footer>
</div>
<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>

</body>