<?php
// Datos de conexion a la base de datos
$host="localhost";
$db_user="usuario1";
$db_password="crIjxJOgamfcR-h/";
$db_name="usuario1";

//Establecer conexion con la base de datos
$conexion = mysqli_connect($host, $db_user, $db_password, $db_name);

//Verificar si la conexion fue exitosa
if (!$conexion){
    die("Error de conexion: " . mysqli_connect_error());
}

//Optener los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

//Insertar los datos en la base de datos
$sql="INSERT INTO personas (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";

if (mysqli_query($conexion, $sql)){
    echo "Datos guardados corectamente.";
} else {
    echo "Error al guardar los datos:" . mysqli_error($conexion);
}

//Cerrar la conexion a la base de datos
    mysqli_close($conexion);
?>