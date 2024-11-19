<?php
// Obtener los parámetros
$id_rol = $_GET['id'];
$estado = $_GET['estado'];

// Conexión a la base de datos (ajusta según tu configuración)
$mysqli = new mysqli("localhost", "root", "", "sismedicina");

if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

// Actualizar el estado en la base de datos
$sql = "UPDATE roles SET estado = ? WHERE id_rol = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ii", $estado, $id_rol);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

$stmt->close();
$mysqli->close();
?>
