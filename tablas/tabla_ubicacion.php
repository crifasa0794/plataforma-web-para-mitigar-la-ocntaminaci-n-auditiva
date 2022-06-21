<br>
<br>
<!--Tabla de clientes-->
<h3>Gestionar Ubicacion</h3>
<script src="https://kit.fontawesome.com/711b725bdc.js"></script>
<table class='table table-hover table-dark'>
<hr/>
<!--Titulo y boton de agregar-->
<button class="btn btn-primary" data-toggle="modal" data-target="#modalRegistro_ubicacion">
    Agregar Ubicacion 
    <i class="fas fa-plus"></i>
</button>
<br/><br/>
    <?php
    error_reporting(0);
        include("../clases/conexion.php");
        include("../clases/usuarioBD.php");
        $conexion = new conexion();
        $usuarioBD = new usuario($conexion);
            
        $listar = $usuarioBD->listarubicacion();
            echo "
                <thead>
                    <tr><div id='visualizar'></div>
                    <th>id_ubicacion</th>
                    <th>nombre</th>
                    <th>direccion</th>
					<th>fecha_creacion</th>
					<th>cod_pais</th>
					<th>cod_departamento</th>
					<th>cod_ciudad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </tr>
                </thead>";

        foreach($listar as $vector){
            echo "
                <tbody>
                    <tr>
                        <td>{$vector['id_ubicacion']}</td>
                        <td>{$vector['nombre']}</td>
                        <td>{$vector['direccion']}</td>
						<td>{$vector['fecha_creacion']}</td><td>{$vector['cod_pais']}</td><td>{$vector['cod_departamento']}</td>
						<td>{$vector['cod_ciudad']}</td>
						
                        <td>
                            <button class='btn btn-warning' data-toggle='modal' data-target='#modalEdicion_ubicacion'>
                                <i class='fas fa-user-edit'></i>
                            </button>
                        </td>
                        <td>
                            <button type='submit' onclick='procesar(\"visualizar\", \"admin/eliminar/eliminar_ubicacion.php\", 
                            \"id={$vector['id_ubicacion']}\")' class='btn btn-danger'>
                                <i class='fas fa-user-times'></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            ";
        }  
    ?>
</table>
<script type='text/javascript'>
	function procesar(capa, url, datos){
    	$.post( url,datos, function( data ) {
    	$( '#'+capa ).html( data );
    	});
	}
</script>
        
    