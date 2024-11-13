<?php
// Incluir el archivo de configuración para la conexión a la base de datos
include ('../app/config.php');

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $rol_id = $_POST['rol_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fyh_creacion = $_POST['fyh_creacion'];
    $fyh_actualizacion = $_POST['fyh_actualizacion'];
    $estado = $_POST['estado'];

    // Datos de la persona
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $ci = $_POST['ci'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $profesion = $_POST['profesion'];
    $direccion = $_POST['direccion'];
    $celular = $_POST['celular'];

    // Hashear la contraseña (opcional pero recomendado)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Crear una conexión a la base de datos
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Comprobar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Iniciar la transacción para ambas inserciones
    $conn->begin_transaction();

    try {
        // 1. Insertar los datos de la persona
        $sql_persona = "INSERT INTO personas (nombres, apellidos, ci, fecha_nacimiento, profesion, direccion, celular, fyh_creacion, fyh_actualizacion, estado) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_persona = $conn->prepare($sql_persona);
        $stmt_persona->bind_param("ssssssssss", $nombres, $apellidos, $ci, $fecha_nacimiento, $profesion, $direccion, $celular, $fyh_creacion, $fyh_actualizacion, $estado);
        $stmt_persona->execute();
        $persona_id = $stmt_persona->insert_id; // Obtener el ID de la persona insertada
        echo "Persona insertada con ID: " . $persona_id . "<br>"; // Debug

        // 2. Insertar los datos del usuario
        $sql_usuario = "INSERT INTO usuarios (rol_id, email, password, fyh_creacion, fyh_actualizacion, estado) 
                        VALUES (?, ?, ?, ?, ?, ?)";
        $stmt_usuario = $conn->prepare($sql_usuario);
        $stmt_usuario->bind_param("isssss", $rol_id, $email, $hashed_password, $fyh_creacion, $fyh_actualizacion, $estado);
        $stmt_usuario->execute();
        $usuario_id = $stmt_usuario->insert_id; // Obtener el ID del usuario insertado
        echo "Usuario insertado con ID: " . $usuario_id . "<br>"; // Debug

        // 3. Actualizar la tabla personas para incluir el id_usuario
        if ($usuario_id && $persona_id) {
            $sql_update_persona = "UPDATE personas SET id_usuario = ? WHERE id_persona = ?";
            $stmt_update_persona = $conn->prepare($sql_update_persona);
            $stmt_update_persona->bind_param("ii", $usuario_id, $persona_id);
            $stmt_update_persona->execute();
            echo "Persona actualizada con ID de usuario: " . $usuario_id . "<br>"; // Debug
        } else {
            echo "Error: No se obtuvo un ID de usuario o persona válido. <br>";
        }

        // Confirmar la transacción
        $conn->commit();

        echo "Usuario y Persona creados con éxito.";

    } catch (Exception $e) {
        // Si algo falla, deshacer la transacción
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }

    // Cerrar la declaración y la conexión
    $stmt_persona->close();
    $stmt_usuario->close();
    $stmt_update_persona->close();
    $conn->close();
}
?>
