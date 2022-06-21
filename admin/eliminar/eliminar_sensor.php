<?php
    include('../../clases/conexion.php');
    include('../../clases/usuarioBD.php');
    $conexion = new conexion();
    $usuarioBD = new usuario($conexion);
    if($usuarioBD->eliminar_sensor($_POST['id'])){
        echo "<script type='text/javascript'>alertify.success('Sensor eliminado');
            setTimeout(function(){ location.href = '../../aula/listar_sensor.php'; }, 2000);
            </script>";
    }else{
        echo "<script type='text/javascript'>alertify.error('Error');
            setTimeout(function(){ location.href = '../../aula/listar_sensor.php'; }, 2000);
            </script>";
    }
?>