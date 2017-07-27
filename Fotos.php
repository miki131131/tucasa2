<?php
include('conexion.php');
session_start();

//if(isset($_SESSION['nombre'])){
	$usuario = $_SESSION['nombre'];
	$idcliente = $_SESSION['idcliente'];
	$idinmueble = $_SESSION['idinmueble'];
	echo $usuario;
	echo $idinmueble;
//	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Active Multi purpose HTML5 Web Template</title>
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
<style>
.bot{font-family:Arial, Helvetica, sans-serif;}
</style>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

<form method="post" enctype="multipart/form-data">

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
                    <a class="navbar-brand" href="../index.php"><i class="material-icons">store</i>RMA Inmobiliaria</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                      <li class="active"><a class="" href="#">Ver Inmuebles</a></li>
                        <li><a class="waves-effect waves-dark" href="inmuebles.php">Salir</a></li> 
                        <li><a class="waves-effect waves-dark" href="#"><?php echo $usuario ?></a></li>										                                            
                                             
                    </ul>
                </div>
            </div>
        </div>
	</header>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Fotos Inmuebles</h2>
			</div>
		</div>
	</div>
	</section>

<!--//fdgfdgfd-->
<section id="content">
<div class="container">	

     
<?php                   

$consulta="SELECT idinmueble,habitaciones,aseos,superficie,precio, estado FROM tblinmuebles where idinmueble=$idinmueble";
	
$query = $conn->prepare($consulta);
$query->execute();		
$result = $query->fetchAll();	
		
	
	
	echo "<div class='container'>";
    echo "<table class='table table-hover'>
    <tr>   
    <th>IdInmueble</th>
    <th>Habitaciones</th>
    <th>Aseos</th>
    <th>superficie</th>
	<th>precio</th>
	<th>Estado</th>

    
    </tr>";

    foreach($result as $row)
    	{
		echo "<tr>";
		$ID= $idcliente;
		$NOM= $usuario;		
		echo "<td>" . $row['idinmueble'] . "</td>";
		echo "<td>" . $row['habitaciones'] . "</td>";
		echo "<td>" . $row['aseos'] . "</td>";
		echo "<td>" . $row['superficie'] . "</td>";
		echo "<td>" . $row['precio'] . "</td>";		
		echo "<td>" . $row['estado'] . "</td>";									
		echo "<td><div class='btn-group'>";
		echo "<input type='file' class='bot btn btn-primary btn-xs' accept='image/*' name='aa' id='aa'>";
		echo "<input type='submit' class='btn btn-primary btn-sm' name='Sfoto' value='Subir foto'></div></td>";

		}
		
		
   echo "</tr>";
   echo "</table>";
   echo "</div>";
   
    	
  if (isset($_POST['Sfoto']))
		 	{   
				$target_dir = "img/";
				echo $target_dir."<br>";
				$target_file = $target_dir . basename($_FILES["aa"]["name"]);
				echo $target_file;
				if (move_uploaded_file($_FILES["aa"]["tmp_name"], $target_file))
					 {
        				echo "The file ". basename( $_FILES["aa"]["name"]). " has been uploaded.";
						
						try {
  							$imagen = $target_file;
    						$sql1 = "INSERT INTO tblimagenes (idinmueble, imagen)
									VALUES ('$idinmueble', '$imagen')";
    
   						    $conn->exec($sql1);
	/***************************   ¡¡¡ BOTON WARNING !!!  ??? **********************************/
							echo "<div id='centrar'><div class='alert alert-success'>Imagen Añadida correctamente.			                                  </div></div><p>&nbsp;</p>";
	
    }
    catch(PDOException $e)
    {
    echo $sql1 . "<br>" . $e->getMessage();
    }
    $conn = null;	
						
						
						
						
						
					 }
			         else
					{echo "ERROR AL SUBIR EL ARCHIVO";} 
			} 	  
	
	  $conn = null;  
?>
 <script>
  	function funcionA(id){location.href="Actualizar2.php?cod="+id; }
	
	function confirmar(id)
		{
		ventana=confirm("Seguro que quieres Eliminarlo"); 
		if (ventana==true) 
			{ 
 				location.href="Borrar2.php?cod="+id;
			}
		else 
			{
			return false;
		    }
		}
		
	 
		
  </script>



</section>
<!--//fdgfdgfd-->    
           

    
    
    
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
							<span>&copy;RMA Inmobiliaria 2017. Todos los derechos reservados </span><a href="../index.php">RMA Inmobiliaria</a>
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

</form>

</body>
</html>