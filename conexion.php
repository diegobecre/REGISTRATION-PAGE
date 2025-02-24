<?php
$server = "localhost";
$user = "root";
$pass = "";
$DB = "proyeclab";
$conexion = new mysqli($server, $user, $pass, $DB);
if ($conexion->connect_errno) {
    die ("La conexion ha fallado" . $conexion->connect_errno);
}else{
    echo"Conexión Exitosa<br>";
}
?>
