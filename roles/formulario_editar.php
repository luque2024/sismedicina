<?php
// Supongamos que se pasa el id_rol a través de GET para identificar el rol a editar
if (isset($_GET['id_rol'])) {
    $id_rol = $_GET['id_rol'];
    
    // Conectar a la base de datos
    include('../app/config.php'); // Incluye el archivo de conexión

    // Consulta para obtener los datos del rol
    $sql = "SELECT * FROM roles WHERE id_rol = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_rol);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $rol = $resultado->fetch_assoc();
    } else {
        echo "Rol no encontrado.";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Rol</title>
</head>
<body>
    <h2>Editar Rol</h2>
    <form action="editar_rol.php" method="POST">
        <input type="hidden" name="id_rol" value="<?php echo $rol['id_rol']; ?>">

        <label for="nombre_rol">Nombre del Rol:</label>
        <input type="text" id="nombre_rol" name="nombre_rol" value="<?php echo $rol['nombre_rol']; ?>" required><br>

        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
            <option value="activo" <?php if ($rol['estado'] == 'activo') echo 'selected'; ?>>Activo</option>
            <option value="inactivo" <?php if ($rol['estado'] == 'inactivo') echo 'selected'; ?>>Inactivo</option>
        </select><br>

        <label for="fyh_actualizacion">Fecha de Actualización:</label>
        <input type="datetime-local" id="fyh_actualizacion" name="fyh_actualizacion" value="<?php echo date('Y-m-d\TH:i', strtotime($rol['fyh_actualizacion'])); ?>" required><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
