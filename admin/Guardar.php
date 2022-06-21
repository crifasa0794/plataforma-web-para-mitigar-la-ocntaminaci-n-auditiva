<?php

        include("../clases/conexion.php");
        include("../clases/usuarioBD.php");
        $conexion = new conexion();
        $usuarioBD = new usuario($conexion);
        $res=$usuarioBD->agregar($_POST['nombre'],$_POST['apellido'],$_POST['usuario'],$_POST['clave']);

        if($res){
                 
        header('Location:principal.php');
            
        }else{
            
            echo "no guardo";
        }
        print_r($_POST);

?>