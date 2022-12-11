<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 // Inicio de sesion
 session_start();
 // Existe la sesion?
 if ( isset($_SESSION['usuario'])) {
 header("Location: home.php"); // Sesión existe -> redireccionamiento a home
 die();
 }
 // La sesion no existe. Hay datos del formulario?
 if ( isset($_POST['usuario'])) {
 // Obtencion de datos, registro en sesion y redireccionamiento a home
 $usuario = filter_input(INPUT_POST, 'usuario');
 $_SESSION['usuario'] = $usuario;
 header("Location: home.php");
 die();
 }
?>
<html>
 <head>
 <title>Autentificacion</title>
 </head>
 <body>
 <form method='post'>
 <label for='usuario'>Usuario:</label>
 <input type="text" id='usuario' name='usuario'>
 <input type="submit" value="Ok">
 </form>
 </body>
</html>
</body>
</html>