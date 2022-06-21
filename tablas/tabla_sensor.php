<br>
<br>
<!--Tabla de clientes-->
<h3>Gestionar Sensores</h3>
<table class='table table-hover table-dark'>
<script src="https://kit.fontawesome.com/711b725bdc.js"></script>
<hr/>
<!--Titulo y boton de agregar-->
<button class="btn btn-primary" data-toggle="modal" data-target="#modalRegistro_sensor">
    Agregar sensor
    <i class="fas fa-plus"></i>
</button>
<br/><br/>

    <?php
    error_reporting(0);
        include("../clases/conexion.php");
        include("../clases/usuarioBD.php");
        $conexion = new conexion();
        $usuarioBD = new usuario($conexion);
            
        
        $listar = $usuarioBD->listarsensor();
        
            echo "
                <thead>
                    <tr><div id='visualizar'></div>
                    <th>Id sensor</th>
                    <th>Id ubicacion</th>
                    <th>Fecha creacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </tr>
                </thead>";

        foreach($listar as $vector){
            echo "
                <tbody>
                    <tr>
                        <td>{$vector['id_sensor']}</td>
                        <td>{$vector['id_ubicacion']}</td>
                        <td>{$vector['fecha_creacion']}</td>
                        <td>
                            <button class='btn btn-warning' data-toggle='modal' data-target='#modalEdicion_sensor'>
                                <i class='fas fa-user-edit'></i>
                            </button>
                        </td>
                        <td>
                            <button type='submit' onclick='procesar(\"visualizar\", \"admin/eliminar/eliminar_sensor.php\", 
                            \"id={$vector['id_sensor']}\")' class='btn btn-danger'>
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
        
    