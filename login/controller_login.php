<?php
session_start(); // Iniciar sesión para manejar la sesión del usuario

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $conn = new mysqli('localhost', 'root', '', 'sismedicina');

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recibir datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepara la consulta para obtener el usuario
    $stmt = $conn->prepare("SELECT id, nombre, password FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica si el usuario existe
    if ($result->num_rows === 1) {
        $usuario = $result->fetch_assoc();
        
        // Verifica la contraseña
        if (password_verify($password, $usuario['password'])) {
            // Almacena información en la sesión
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_nombre'] = $usuario['nombre'];
      

            // Redirigir a la página de inicio o dashboard
            header("Location: ../layout/parte1.php"); // Cambia esto a la ruta deseada
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    // Cierra la conexión
    $stmt->close();
    $conn->close();
} else {
    echo "Método de solicitud no permitido.";
}
?>
