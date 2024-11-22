<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreRol = $_POST['nombre_rol'];
    $estado = $_POST['estado'];

    // Conexión a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'sismedicina');

    if ($conexion->connect_error) {
        die('Error de conexión: ' . $conexion->connect_error);
    }

    // Insertar datos en la tabla
    $sql = "INSERT INTO roles (nombre_rol, estado) VALUES ('$nombreRol', '$estado')";
    if ($conexion->query($sql) === TRUE) {
        echo "Rol creado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    $conexion->close();
}
?>
