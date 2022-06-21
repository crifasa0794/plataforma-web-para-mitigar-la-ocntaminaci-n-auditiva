<?php
$decibelios = $_GET['decibelios'];

$servername = "localhost";
$database = "arduino";
$username = "root";
$password = "";
$port= "5433";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);
$db = mysqli_select_db($conn, $database) or die ("no se ha podido conectar a la base de datos");

$fecha_hora = time();
$consulta = "INSERT INTO notificacion (fecha_hora, decibelios) VALUES (".$fecha_hora.", ".$decibelios.")";

$resultado = mysqli_query($conn, $consulta);


	
		 
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conn);



//echo "los decibelios son:".$decibelios
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librerias/bootstrapt/css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style3.css"/>
    <link rel="stylesheet" href="css/estilos_listaUsuarios.css">
	<link rel="stylesheet" href="css/tabla.css"/>

</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>id_notificacion</td>
			<td>fecha_hora</td>
			<td>decibelios</td>
			
		</tr>

		<?php
    	$sql="SELECT * from notificacion";
		$result=mysqli_query($conn,$sql);

		while($mostrar=mysqli_fetch_array($result)){ 
	
	 ?>

		<tr>
			<td><?php echo $mostrar['id_notificacion'] ?></td>
			<td><?php echo $mostrar['fecha_hora'] ?></td>
			<td><?php echo $mostrar['decibelios'] ?></td>
			
		</tr>
	<?php
     
	}
	 ?>
	</table>

</body>
</html>



