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
            //$id_visitante_e,$nombre_visitante_e,$num_apartamento_e
  $res=$usuarioBD->editar_ubicacion($_POST['id_ubicacion_e'],$_POST['nombre_e'],$_POST['direccion_e'],$_POST['cod_pais_e'],$_POST['cod_departamento_e'],$_POST['cod_ciudad_e']); 
  
if($res){
    echo "<script type='text/javascript'>alertify.success('Visitante editado');
        setTimeout(function(){ location.href = '../../listar_ubicacion.php'; }, 2000);
        </script>";
  }else{
    echo "<script type='text/javascript'>alertify.error('Error');
        setTimeout(function(){ location.href = '../../listar_ubicacion.php'; }, 2000);
        </script>";
  }      
?>