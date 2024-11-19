<?php
// Configuración de conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sismedicina";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se envió el ID del rol
if (isset($_GET['id'])) {
    $id_rol = intval($_GET['id']);

    // Consulta para eliminar el rol
    $sql = "DELETE FROM roles WHERE id_rol = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_rol);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $conn->error]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "error" => "ID no proporcionado"]);
}

$conn->close();
?>
