<html>
   <link rel="stylesheet" type="text/css" href="../../librerias/alertify/css/alertify.css">
   <script src="../../librerias/alertify/alertify.js"></script>
   <script src="../../librerias/alertifyjs/js/alertify.min.js"></script> 
   <script src="../../js/jquery-3.4.1.min.js"></script>
   <audio src="../../img/sonido.mp3" id="sonido"></audio>
</html>

<?php
    include("../../clases/conexion.php");
    include("../../clases/usuarioBD.php");
    $conexion = new conexion();
    $usuarioBD = new usuario($conexion);
    $res=$usuarioBD->agregarperturbacion($_POST['barrio']); 
    if($res){
        echo "<script type='text/javascript'>
                alertify.success('Nueva perturbacion registrada');
                setTimeout(function(){ location.href = '../../listar_perturbacion.php'; }, 2000);
                document.getElementById('sonido').play();
                </script>";
                   
    }else{
        echo "<script type='text/javascript'>alertify.error('Error');
                setTimeout(function(){ location.href = '../../listar_perturbacion.php'; }, 200000);
                </script>";
    }
?>