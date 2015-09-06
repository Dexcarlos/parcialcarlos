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
  
  

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li class="" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="active" data-target="#myCarousel" data-slide-to="2"></li>
        <li class="" data-target="#myCarousel" data-slide-to="3"></li>
        <li class="" data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <center><img src="img/banner/1.jpg" alt="First slide"></center>
          
        </div>
        <div class="item">
          <center><img src="img/banner/2.jpg" alt="Second slide"></center>
          
        </div>
        <div class="item">
          <center><img src="img/banner/3.jpg" alt="Second slide"></center>
          
        </div>
        
        <div class="item">
          <center><img src="img/banner/4.jpg" alt="Second slide"></center>
          
        </div>
        <div class="item active">
          <center><img src="img/banner/5.jpg" alt="Third slide"></center>
          
        </div>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
	
	
  <div class="container"> 
       <div class="row">
           <br><br>
        <div class="col-lg-4">
        
           <a href="clasic.php">
		   
		   <img src="img/producto/1.jpg" alt="Generic placeholder image"></a>
          
          <h2>Classic</h2>
          <p><span class="badge">Precio $4.95</span></p>
          <p>El protector de tacones Classic Glamour Dark Night, 
		  cubierto con cristales de Swarovsky son unas piezas de lujo que 
		  le añaden glamour y estilo a sus zapatos, ideales para las largas noches.</p>
          <p>
        <button type="button" class="btn btn-default" title="Classic" data-container="body" data-toggle="popover" data-placement="top" data-content="Diseñados para proteger los tacones en superficies irregulares como césped, madera o piedras.	
Tienen una rosca interior muy suave para garantizar un ajuste perfecto a los tacones con un diámetro de aproximadamente 10 mm.">
  Ver detalles <i class="fa fa-eye"></i>
  </button>  <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button>
          
        </p>
        </div>
		
		
        <div class="col-lg-4">
          <img src="img/producto/2.jpg" alt="Generic placeholder image"></a>
          
          <h2>Wide</h2>
          <p><span class="badge">Precio $3.95</span></p>
          <p>Protegerás el tacón de tus zapatos y sandalias , aumentando la superficie de pisada y evitando que se pelen y deterioren al caminar por superficies irregulares.</p>
          <p>
        <button type="button" class="btn btn-default" title="Wide" data-container="body" data-toggle="popover" data-placement="top" data-content="Disponibles en 3 tallas ,S,  M y L se adaptan a varias formas de tacón , no solo la circular , haciendolos mas versátiles , ya que los podrás utilizar con diferentes modelos de zapato. Todos nuestros protectores son transparentes ..">
  Ver detalles <i class="fa fa-eye"></i>
  </button>  <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
</button>
          </p>
        </div>
		
		
        <div class="col-lg-4">
<img src="img/producto/3.jpg" alt="Generic placeholder image"></a>
          
          <h2>Narrow</h2>
          <p><span class="badge">Precio $5.95</span></p>
          <p>Talón de silicona protector antideslizante protector de talón</p>
          <p>
        <button type="button" class="btn btn-default" title="Narrow" data-container="body" data-toggle="popover" data-placement="top" data-content="Protege los talones se hunda en la hierba, barro, grietas y rejillas
Discreto, fácil de colocar y totalmente reutilizable
Hecho de durable, plástico reciclable
Se extiende la vida de sus zapatos
Material: PVC
3 tamaño: s, m, L">
  Ver detalles <i class="fa fa-eye"></i>
  </button>  <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Al carrito <i class="fa fa-shopping-cart"></i>
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