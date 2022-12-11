<?php
 session_start();
 // Borra todas las variables de sesión
 $_SESSION = array();
 // Elimina la cookie con el identificador de sesion (PHPSESSID)
 if(isset($_COOKIE[session_name()])) {
 setcookie(session_name(), '', -1);
 }
 // Terminación de la sesión
 session_destroy();
 header("Location: inicio.php");
 die();
?>
