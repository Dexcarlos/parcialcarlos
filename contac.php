<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Parcial - Beckenbauer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
</head>
<body>


  <?php include('menu.php');?>
  
  
<div class="container"> 
      
		<div class="page-header">
  						<h2>Contactenos  por cualquier dudas</h2>
						</div>  

                        <div class="col-sm-6">
                        <br>
                        <form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Mensaje</label>
    <textarea class="form-control" rows="3"></textarea>
    <p class="help-block">Tu experiencia o preguntas sobre nuestra marca </p>
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
                        
                        </div>
						
						<br>
                        <div class="col-sm-6 well" >
                        
                        <p>Algunos consejos para tu opinión o duda:</p>

    <ul class="list-group">
		  <li> Sé preciso en la pregunta sobre nuestro productos. </li>
		  <li> Cuenta tus experiencias positivas y negativas</li>
		  <li> No escribas con mayúsculas!</li>
		  </ul>

                        </div>
</div>
      
      <?php include('pie.php'); ?>
  </div>

  
  
  
  
  
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>

  <script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  $(function () {

      $('[data-toggle="popover"]').popover()

  })
</script>
    
</body>
</html>