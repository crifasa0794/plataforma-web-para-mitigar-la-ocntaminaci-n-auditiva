<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="css/style_r.css">
   
</head>
<body>
    <div class="login_box"> 
        <img class="avatar" src="img/ico.jpg" alt="logo_GS">
        <h1>Registrate</h1>
        <form action="admin/registros/registro_admin.php" method="post">
            <!--Nombre-->
            <label for="Nombre">Nombre</label>
            <input type="text" placeholder="Ingresa tu nombre" name="nombre">

            <!--Apellido-->
            <label for="Apellido">Apellido</label>
            <input type="text" placeholder="Ingresa tu apellido" name="apellido">
            
            <!--Correo-->
            <label for="Usuario">Correo</label>
            <input type="text" placeholder="Ingresa tu correo" name="usuario">

            <!--Contraseña-->
            <label for="Clave">Contraseña</label>
            <input type="password" placeholder="Ingresa tu Contraseña" name="clave">

            <!--Botones-->
            <input type="submit" value="Registrate">
            <div class="link">
                <p><a href="index.php"><button type="button" class="btn btn-warning"> Login</button></a>
            </div>
        </form>
    </div>
</body>
</html>