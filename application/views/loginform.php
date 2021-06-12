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
    <main class="form-signin">
      <form method="post" action="<?php echo site_url('Login');?>">

        <h1 class="h3 mb-3 fw-normal"><?php echo traducere('Autentificare', "Login")?></h1>

        <div class="form-floating">
          <input type="text" class="form-control" name="uname" required  value="<?php echo set_value('uname'); ?>" placeholder="Username">
          <label for="floatingInput"><?php echo traducere('Nume de utilizator', "Username")?></label>
        </div>
        
        <div class="form-floating">
          <input type="password" class="form-control" name="password" required  value="<?php echo set_value('password'); ?>" placeholder="Password" >
          <label for="floatingPassword"><?php echo traducere('Parola', "Password")?></label>
        </div>
            
        <button class="w-100 btn btn-lg btn-primary" type="submit"><?php echo traducere('Autentificare', "Login")?></button>
        <?php echo traducere('Nu ai cont?', "You don't have account?")?> <link class="" type="submit"><a href="<?php echo base_url();?>register"><?php echo traducere('Inregistrare', "Register")?></a></link>
      </form>
    </main>
  </body>
</html>
