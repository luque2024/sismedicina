<?php
// Incluir el archivo de configuración para la conexión
include '../app/config.php';

// Recibir datos del formulario de roles
$nombre_rol = $_POST['nombre_rol'];
$estado = $_POST['estado'];

// Preparar la consulta de inserción usando una consulta preparada para mayor seguridad
$sql = "INSERT INTO roles (nombre_rol, fyh_creacion, fyh_actualizacion, estado) 
        VALUES (?, NOW(), NOW(), ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nombre_rol, $estado);

// Ejecutar la consulta y verificar el resultado
if ($stmt->execute()) {
    echo "Nuevo rol agregado correctamente";
} else {
    echo "Error al agregar el rol: " . $stmt->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>
