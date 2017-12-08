<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>membrecia</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<h1>Membresia</h1>
<form action="<?= base_url();?>membresia/add_eg_membresia" name="form" method="POST">
    Extra:<input type='text' name="extra" /> <hr/>
    
    

    Puntos:<input type='text' name="puntos" /> <hr/>
    Saldo:<input type='text' name="saldo" /> <hr/>
    
    
    <select name="saldo" id="inputSaldo" class="form-control">
                    <?php foreach ($eg_saldos as $saldo):?>
                    <option value="<?php echo $saldo->id; ?>"><?php echo $saldo->saldo; ?></option>
                    <?php echo $saldo->saldo; ?>
                        <?php endforeach; ?>
                </select>
    
    
    
    User:<input type='text' name="user" /> <hr/>
    <input type="submit" value="enviar" name="submit" />
    
</form>

</html>

