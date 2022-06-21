<?php
    include("../../clases/conexion.php");
    include("../../clases/usuarioBD.php");
    $conexion = new conexion();
    $usuarioBD = new usuario($conexion);
    $res=$usuarioBD->agregar($_POST['nombre'],$_POST['apellido'],$_POST['usuario'],$_POST['clave']); 
    if($res){
        echo "<script type='text/javascript'>location.href = '../../index.php';
              </script>";     
    }else{
        echo "no guardo";
    }

