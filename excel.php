<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=documento_exportado_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");

	include_once "../conexion_arduino.php";
	
	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
						<th>id_notificacion</th>
					
						<th>fecha_hora</th>
						<th>decibelios</th>
					</tr>
				<tbody>
		";
		
		$this->resultado = mysqli_query($conexion, "SELECT * FROM `notificacion`") or die(mysqli_errno());
		while($fila = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
						<td>".$fetch['id_notificacion']."</td>
						
						<td>".$fetch['fecha_hora']."</td>
						<td>".$fetch['decibelios']."</td>
					</tr>
		";
		}
		
		$output .="
				</tbody>
				
			</table>
		";
		
		echo $output;
	}
	
?>