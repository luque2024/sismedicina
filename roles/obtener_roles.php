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

// Consulta para obtener los roles
$sql = "SELECT id_rol, nombre_rol, fyh_creacion, fyh_actualizacion, estado FROM roles";
$result = $conn->query($sql);

$roles = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $roles[] = $row;
    }
}

// Devolver datos en formato JSON
echo json_encode($roles);

$conn->close();
?>