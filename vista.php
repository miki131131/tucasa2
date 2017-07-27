<?php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>RMA Inmobiliaria</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- css --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="css/style.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page"> 
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
                    <a class="navbar-brand" href="index_original.php"><i class="material-icons">store</i>RMA Inmobiliaria</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a class="waves-effect waves-dark" href="index_original.php">Inicio</a></li> 
						 <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">Servicios&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="compra.php">Compra</a></li>
                           
                            <li><a class="waves-effect waves-dark" href="#">Alquiler</a></li> 
                           
                        </ul>
                    </li>                       
                        <li><a class="waves-effect waves-dark" href="contact.php">Contacto</a></li>
                        <li><a class="" href="registro.php">Registro</a></li>
                        <li><a class="waves-effect waves-dark" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
    <div id="separa"></div>
      <!--****************************************   GALERIA   ***********************************************-->  
	 <div id="vista_img">
  <!--
                 <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">-->
      <?php
	 if(isset($_GET['id'])){
	$id=$_GET['id'];
	
		  
try {
 //echo "ID numero " . $id;
  $datos = $conn->query("SELECT inm.direccion_inmu, img.imagen, inm.descripcion, inm.modalidad, inm.precio   
  FROM tblinmuebles AS inm INNER JOIN tblimagenes AS img ON inm.idinmueble=img.idinmueble WHERE inm.idinmueble='$id'");
  
  foreach($datos as $row) ?>
 <div class="datos_inm">
                        <span class="titu"><?php echo $row['direccion_inmu'] ?></span><br>
                        <span><img class="" src="<?php echo $row['imagen'] ?>" alt=""> </span> 
                        <p>&nbsp;</p>
                                                                       
                        <span class="txt_prev"><?php echo $row['descripcion'] ?></span>
                       <div class="txt_pre">Precio: <b><i><?php echo $row['precio'] ?>€</b><i></b></div>
                        </div>
  </div>
<?php
 
} catch(PDOException $e) {
  echo 'Error conectando con la base de datos: ' . $e->getMessage();
}
	}
	  ?>                  
              <!--</div> -->   <!--</card-image>-->    
            <!--</div>-->   <!--</card-small>-->			  
          <!--</div> -->  <!--</col-md-4 md-margin-bottom-40>-->
     <!--***************************************************************************************-->
     </div> 
      
        
        
	<section id="content"> 
	<div class="container">
	
		<section class="services">
	    	<div class="row">
			<div class="col-md-12">
				
				<br/>
			</div>
		</div>

	 <div class="row">
            <div class="col-sm-4 info-blocks"> 
				<i class="icon-info-blocks material-icons">track_changes</i>
                <div class="info-blocks-in">
                    <h3>Consultoría</h3>
                    <p>Te aconsejamos sobre todo lo que pueden ofrecer las viviendas que pueda interesarte vender, comprar o alquilar.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons">monetization_on</i>
                <div class="info-blocks-in">
                    <h3>Financiación</h3>
                    <p>Nuestra labor en el ámbito financiero te proporcionará los más cómodos y eficaces sistemas de pago; y siempre adaptados a tus posibilidades.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons">developer_mode</i>
                <div class="info-blocks-in">
                    <h3>Desarrollo</h3>
                    <p>Disponemos de una gran cantidas de profesionales altamente cualificados que harán que negociar con tu vivienda sea más cómodo de lo que esperabas.</p>
                </div>
            </div>
        </div>
<div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons">my_location</i>
                <div class="info-blocks-in">
                    <h3>Marketing</h3>
                    <p>Te facilitamos un equipo de especialistas en márketing para que tu vivienda esté siempre visible en un gran número de contenedores de publicidad.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons">high_quality</i>
                
                <div class="info-blocks-in">
                    <h3>Calidad</h3>
                    <p>La calidad exige garantías. Somos especialistas. Solo admitimos inmuebles que tengan una calidad más que aceptable. La calidad es nuestro sello.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons">tab_unselected</i>
                <div class="info-blocks-in">
                    <h3>Producción</h3>
                    <p>Con el objetivo de ofrecer a nuestros clientes un servicio que mejora constantemente, disponemos de un equipo altamente innovador.</p>
                </div>
            </div>
        </div>
		</section>
	</div>
	</section>
	
		  
	<!--*******************************   FOOTER   **********************************************-->
 
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
							<span>&copy;RMA Inmobiliaria 2017. Todos los derechos reservados </span><a href="index_original.php">RMA Inmobiliaria</a>
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
<script>
function enviando(id){
	location.href="vista.php?id=" + id;
	}
</script>
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