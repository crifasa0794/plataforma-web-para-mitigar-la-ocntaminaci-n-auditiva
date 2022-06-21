<?php
      


//Realizamos la conexion al servidor
    $conectar = pg_connect("host=localhost port=5432 password=1234 user=cristian
    dbname=aula") or die ("Error de conexión a la BD".pg_last_error());
    if(!$conectar){
        echo "No se pudo conectar con el servidor";
    }else{
        echo"conexion establecida";
    }
         
//Obtenemos las variables email y contraseña

 $nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
$email = $_POST['usuario'];
    $password = $_POST['clave'];
//$telefono= $_POST['telefono'];

$sql="INSERT INTO microsec.administrador (nombre,apellido,usuario,clave)
             VALUES('$nombre','$apellido','$usuario','$password')";
             
        $resultado = pg_query($conexion, $sql); 
             if(!$sql){             
               echo'<script type="text/javascript">alert("error al registrar");window.location.href="index.php";
        </script>';
                 exit;
             } else{
                 echo'<script type="text/javascript">alert("datos registrados correctamente");window.location.href="index.php";
        </script>';
        exit;
             } 
             

             $sql="INSERT INTO microsec.usuario (nombre,apellido,usuario,clave)
             VALUES('$nombre','$apellido','$usuario','$password')";
             
        $resultado = pg_query($conexion, $sql); 
             if(!$sql){             
               echo'<script type="text/javascript">alert("error al registrar");window.location.href="index.php";
        </script>';
                 exit;
             } else{
                 echo'<script type="text/javascript">alert("datos registrados correctamente");window.location.href="index.php";
        </script>';
        exit;
             }
        ?>