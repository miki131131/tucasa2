<?php 
include('../conexion.php');
session_start();
    if(isset($_SESSION['nombre'])){
	$usuario = $_SESSION['nombre'];
	}?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Compra Inmuebles</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- css -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../materialize/css/materialize.min.css" media="screen,projection" />
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="../css/flexslider.css" rel="stylesheet" />

<!-- Vendor Styles -->
<link href="../css/magnific-popup.css" rel="stylesheet">
<!-- Block Styles -->
<link href="../css/style.css" rel="stylesheet" />
<link href="../css/gallery-1.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/compra.css">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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
              <li><i class="icon-info-blocks material-icons">question_answer</i><span>info@active.com</span></li>
              <li><i class="icon-info-blocks material-icons">perm_phone_msg</i><span>+(012) 345 6789</span></li>
            </ul>
            <div class="clr"></div>
          </div>
        </div>
        <!-- info --> 
        
      </div>
    </div>
  </header>
  <!--</.topbar>--> 
  
  <!-- start header -->
  <header>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="../index.php"><i class="material-icons">store</i>RMA Inmobiliaria</a> </div>
        <div class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">
            <li class="active"><a class="waves-effect waves-dark" href="../index.php">Inicio</a></li>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">Servicios&nbsp;<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a class="waves-effect waves-dark" href="compra.php">Compra</a></li>
                <li><a class="waves-effect waves-dark" href="#">Alquiler</a></li>
              </ul>
            </li>
            <li><a class="waves-effect waves-dark" href="../contact.php">Contacto</a></li>
            <li><a class="waves-effect waves-dark" href="../exit.php">Salir</a></li>
            <li><a class="" href="#"><?php echo "Bienvenido/a  &nbsp;&nbsp; " . $usuario ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="pageTitle">Inmuebles en Venta</h2>
        </div>
      </div>
    </div>
  </section>
  <!--<section id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="about-logo"> </div>
        </div>
      </div>
    </div>
  </section>-->
  <!--  *************************************  GALERIA***************************************** -->
  
  <section id="casa_compra">
    <div class="fitr">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <h5>Habitaciones<br><br>
          <input type="radio" name="num_hab" value="1" >
          1
          <input type="radio" name="num_hab" value="2" >
          2
          <input type="radio" name="num_hab" value="3" >
          3
          <input type="radio" name="num_hab" value="4" >
          4
          <input type="radio" name="num_hab" value="5" >
          5
           </h5>
          <p>&nbsp;</p>
        <h5>Aseos<br><br>
          <input type="radio" name="num_ase" value="1" >
          1
          <input type="radio" name="num_ase" value="2" >
          2
          <input type="radio" name="num_ase" value="3" >
          3 </h5>
                    <p>&nbsp;</p>
        <h5>Superficie<br><br>
          <input type="range" name="superficie" id="superficie" min="80" max="150">
          <div id="num_rang">
      <span id="temp">115</span>m<sup>2</sup>
      </div>
        </h5>
       
                  <p>&nbsp;</p>
        <h5>Estado<br><br>
          <input type="radio" name="estado" value="Nuevo" >
          Nuevo
          <input type="radio" name="estado" value="Buen Estado" >
          Buen Estado
          <input type="radio" name="estado" value="A Reformar" >
          A Reformar </h5>
                    <p>&nbsp;</p>
       <!-- <h5>Precio<br><br>
           <input type="range" name="price" id="price" min="80" max="150">
          <div id="num_rang">
      <span id="temp2">115</span>m<sup>2</sup>
      </div>
       </h5>-->
                    <p>&nbsp;</p>
        <input type="submit" name="env" value="Enviar datos">
      </form>
 <!--*************************************************************************************-->
 <script>
  addEventListener('load',inicio,false);

  function inicio()
  {
    document.getElementById('superficie').addEventListener('change',cambioTemperatura,false);
  }

  function cambioTemperatura()
  {    
    document.getElementById('temp').innerHTML=document.getElementById('superficie').value;
  }	
  
   addEventListener('load',inicio1,false);

  /*function inicio1()
  {
    document.getElementById('price').addEventListener('change',cambioTemperatura,false);
  }

  function cambioTemperatura()
  {    
    document.getElementById('temp2').innerHTML=document.getElementById('price').value;
  }*/	
  
</script>
 
  <!--*************************************************************************************-->
    </div>
    <div class="galer"> 
 <?php
if(isset($_POST['env'])){
	$num_hab = $_POST['num_hab'];
	$num_ase = $_POST['num_ase'];
	$superf = $_POST['superficie'];
	$estado = $_POST['estado'];
	$precio = $_POST['price'];
	if($superf>80 && $superf<=100){
		$superf = 80;
		}
	else if($superf>100 && $superf<=120){
		$superf = 100;
		}
	else if($superf>120 && $superf<=135){
		$superf = 120;
		}else{$superf = 150;}
	echo "Habitaciones: " . $num_hab . "<br>";
	echo "Aseos: " . $num_ase . "<br>";
	echo "Superficie: " . $superf . "<br>";
	echo "Estado: " . $estado . "<br>";
	echo "Precio: " . $precio . "<br>";
	$sql_c = "SELECT inm.direccion_inmu, inm.descripcion, inm.superficie, img.imagen FROM tblinmuebles as inm INNER JOIN tblimagenes as img ON inm.idinmueble=img.idinmueble WHERE inm.habitaciones='$num_hab' AND inm.aseos='$num_ase' AND inm.superficie='$superf' AND inm.estado='$estado' AND inm.precio='$precio'";
	}
?>     
    
    </div>
  </section>
  <!--</casa_compra--> 
  <!--*************************************************** FIN GALERIA ********************************--> 
</div>
<!--</wrapper-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="widget">
          <h5 class="widgetheading">Contacto</h5>
          <address>
          <strong>RMA Inmobiliaria</strong><br>
          Avda. Hispanidad S/N<br>
          28055 MADRID
          </address>
          <p> <i class="icon-phone"></i> (34) 555 55 55 55 <br>
            <i class="icon-envelope-alt"></i> rma@inmobiliaria.com </p>
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
            <p> <span>&copy;RMA Inmobiliaria 2017. Todos los derechos reservados </span><a href="../index.php">RMA Inmobiliaria</a> </p>
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
<script src="../js/jquery.js"></script> 
<script src="../js/jquery.easing.1.3.js"></script> 
<script src="../materialize/js/materialize.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.fancybox.pack.js"></script> 
<script src="../js/jquery.fancybox-media.js"></script> 
<script src="../js/jquery.flexslider.js"></script> 
<script src="../js/animate.js"></script> 
<!-- Vendor Scripts --> 
<script src="../js/modernizr.custom.js"></script> 
<script src="../js/jquery.isotope.min.js"></script> 
<script src="../js/jquery.magnific-popup.min.js"></script> 
<script src="../js/animate.js"></script> 
<script src="../js/custom.js"></script>
</body>
</html>