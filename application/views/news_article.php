<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>catalago</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  <body>
      
       <div	class="col-sm-4">
      <img    src="<?php echo base_url('/assets/uploads/images_catalago/'); ?><?php print $imagen; ?>" class="img-thumbnail"   style="height:300px; width:200px">
       </div>
      <div	class="col-sm-8">
          <h1> <?php print $nombre; ?> </h1>
          <h3><?php print $descripcion; ?></h3>
          
      </div>
        </body>

</html>