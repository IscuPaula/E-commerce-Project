
<!doctype html>
<html lang="en">
  <head>
  <?php $this->load->helper('traducere')?>

    <meta charset="utf-8">
    <title> Inregistrare </title>
    <link rel="shortcut icon" href="#">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/register.css">
  </head>
  <body class="text-center">
    <main class="form-signin">
      <form method="post"action="<?php echo site_url('Register');?>">
        <h1 class="h3 mb-3 fw-normal">Register</h1>

<div class="form-floating">
    <input type="text" class="form-control" name="fname" require value="<?php echo set_value('fname'); ?>" placeholder="FirstName">
    <label for="floatingInput">Nume</label>
</div>
<div class="form-floating">
    <input type="text" class="form-control" name="lname" require value="<?php echo set_value('lname'); ?>" placeholder="LastName">
    <label for="floatingInput">Prenume</label>
</div>
<div class="form-floating">
    <input type="text" class="form-control" name="uname" require  minlength="5" value="<?php echo set_value('uname'); ?>" placeholder="Username">
    <label for="floatingInput">Nume de utilizator</label>
</div>
<div class="form-floating">
    <input type="text" class="form-control" name="email" require pattern="[^ @]*@[^ @]*" value="<?php echo set_value('email'); ?>" placeholder="Email">
    <label for="floatingInput">Email</label>
</div>
<div class="form-floating">
    <input type="password" class="form-control" name="password" require  minlength="5"  value="<?php echo set_value('password'); ?>" placeholder="Password">
    <label for="floatingPassword">Parola</label>
 </div>
<button class="w-100 btn btn-lg btn-primary" type="submit">Inregistrare</button>
Ai deja cont? <a href="<?php echo base_url();?>login">Autentificare</a>

        </form>
    </main>
  </body>
</html>
