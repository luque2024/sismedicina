<?php
// Conexión a la base de datos
include '../app/config.php';

// Obtener los roles de la base de datos
$query = "SELECT id_rol, nombre_rol FROM roles WHERE estado = 'activo'";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Crear Usuario</h2>
    <form action="guardar_usuario.php" method="POST">
        <!-- rol_id -->
        <div class="mb-3">
            <label for="rol_id" class="form-label">Rol</label>
            <select class="form-control" id="rol_id" name="rol_id" required>
                <?php
                // Obtener roles desde la base de datos
                $query = "SELECT id_rol, nombre_rol FROM roles WHERE estado = 'activo'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['id_rol'] . "'>" . $row['nombre_rol'] . "</option>";
                }
                ?>
            </select>
        </div>

        <!-- email -->
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- password -->
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <!-- Datos de persona -->
        <h4>Datos de Persona</h4>
        <!-- nombres -->
        <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" required>
        </div>

        <!-- apellidos -->
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        </div>

        <!-- ci -->
        <div class="mb-3">
            <label for="ci" class="form-label">Cédula de Identidad</label>
            <input type="text" class="form-control" id="ci" name="ci" required>
        </div>

        <!-- fecha_nacimiento -->
        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>

        <!-- profesion -->
        <div class="mb-3">
            <label for="profesion" class="form-label">Profesión</label>
            <input type="text" class="form-control" id="profesion" name="profesion" required>
        </div>

        <!-- direccion -->
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>

        <!-- celular -->
        <div class="mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" required>
        </div>

        <!-- fyh_creacion -->
        <div class="mb-3">
            <label for="fyh_creacion" class="form-label">Fecha y Hora de Creación</label>
            <input type="datetime-local" class="form-control" id="fyh_creacion" name="fyh_creacion" required>
        </div>

        <!-- fyh_actualizacion -->
        <div class="mb-3">
            <label for="fyh_actualizacion" class="form-label">Fecha y Hora de Actualización</label>
            <input type="datetime-local" class="form-control" id="fyh_actualizacion" name="fyh_actualizacion" required>
        </div>

        <!-- estado -->
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
