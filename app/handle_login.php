<?php
session_start();
include ('config.php'); // Asegúrate de que la ruta sea correcta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Aquí puedes agregar la lógica para verificar las credenciales
    // Ejemplo simple (debes implementar la verificación real en tu base de datos):
    if ($email === 'tu_email@example.com' && $password === 'tu_password') {
        // Guardar información del usuario en la sesión
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        // Redireccionar a la carpeta config o a la página deseada
        header("Location: ../pages/dashboard.php"); // Cambia esto según tu estructura
        exit;
    } else {
        echo "Credenciales incorrectas.";
    }
}
?>