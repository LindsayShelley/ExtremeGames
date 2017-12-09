<?php include('css/css/menu_admin.html'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/css/estilos.css">
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

		<a href='<?php echo site_url('administrador/eg_catalago')?>'>Catalago</a>  |
		<a href='<?php echo site_url('administrador/eg_consolas')?>'>Consolas</a>  |
    <a href='<?php echo site_url('administrador/eg_membresia')?>'>Membresia</a> |
    <a href='<?php echo site_url('administrador/eg_promociones')?>'>Promociones</a> |
    <a href='<?php echo site_url('administrador/eg_puntos')?>'>Puntos</a> |
    <a href='<?php echo site_url('administrador/eg_puntos_horas')?>'>Relacion Puntos x Horas</a> |
    <a href='<?php echo site_url('administrador/eg_roles')?>'>Roles</a> |
    <a href='<?php echo site_url('administrador/eg_saldos')?>'>Saldos</a> |
    <a href='<?php echo site_url('administrador/eg_users')?>'>Usuarios</a> |
		<a href='<?php echo site_url('login/logout_ci')?>'>Salir</a> 



	</div>
	<div style='height:20px;'></div>
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
