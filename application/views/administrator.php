<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Admin </title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/finalizare.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div class="container">
		<a href='<?php echo site_url('administrator/users_management')?>'>Users</a> |
		<a href='<?php echo site_url('administrator/products_management')?>'>Products</a> |
		<a href='<?php echo site_url('administrator/orders_management')?>'>Orders</a> |
		<a href='<?php echo site_url('administrator/order_details_management')?>'>Order Details</a>
	</div> 
	<div style='height:30px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
