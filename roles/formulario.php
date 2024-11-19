<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Rol</title>
    <!-- Puedes agregar aquí tu CSS para dar estilo al formulario -->
</head>
<body>
    <h2>Agregar Nuevo Rol</h2>

    <form action="procesar_rol.php" method="POST">
        <!-- Campo para el nombre del rol -->
        <label for="nombre_rol">Nombre del Rol:</label>
        <input type="text" id="nombre_rol" name="nombre_rol" required>
        
        <br><br>

        <!-- Selección del estado -->
        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
        
        <br><br>

        <!-- Botón para enviar el formulario -->
        <button type="submit">Agregar Rol</button>
    </form>
</body>
</html>
