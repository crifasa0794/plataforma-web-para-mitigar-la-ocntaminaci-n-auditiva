<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRISGI</title>
    <link rel="stylesheet" href="css/style2.1.css">
    <link href="img/icono.ico" rel="shortcut icon"/>
</head>
<body>
    <div class="login_box">
        <img class="avatar" src="img/ico.jpg" alt="logo_GS">
        <h1>Iniciar Sesión</h1>
        <form action="inciarsesion.php" method="POST">
            <!--Correo-->
            <label for="Usuario">Correo</label>
            <input type="email" placeholder="Ingresa tu correo" id="correo" name="usuario">
            
            <!--Contraseña-->
            <label for="clave">Contraseña</label>
            <input type="password" placeholder="Ingresa tu constraseña" id="clave" name="clave">

            <!--Botones-->
            <input type="submit" value="Iniciar sesion">
            <a href="../aula/registro.php"><button type="button" class="btn btn-warning"> registrate</button></a>
        </form>
    </div>
</body>
</html>