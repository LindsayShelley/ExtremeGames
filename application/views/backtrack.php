<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('backtrack/customers_management')?>'>Customers</a> |
		<a href='<?php echo site_url('backtrack/orders_management')?>'>Orders</a> |
		<a href='<?php echo site_url('backtrack/products_management')?>'>Products</a> |
		<a href='<?php echo site_url('backtrack/offices_management')?>'>Offices</a> |
		<a href='<?php echo site_url('backtrack/employees_management')?>'>Employees</a> |
		<a href='<?php echo site_url('backtrack/film_management')?>'>Films</a> |
		<a href='<?php echo site_url('backtrack/eg_catalago')?>'>Catalago</a>  |
		<a href='<?php echo site_url('backtrack/eg_consolas')?>'>Consolas</a>


	</div>
	<div style='height:20px;'></div>
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
