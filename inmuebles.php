<?php
include('conexion.php');
session_start();

// if(isset($_SESSION['nombre'])){
	$usuario = $_SESSION['nombre'];
	$idcliente = $_SESSION['idcliente'];
	echo $usuario;
//	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Registro</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<style type="text/css">
#centrar{text-align:center}
</style>
</head>
<body>
<div id="wrapper"> 
	<header class="topbar">
		<div class="container">
			<div class="row">
				<!-- social icon-->
				<div class="col-sm-3">
				   <ul class="social-network">
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<ul class="info"> 
							<li><i class="icon-info-blocks material-icons">question_answer</i><span>rma@inmobiliaria.com</span></li>
							<li><i class="icon-info-blocks material-icons">perm_phone_msg</i><span>+(34) 555 55 55 55</span></li>
						</ul>
						<div class="clr"></div>
					</div>
				</div>
				<!-- info -->

			</div>
		</div>
	</header>

	<!-- start header -->
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><i class="material-icons">store</i>RMA Inmobiliaria</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a class="waves-effect waves-dark" href="index.php">Inicio</a></li> 
                        <li><a class="waves-effect waves-dark" href="VerInmuebles.php">Ver Inmuebles</a></li> 
						 <!--<li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">Servicios&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="about.php">Compra</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Venta</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Alquiler</a></li> 
                           
                        </ul>
                    </li> -->
						
                       <!-- <li><a class="waves-effect waves-dark" href="portfolio.php">Galería</a></li>                       
                        <li><a class="waves-effect waves-dark" href="contact.php">Contacto</a></li>
                        <li><a class="" href="registro.php">Registro</a></li>-->
                        <li><a class="waves-effect waves-dark" href="#"><?php echo $usuario ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>   <!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Datos de Inmuebles</h2>
			</div>
		</div>
	</div>
	</section>
 <!--*******************************   FORMULARIO REGISTRO   ******************************-->
 <div class="container">
  <div class="row">
<form method="post" name="form1" action="<?php $_SERVER['PHP_SELF'] ?>">
<div class="form-group">
    <label for="habitaciones">Habitaciones:</label>
    <input type="text" class="form-control" id="habitaciones" value="" name="habitaciones" required autofocus
           placeholder="Introduce Nº Habitaciones">
  </div>
  <div class="form-group">
  	<label for="aseos">Nº Aseos:</label>
    <input type="text" class="form-control" id="aseos" value="" name="aseos" required
           placeholder="Introduce nº de aseos">
  </div>
  <div class="form-group">
  <label for="superficie">Superficie:</label>
  <input type="text" class="form-control" id="superficie" value="" name="superficie" required
           placeholder="Introduce Superficie">
  </div>
  
  <div class="form-group">
    <label for="precio">Precio:</label>
    <input type="text" class="form-control" id="precio" value="" name="precio" required
           placeholder="Precio">
  </div>
  
  <div class="form-group">
    <label for="direccion">Dirección:</label>
    <input type="text" class="form-control" id="direccion" value="" name="direccion" required autofocus
           placeholder="Introduce direccion">
  </div>
  
  <div class="form-group">
    <label for="descripcion">Descripcion:</label>
    <input type="text" class="form-control" id="descripcion" value="" name="descripcion" required autofocus
           placeholder="Introduce descripcion">
  </div>
  
  <div class="form-group">
  <label for="estado">Estado:</label>
  <select class="form-control" id="estado" name="estado">
    <option>Nuevo</option>
    <option>Buen Estado</option>
    <option>A Reformar</option>
   </select>
</div>

<fieldset>
        <legend>Modalidad</legend>
       
            <input type="radio" name="modalidad" value="En venta">En Venta&nbsp;&nbsp;&nbsp;&nbsp;
               
            <input type="radio" name="modalidad" value="En alquiler">En alquiler
         
    </fieldset>
 
	<!--<input type="submit" name="Sarchivo" value="Subir Archivo" class="btn-info btn-sm" />-->
<br><br>
 
  <input type="submit" class="btn btn-default" value="Enviar" name="env" />
</form>
</div>
</div>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$habitaciones = $_POST['habitaciones'];
		$aseos = $_POST['aseos'];
		$superficie = $_POST['superficie'];
		$precio = $_POST['precio'];
		$direccion = $_POST['direccion'];
		$descripcion = $_POST['descripcion'];
		$estado = $_POST['estado'];
		$modalidad = $_POST['modalidad'];
		
try {
  
    $sql1 = "INSERT INTO tblinmuebles (direccion_inmu, descripcion, habitaciones, aseos, superficie, precio, estado, modalidad, idcliente)
			VALUES ('$direccion', '$descripcion', '$habitaciones', '$aseos', '$superficie', '$precio', '$estado', '$modalidad', $idcliente)";
    
    $conn->exec($sql1);
	/***************************   ¡¡¡ BOTON WARNING !!!  ??? **********************************/
	echo "<div id='centrar'><div class='alert alert-success'>Registro creado correctamente.</div></div><p>&nbsp;</p>";
		
		
    	
	 $last_id = $conn->lastInsertId();
	 $_SESSION['idinmueble'] = $last_id;
	 
	 header("Refresh:2; url=Fotos.php");
    }
    catch(PDOException $e)
    {
    echo $sql1 . "<br>" . $e->getMessage();
    }
    $conn = null;	
	
//	header("Refresh:2; url=login.php");
	
	}
	
	

?>
 <!--*******************************   FIN FORMULARIO REGISTRO   ******************************-->
	<section id="content">
		
    </section>
    
    <div class="row service-v1 margin-bottom-40">
            <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="img/service1.jpg" alt="">  
                            <span class="card-title">Compra</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Tómate el tiempo que necesites. La elección debe ser pausada y bien meditada. Nuestros expertos harán que tu compra sea lo más aproximada a lo que estás buscando.
                            </p>
                           
                        </div>
                    </div>        
            </div>
			   <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="img/service2.jpg" alt="">  
                            <span class="card-title">Venta</span>
                        </div>
                        <div class="card-content">
                            <p>
                               Si necesitas vender una vivienda y deseas sacar el máximo rendimiento, nuestro equipo de profesionales trabajará para que puedas conseguirlo. Para tí supondrá un mínimo esfuerzo.
                            </p>
                          
                        </div>
                    </div>        
            </div>
			   <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="img/service3.jpg" alt="">  
                            <span class="card-title">Alquiler</span>
                        </div>
                        <div class="card-content">
                            <p>
                                ¿Deseas alquilar una vivienda?. No te lo pienses más. Niuestro objetivo es conseguir que todos nuestros clientes queden satisfechos por ambas partes. Nosotros nos encargamos de ello.
                            </p>
                           
                        </div>
                    </div>        
            </div> 
        </div>
    
  <!--*********************************   FOOTER   ***************************************-->
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Contacto</h5>
					<address>
					<strong>RMA Inmobiliaria</strong><br>
					Avda. Hispanidad S/N<br>
					 28055 MADRID</address>
					<p>
						<i class="icon-phone"></i> (34) 555 55 55 55 <br>
						<i class="icon-envelope-alt"></i> rma@inmobiliaria.com
					</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Links</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Últimos eventos</a></li>
						<li><a class="waves-effect waves-dark" href="#">Términos y Condiciones</a></li>
						<li><a class="waves-effect waves-dark" href="#">Política de Privacidad</a></li>
						<li><a class="waves-effect waves-dark" href="#">Contáctanos</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Últimas Noticias</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Inmueble en venta. Oportunidad.</a></li>
						<li><a class="waves-effect waves-dark" href="#">Oferta, Pisos en Málaga.</a></li>
						<li><a class="waves-effect waves-dark" href="#">Últimos días. Oportunidades.</a></li>
                        <li><a class="waves-effect waves-dark" href="#">Apartamentos en linea de playa.</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Ventas Recientes</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Granada. Tres dormitorios.</a></li>
						<li><a class="waves-effect waves-dark" href="#">Málaga. Dos cuartos de baño</a></li>
						<li><a class="waves-effect waves-dark" href="#">Gran Canaria. Vistas al mar.</a></li>
                        <li><a class="waves-effect waves-dark" href="#">La Coruña. Duplex recien reformado.</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy;RMA Inmobiliaria 2017. Todos los derechos reservados </span><a href="index.php">RMA Inmobiliaria</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="materialize/js/materialize.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>