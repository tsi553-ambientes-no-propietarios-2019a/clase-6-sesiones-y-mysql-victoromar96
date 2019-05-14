<?php
/*
Reescribir el ejemplo anterior configurando el archivo .htaccess (revisar archivo php.ini) para que permita la inclusión automática de scripts y tener una mejor organización de archivos y mayor reutilización de código.
*/

session_start();
$usuario = $_SESSION['username'];
if(!isset($usuario))
{
    header("location: login.php");
}else
{
    echo "<h1> Bienvenido $usuario </h1>";
echo "<a href='logica/salir.php'>salir</a>";
}

?>


