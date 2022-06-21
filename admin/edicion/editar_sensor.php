<html>
   <link rel="stylesheet" type="text/css" href="../../librerias/alertify/css/alertify.css">
   <script src="../../librerias/alertify/alertify.js"></script>
   <script src="../../librerias/alertifyjs/js/alertify.min.js"></script> 
   <script src="../../js/jquery-3.4.1.min.js"></script>
</html>
<?php
  include("../../clases/conexion.php");
  include("../../clases/usuarioBD.php");

  $conexion = new conexion();
  $usuarioBD = new usuario($conexion);
                   //$id_habitante_e,$num_apartamento_e,$nombre_habitante_e,$cod_pais_e,$cod_departamento_e,$cod_ciudad_e,$cod_conjunto_e
  $res=$usuarioBD->editar_sensor($_POST['id_sensor_e'],$_POST['id_ubicacion_e']); 
  
if($res){
    echo "<script type='text/javascript'>alertify.success('El sensor fue editado');
        setTimeout(function(){ location.href = '../../listar_sensor.php'; }, 2000);
        </script>";
  }else{
    echo "<script type='text/javascript'>alertify.error('Error');
        setTimeout(function(){ location.href = '../../listar_sensor.php'; }, 2000000);
        </script>";
  }      
?>