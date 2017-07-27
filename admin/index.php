<?php
include '../conexion.php';

$query = $conn->prepare('SELECT idcliente, nombre from tblclientes');
$query->execute();	
$result = $query->fetchAll();	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Inmobiliaria RMA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../materialize/css/materialize.min.css" media="screen,projection" />
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="../css/flexslider.css" rel="stylesheet" /> 
<link href="../css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
 <style>
  #a{
      background-color: #903;
      color: #fff;     
  }
  table{      background-color: #E6E6E6;}
  
  
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
                      <li class="active"><a class="" href="#">Ver clientes</a></li>
                        <li ><a class="waves-effect waves-dark" href="../../index.php">Salir</a></li> 										                                            
                                             
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
				<h2 class="pageTitle">ADMINISTRADOR</h2>
			</div>
		</div>
	</div>
	</section>

<!--//fdgfdgfd-->
<section id="content">
<div class="container">	
<form class="form-horizontal" >
  
  <div class="form-group row">
 
        <div class="col-xs-4">  
 		<label> Nombre Cliente</label>
		<select class="form-control" name="combo">
        <OPTION selected="selected">Todos
		<?php foreach ($result as $row) {
			echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';}
		?>
	    </select>
      </div>  
  
      <div class="col-xs-4">
        <label> Apellidos</label>
        <input class="form-control" name="txtapellidos" type="text">
      </div>
      
     
      <div class="col-xs-4">
         <button type="submit" class="btn btn-primary btn-sm" name="filtrar">Filtrar</button>   
      </div>
           
  </div>
</div>
</form>
     
<?php                   
					


$consulta="SELECT idcliente,nombre,apellidos,email,contrasena FROM tblclientes where 1=1";

if(isset($_GET['filtrar'])){
   $claveAPE=$_GET['txtapellidos'];
   $claveCOM=$_GET['combo']; 
  
   if ($claveCOM!="Todos"){
	   $consulta=$consulta . " and nombre=". chr(34) . $claveCOM . chr(34);
				}   

   if ($claveAPE!=""){
		$consulta=$consulta . " and apellidos like " . chr(34) . "%". $claveAPE . "%" . chr(34);
				}    
}
	
$query = $conn->prepare($consulta);
$query->execute();		
$result = $query->fetchAll();	
		
	
	
	echo "<div class='container'>";
    echo "<table class='table table-hover'>
    <tr>   
    <th>IDusuario</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Email</th>
	<th>Password</th>

    
    </tr>";

    foreach($result as $row)
    	{
		echo "<tr>";
		$ID= $row['idcliente'];
		$NOM= $row['nombre'];		
		echo "<td>" . $row['idcliente'] . "</td>";
		echo "<td>" . $row['nombre'] . "</td>";
		echo "<td>" . $row['apellidos'] . "</td>";
		echo "<td>" . $row['email'] . "</td>";
		echo "<td>" . $row['contrasena'] . "</td>";										
		echo "<td><div class='btn-group'><input type='submit' class='btn btn-danger btn-sm' id ='a' value='Eliminar' onclick = 'confirmar(".$ID.");'>";
		
		echo "<input type='submit' class='btn btn-primary btn-sm' id ='b' value='Actualizar' onclick = 'funcionA(".$ID.");'></div></td>";

		}
   echo "</tr>";
   echo "</table>";
   echo "</div>";
  $conn = null;   
    
	
	  
?>
 <script>
  	function funcionA(id){location.href="actualizar.php?cod="+id; }
	
	function confirmar(id)
		{
		ventana=confirm("Seguro que quieres Eliminarlo"); 
		if (ventana==true) 
			{ 
 				location.href="borrar.php?cod="+id;
			}
		else 
			{
			return false;
		    }
		}
		
  </script>



</section>
                        
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