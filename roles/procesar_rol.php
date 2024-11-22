<?php
// Incluir el archivo de configuración para la conexión
include '../app/config.php';

// Verificar que los datos del formulario estén presentes
if (isset($_POST['nombre_rol']) && isset($_POST['estado'])) {
    $nombre_rol = trim($_POST['nombre_rol']);
    $estado = $_POST['estado'];

    // Validar que el estado sea 'activo' o 'inactivo' antes de convertirlo
    if ($estado !== 'activo' && $estado !== 'inactivo') {
        echo '<script type="text/javascript">
                 alertError("Valor de estado inválido");
               </script>';
        exit;
    }

    // Asegurarse de que el valor de estado sea un número (1 o 0)
    $estado = ($estado === 'activo') ? 1 : 0;

    // Preparar la consulta de inserción usando una consulta preparada para mayor seguridad
    $sql = "INSERT INTO roles (nombre_rol, fyh_creacion, fyh_actualizacion, estado) 
            VALUES (?, NOW(), NOW(), ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $nombre_rol, $estado); // El tipo 's' es para string, 'i' es para int

    // Ejecutar la consulta y verificar el resultado
    if ($stmt->execute()) {
        echo '<script type="text/javascript">
                 alertSuccess("Nuevo rol agregado correctamente");
               </script>';
    } else {
        // Mostrar más detalles en caso de error
        $error = $stmt->error;
        echo '<script type="text/javascript">
                 alertError("Error al agregar el rol: ' . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . '");
               </script>';
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
} else {
    echo '<script type="text/javascript">
             alertError("Faltan datos en el formulario");
           </script>';
    exit;
}
?>

<!-- Aquí van los scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
    // Función para mostrar un mensaje de éxito
    function alertSuccess(message) {
        $('body').append('<div class="alert alert-success alert-dismissible fade show" role="alert">' + message + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    }

    // Función para mostrar un mensaje de error
    function alertError(message) {
        $('body').append('<div class="alert alert-danger alert-dismissible fade show" role="alert">' + message + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    }
</script>
