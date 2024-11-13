<?php
// Supongamos que se pasa el id_rol a través de GET para identificar el rol a editar
if (isset($_GET['id_rol'])) {
    $id_rol = $_GET['id_rol'];

    // Conectar a la base de datos
    include('../app/conexion.php'); // Incluye el archivo de conexión

    // Consulta para obtener los datos del rol
    $sql = "SELECT * FROM roles WHERE id_rol = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_rol);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Verificar si el rol existe en la base de datos
    if ($resultado->num_rows > 0) {
        $rol = $resultado->fetch_assoc(); // Asignar los datos del rol a la variable
    } else {
        // Si no se encuentra el rol, mostrar un mensaje de error
        echo "Rol no encontrado.";
        exit; // Detener la ejecución
    }
} else {
    // Si no se pasa el id_rol en la URL, mostrar un mensaje de error
    echo "ID de rol no proporcionado.";
    exit; // Detener la ejecución
}
?>
