<html>
<head>
<title> Succes </title>
<?php $this->load->helper('traducere')?>
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/succes.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

    <div > 
        <h2><?php echo traducere('Comanda ta a fost plasata cu succes!', "Your order has been placed successfully!")?> </h2>
        <h5><?php echo traducere('Comanda in valoarea de:', "Order worth:")?> </h5>
        <h5><?php echo traducere('Va fi livrata la adresa:', "We be delivered to the address:")?></h5>
        <h5><?php echo traducere('In cel mai scurt timp!', "As soon as possible")?></h5>
    </div>
</body>
</html>