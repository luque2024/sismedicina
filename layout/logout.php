<?php
session_start(); // Inicia la sesión

// Destruye todas las variables de sesión
$_SESSION = array();

// Si se desea, destruye la sesión
if (session_id() != "" || isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/'); // Borra la cookie de sesión
}

// Finalmente, destruye la sesión
session_destroy();

// Redirige al usuario a la página de inicio de sesión
header("Location: ../login/index.php");
exit();
?>