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
       <div class="row">
           
        <div class="col-lg-4">
        
           <a href="clasic.php">
		   
		   <img src="img/calzado/bo.jpg" alt="Generic placeholder image"></a>
          
          <h2>Botas</h2>
          <p><span class="badge">Precio $49.50</span></p>
          
          <p>
        <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button>
          
        </p>
        </div>
		<div class="col-lg-4">
        
           <a href="clasic.php">
		   
		   <img src="img/calzado/sa.jpg" alt="Generic placeholder image"></a>
          
          <h2>Sandalia</h2>
          <p><span class="badge">Precio $50.95</span></p>
         
          <p>
        <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button>
          
        </p>
        </div><div class="col-lg-4">
        
           <a href="clasic.php">
		   
		   <img src="img/calzado/ta.jpg" alt="Generic placeholder image"></a>
          
          <h2>Tacones</h2>
          <p><span class="badge">Precio $60</span></p>
          
          <p>
        <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button>
          
        </p>
        </div><div class="col-lg-4">
        
           <a href="clasic.php">
		   
		   <img src="img/calzado/flat.jpg" alt="Generic placeholder image"></a>
          
          <h2>Flats</h2>
          <p><span class="badge">Precio $25</span></p>
          
          <p>
        <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button>
          
        </p>
        </div>
		
        <div class="col-lg-4">
          <img src="img/calzado/zapa.jpg" alt="Generic placeholder image"></a>
          
          <h2>Zapatillas</h2>
          <p><span class="badge">Precio $45.52</span></p>
          <p>
         <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button>
          </p>
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