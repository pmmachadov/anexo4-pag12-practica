<?php
 session_start();
 // Existe la sesion?
 if (!isset($_SESSION['usuario'])) {
 header("Location: inicio.php"); // No existe -> Redireccionamiento a inicio
 die();
 }
 // Si existe sesion - Obtencion de nombre de usuario registrado
 $nombre = $_SESSION['usuario'];
?>
Programación Web en PHP
13
<html>
 <head>
 <title>Bienvenido</title>
 </head>
 <body>
 <h1>HOLA <?=$nombre?></h1>
 <a href='cierre.php'>CERRAR SESION</a>
 </body>
</html>