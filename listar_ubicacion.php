<?php
error_reporting(0);
include("clases/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>UBICACIONES</title>
	<meta charset="UTF-8">
	<meta name="description" content="HALO photography portfolio template">
	<meta name="keywords" content="photography, portfolio, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
    <link href="img/icono.ico" rel="shortcut icon"/>


	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="librerias/bootstrapt/css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style3.css"/>
	<link rel="stylesheet" href="css/estilos_listaUsuarios.css">
	

	<!-- JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="librerias/bootstrapt/js/bootstrap.js"></script>
	<script src="librerias/alertify/alertify.js"></script>
	<script src="librerias/alertify/alertify.min.js"></script>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<audio src="img/sonido.mp3" id="sonido"></audio>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section start -->
	<header class="header-section sp-pad">
		<h3 class="site-logo">UBICACIONES</h3>
		<form class="search-top">
			<button class="se-btn"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search.....">
		</form>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="main-menu">
		<ul>
				<li><a href="principal.php">Inicio</a></li>
				<li><a href="listar_ubicacion.php">ubicaciones</a></li>
				<li><a href="listar_sensor.php">sensores</a></li>
				<li><a href="listar_notificacion.php">Registros</a></li>
				<li><a href="listar_perturbacion.php">Perturbacion</a></li>
				<li><a href="contacto.html">contacto</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	<!-- Page top section start -->
	<div class="page-top-area set-bg" data-setbg="img/ubi.jpg">
		<div class="breadcrumb-area">
			<a href="principal.php">Inicio</a> / <span>Lista de ubicaciones</span>
		</div>
	</div>
	<!-- Page top section end -->


	<!-- Portfolio section start -->
	<section class="container">
		
		<div class='container'>
			<div id='tabla'></div>
		</div>

		<!--Modal registro de producto-->

			<div class='modal fade' id='modalRegistro_ubicacion' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
			<div class='modal-dialog modal-sm' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title' id='myModalLabel'>Agregar ubicacion</h5>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
				</div>
				<form action='admin/registros/registro_ubicacion.php' method='POST'>
					<div class='modal-body'>
						<label>Nombre de la Ubicacion</label>
						<input type='text' name='nombre' id='nombre' class='form-control inpu-sm'>
						<label>Direccion</label>
						<input type='text' name='direccion' id='direccion_p' class='form-control inpu-sm'>
						<label>Codigo pais</label>
						<input type='text' name='cod_pais' id='cod_pais_p' class='form-control inpu-sm'>
						<label>Codigo Departamento</label>
						<input type='text' name='cod_departamento' id='cod_departamento_p' class='form-control inpu-sm'>
						<label>Codigo ciudad</label>
						<input type='text' name='cod_ciudad' id='cod_ciudad_p' class='form-control inpu-sm'>
					</div>
					<div class='modal-footer'>
					<button type='submit' class='btn btn-primary'>Agregar</button>
					</div>
				</form>
				</div>
			</div>
			</div>

			<!--Nuevo Moda Edicion de registros-->

			<div class='modal fade' id='modalEdicion_ubicacion' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
			<div class='modal-dialog modal-sm' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title' id='myModalLabel'>Editar ubicacion</h5>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
				</div>
				<div class='modal-body'>
				<form action='admin/edicion/editar_ubicacion.php' method='POST' id='form_cliente'>
						<label>Id ubicacion</label>
						<input type='text' name='id_ubicacion_e' id='nombre' class='form-control inpu-sm'>
						<label>Nombre de Ubicacion</label>
						<input type='text' name='nombre_e' id='nombre' class='form-control inpu-sm'>
						<label>Direccion</label>
						<input type='text' name='direccion_e' id='direccion_p' class='form-control inpu-sm'>
						<!--<label>Fecha de creacion</label>
						<input type='text' name='fecha_creacion_e' id='direccion_p' class='form-control inpu-sm'>-->
						<label>Codigo pais</label>
						<input type='text' name='cod_pais_e' id='cod_pais_p' class='form-control inpu-sm'>
						<label>Codigo Departamento</label>
						<input type='text' name='cod_departamento_e' id='cod_departamento_p' class='form-control inpu-sm'>
						<label>Codigo ciudad</label>
						<input type='text' name='cod_ciudad_e' id='cod_ciudad_p' class='form-control inpu-sm'>
					<div class='modal-footer'>
					<button type='submit' class='btn btn-primary'>Actualizar</button>
					</div>
				</form>
				</div>
			</div>
		</div>

		<!--Llamado de la tabla cliente-->
		<script type='text/javascript'>
			$(document).ready(function(){
					$('#tabla').load('tablas/tabla_ubicacion.php');
			});

			
		</script>

		

	</section>

	


	

	<!--<footer class="footer-section spad">
		<div class="container text-center">
			<h2>CRISGI</h2>
			
			<div class="social">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a><br>-->

<br><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>