<?php
// Incluir el archivo de configuración para la conexión a la base de datos
include ('../app/config.php');

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hashear la contraseña (opcional pero recomendado)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Preparar la consulta SQL
    $sql = "INSERT INTO usuarios (nombre, cargo, email, password) VALUES (?, ?, ?, ?)";

    // Crear una conexión a la base de datos
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Comprobar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar la declaración
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros
    $stmt->bind_param("ssss", $nombre, $cargo, $email, $hashed_password);

    // Ejecutar la declaración
    if ($stmt->execute()) {
        echo "Usuario creado con éxito.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
}
?>