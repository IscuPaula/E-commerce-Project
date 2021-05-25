
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
        <h1 class="h3 mb-3 fw-normal"><?php echo traducere('Inregistrare', "Register")?></h1>

<div class="form-floating">
    <input type="text" class="form-control" name="fname" required value="<?php echo set_value('fname'); ?>" placeholder="FirstName">
    <label for="floatingInput"><?php echo traducere('Nume', "First name")?></label>
</div>
<div class="form-floating">
    <input type="text" class="form-control" name="lname" required value="<?php echo set_value('lname'); ?>" placeholder="LastName">
    <label for="floatingInput"><?php echo traducere('Prenume', "Last name")?></label>
</div>
<div class="form-floating">
    <input type="text" class="form-control" name="uname" required  minlength="5" maxlength="12" value="<?php echo set_value('uname'); ?>" placeholder="Username">
    <label for="floatingInput"><?php echo traducere('Nume de utilizator', "Username")?></label>
</div>
<div class="form-floating">
    <input type="text" class="form-control" name="email" required pattern="[^ @]*@[^ @]*" title="Please add a valid email." value="<?php echo set_value('email'); ?>" placeholder="Email">
    <label for="floatingInput">Email</label>
</div>
<div class="form-floating">
    <input type="password" class="form-control" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Your password must contain: 1 capital letter and 1 number" minlength="5" required value="<?php echo set_value('password'); ?>" placeholder="Password">
    <label for="floatingPassword"><?php echo traducere('Parola', "Password")?></label>

 </div>
<button class="w-100 btn btn-lg btn-primary" type="submit"><?php echo traducere('Inregistrare', "Register")?></button>
<?php echo traducere('Ai deja cont?', "You have already account?")?> <a href="<?php echo base_url();?>login"><?php echo traducere('Autentificare', "Login")?></a>

        </form>
    </main>
  </body>
</html>
