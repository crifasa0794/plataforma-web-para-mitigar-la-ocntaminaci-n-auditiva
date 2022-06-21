<br>
<br>
<!--Tabla de clientes-->
<h3>Gestionar eventos</h3>
<table class='table table-hover table-dark'>
<script src="https://kit.fontawesome.com/711b725bdc.js"></script>
<hr/>
<!--Titulo y boton de agregar-->

<a href="pg_excel/notificacion.xlsx"><button class="btn btn-success z-depth-2" >
    Descargar EXCEL
    <i class="fas fa-download"></i>
</button></a>
<br/><br/>

    <?php 
     error_reporting(0);
        include("../conexion_arduino.php");
        //include("../clases/usuarioBD.php");
        $conexion = new conexion();
        $usuarioBD = new usuario($conexion);
            
        $listar = $usuarioBD->listarnotificacion();
        
            echo "
                <thead>
                <tr><div id='visualizar'></div>
                <th>Id notificacion</th>
                <th>Id sensor</th>
                <th>Id ubicacion</th>
                <th>Fecha</th>
                <th>nivel dB</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </tr>
                </thead>";

        foreach($listar as $vector){
            echo "
                <tbody>
                    <tr>
                        <td>{$vector['id_notificacion']}</td>
                        <td>{$vector['id_sensor']}</td>
                        <td>{$vector['id_ubicacion']}</td>
                        <td>{$vector['fecha_hora']}</td>
                        <td>{$vector['nivel_db']}</td>
                        <td>
                            <button class='btn btn-warning' data-toggle='modal' data-target='#modalEdicion_notificacion'>
                                <i class='fas fa-user-edit'></i>
                            </button>
                        </td>
                        <td>
                            <button type='submit' onclick='procesar(\"visualizar\", \"admin/eliminar/eliminar_notificacion.php\", 
                            \"id={$vector['id_notificacion']}\")' class='btn btn-danger'>
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
        
    