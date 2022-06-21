<?php
    session_start();
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    if($usuario != "" && $clave != ""){
        include("clases/conexion.php");
        include("clases/usuarioBD.php");
        $conexion = new conexion();
        $usuarioBD = new usuario($conexion);
        $respuesta = $usuarioBD->login($usuario,$clave);
        if($respuesta){
            header("Location: principal.php");
        }else{
            session_destroy();
            echo "Usuario o contraseña incorrecta";
        }
    }else{
        echo "Error: No hay datos!";
    }
    
?>