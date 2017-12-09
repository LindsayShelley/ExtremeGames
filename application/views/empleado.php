
<?php include('css/css/menu_emple.html'); ?>

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

		<a href='<?php echo site_url('empleado/eg_catalago')?>'>Catalago</a>  |
		<a href='<?php echo site_url('empleado/eg_consolas')?>'>Consolas</a>  |
    <a href='<?php echo site_url('empleado/eg_membresia')?>'>Membresia</a> |
    <a href='<?php echo site_url('empleado/eg_promociones')?>'>Promociones</a> |
    <a href='<?php echo site_url('empleado/eg_puntos')?>'>Puntos</a> |
    <a href='<?php echo site_url('empleado/eg_puntos_horas')?>'>Relacion Puntos x Horas</a> |
    <a href='<?php echo site_url('empleado/eg_saldos')?>'>Saldos</a> |
    <a href='<?php echo site_url('empleado/eg_users')?>'>Usuarios</a> |
		<a href='<?php echo site_url('login/logout_ci')?>'>Salir</a> |


	</div>
	<div style='height:20px;'></div>
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
