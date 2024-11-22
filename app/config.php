<?php
// Configuración de la base de datos
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'sismedicina'); // Cambia esto al nombre de tu base de datos
define ('APP_NAME','Sistema de medicina');
define ('APP_url','http://localhost/proy-medicina');
define ('KEY_API_MAPS','');
// Crear conexión
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
//echo "conexion exitosa";
// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$fecha_actual = date('Y-m-d');
$dia_actual = date('d');
$mes_actual = date('m');
$ano_actual = date('Y');
?>