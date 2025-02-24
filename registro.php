<?php 
include ("conexion.php");

$new_nombre = $_POST['nombre']; 
$new_a_paterno = $_POST['a_paterno']; 
$new_a_materno = $_POST['a_materno']; 
$new_mail =$_POST['mail']; 
$new_celular = $_POST['celular']; 
$new_convocatoria = $_POST['convocatoria']; 

echo "Los datos introducidos son: <br>"; 
echo "$new_nombre,$new_a_paterno,$new_a_materno,$new_mail,$new_celular y $new_convocatoria ";

$sql = "INSERT INTO users (id, nombre, a_paterno,a_materno,mail,celular,convocatoria) VALUES ('','$new_nombre','$new_a_paterno','$new_a_materno','$new_mail','$new_celular','$new_convocatoria')";

mysqli_query($conexion,"INSERT INTO usuarios VALUES ('','$new_nombre','$new_a_paterno','$new_a_materno','$new_mail', '$new_celular','$new_convocatoria')"); 

if (mysqli_query($conexion, $sql)) {
    echo "<br><br>Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion); 

?> 