<?php
include("conexion.php"); // Incluye la conexión a la base de datos

if (isset($_POST['register'])) { // Verifica si se envió el formulario
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['mensaje']) >= 1) {
        // Procesa los campos enviados del formulario
        $nombre = mysqli_real_escape_string($conexion, trim($_POST['nombre']));
        $correo = mysqli_real_escape_string($conexion, trim($_POST['correo']));
        $mensaje = mysqli_real_escape_string($conexion, trim($_POST['mensaje']));
        
        // Inserta los datos en la base de datos
        $consulta = "INSERT INTO formulario(nombre, correo, mensaje) VALUES ('$nombre','$correo','$mensaje')";
        $resultado = mysqli_query($conexion, $consulta);
        
        // Verifica si la consulta fue exitosa
        if ($resultado) {
            echo "<script>console.log('¡Te has inscrito correctamente!');</script>";
        } else {
            // Muestra un error en la consola en caso de fallo
            $error = mysqli_error($conexion);
            echo "<script>console.log('¡Ups ha ocurrido un error: $error!');</script>";
        }
    } else {
        // Si los campos no están completos
        echo "<script>console.log('¡Por favor complete los campos!');</script>";
    }
}
?>
