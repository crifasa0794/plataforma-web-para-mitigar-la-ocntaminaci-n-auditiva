<br>
<br>
<!--Tabla de clientes-->
<h3>Reportar perturbaciones</h3>
<table class='table table-hover table-dark'>
<script src="https://kit.fontawesome.com/711b725bdc.js"></script>
<hr/>
<!--Titulo y boton de agregar-->
<button class="btn btn-primary" data-toggle="modal" data-target="#modalRegistro_perturbacion">
   Notificar perturbacion
    <i class="fas fa-plus"></i>

</button></a>
<br/><br/>

    <?php 
     error_reporting(0);
     include("../clases/conexion.php");
     include("../clases/usuarioBD.php");
        $conexion = new conexion();
        $usuarioBD = new usuario($conexion);
            
        $listar = $usuarioBD->listarperturbacion();
        
            echo "
                <thead>
                <tr><div id='visualizar'></div>
                <th>Id perturbacion</th>
                <th>barrio</th>
                
                <th>Fecha</th>
                
                </tr>
                </thead>";

        foreach($listar as $vector){
            echo "
                <tbody>
                    <tr>
                        <td>{$vector['id_perturbacion']}</td>
                        <td>{$vector['barrio']}</td>
                        
                        <td>{$vector['fecha_hora']}</td>
                       
                        
                        
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
        
    