<?php
error_reporting(0);
include("clases/conexion_arduino.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>REGISTROS</title>
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
		<h3 class="site-logo">REGISTROS</h3>
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
				<li><a href="listar_perturbacion.php">perturbaciones</a></li>
				<li><a href="contacto.html">contacto</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page top section start -->
	<div class="page-top-area set-bg" data-setbg="img/abc.jpg">
		<div class="breadcrumb-area">
			<a href="principal.php">Inicio</a> / <span>Lista de registros de eventos</span>
		</div>
	</div>
	<!-- Page top section end -->

	<section class='container'>

		<div class='container'>
			<div id='tabla'></div>
		</div>

		<!--Modal registro de producto-->

			<!--<div class='modal fade' id='modalRegistro_notificacion' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
			<div class='modal-dialog modal-sm' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title' id='myModalLabel'>Agregar registro</h5>-->
					<!--<a href= "../excel.php"><h5 class='modal-title' id='myModalLabel'>descargar EXCEL</h5></a>-->

					<!--<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>-->
				<!--</div>-->
				<!--<form action='admin/registros/registro_notificacion.php' method='POST'>
					<div class='modal-body'>-->

					    <!--<label>Id notificacion</label>
						<input type='text' name='num_apartamento' id='nombre_r' class='form-control inpu-sm'>-->
						<!--<label>Id Sensor</label>
						<input type='text' name='id_sensor' id='apellido_r' class='form-control inpu-sm'>
						<label>Id ubicacion</label>
						<input type='text' name='id_ubicacion' id='telefono_r' class='form-control inpu-sm'>-->
						<!--<label>Fecha y hora</label>
						<input type='text' name='fecha_hora' id='email_r' class='form-control inpu-sm'>-->
						<!--<label>nivel dB</label>
						<input type='text' name='nivel_db' id='email_r' class='form-control inpu-sm'>
					
					</div>
					<div class='modal-footer'>
					<button type='submit' class='btn btn-primary'>Agregar</button>
					</div>
				</form>
				</div>
			</div>
			</div>-->

			<!--Nuevo Moda Edicion de registros-->

			<div class='modal fade' id='modalEdicion_notificacion' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
			<div class='modal-dialog modal-sm' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title' id='myModalLabel'>Editar registro</h5>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
				</div>
				<div class='modal-body'>
				<form action='admin/edicion/editar_notificacion.php' method='POST' id='form_cliente'>

					    <label>Id notificacion</label>
						<input type='text' name='id_notificacion_e' id='nombre_r' class='form-control inpu-sm'>
						<label>Id sensor</label>
						<input type='text' name='id_sensor_e' id='apellido_r' class='form-control inpu-sm'>
						<label>Id ubicacion</label>
						<input type='text' name='id_ubicacion_e' id='telefono_r' class='form-control inpu-sm'>
						<!--<label>Fecha y hora</label>
						<input type='text' name='fecha_hora_e' id='email_r' class='form-control inpu-sm'>-->
						<label>nivel dB</label>
						<input type='text' name='nivel_db_e' id='email_r' class='form-control inpu-sm'>
						
					<div class='modal-footer'>
					<button type='submit' class='btn btn-primary'>Actualizar</button>
					</div>
				</form>
				</div>
			</div>
		</div>
        </div>
		<!--Llamado de la tabla cliente-->
		<script type='text/javascript'>
			$(document).ready(function(){
					$('#tabla').load('tablas/tabla_notificacion.php');
			});
        </script>

	</section>
    <!-- funcion para exportar a exel-->
<script>
        function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
            
            <script type='text/javascript'>
			$(document).ready(function(){
					$('#tabla').load('tablas/tabla_notificacion.php');
			});
            </script>



	<!-- Footer section start -->
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
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>