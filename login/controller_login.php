<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    .custom-font {
        font-family: 'Arial', sans-serif; /* Cambia 'Arial' por la fuente que prefieras */
    }
</style>
<body>
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
        $stmt = $conn->prepare("SELECT id_usuario, password, estado, rol_id FROM usuarios WHERE email = ? AND estado = 'activo'");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica si el usuario existe
        if ($result->num_rows === 1) {
            $usuario = $result->fetch_assoc();

            // Verifica la contraseña
            if (password_verify($password, $usuario['password'])) {
                // Almacena información en la sesión
                $_SESSION['user_id'] = $usuario['id_usuario']; // Guarda el id_usuario en la sesión

                // Consulta para obtener los apellidos y nombres desde la tabla personas
                $stmt_persona = $conn->prepare("SELECT nombres, apellidos FROM personas WHERE id_persona = ?");
                $stmt_persona->bind_param("i", $usuario['id_usuario']);
                $stmt_persona->execute();
                $result_persona = $stmt_persona->get_result();

                if ($result_persona->num_rows === 1) {
                    $persona = $result_persona->fetch_assoc();
                    $_SESSION['user_nombre'] = $persona['nombres'] . " " . $persona['apellidos']; // Nombre completo del usuario

                    // Consulta adicional para obtener el rol desde la tabla roles
                    $stmt_rol = $conn->prepare("SELECT nombre_rol FROM roles WHERE id_rol = ?");
                    $stmt_rol->bind_param("i", $usuario['rol_id']);
                    $stmt_rol->execute();
                    $result_rol = $stmt_rol->get_result();

                    if ($result_rol->num_rows === 1) {
                        $rol = $result_rol->fetch_assoc();
                        $_SESSION['user_rol'] = $rol['nombre_rol']; // Guarda el nombre del rol

                        // Alerta de bienvenida con nombre y rol del usuario
                        echo "<script>
                            Swal.fire({
                                icon: 'success',
                                title: '¡Bienvenido al sistema " . $_SESSION['user_nombre'] . "!',
                                text: '" . $_SESSION['user_rol'] . "',
                                showConfirmButton: false,
                                timer: 2000,
                                customClass: {
                                    title: 'custom-font', // Aplica la clase a la etiqueta del título
                                    text: 'custom-font'    // Aplica la clase al texto
                                }
                            }).then(() => {
                                window.location.href = '../layout/parte1.php';
                            });
                        </script>";
                    }
                }
                exit();
            } else {
                // Contraseña incorrecta
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Contraseña incorrecta',
                        text: 'Por favor, verifica tu contraseña.',
                        confirmButtonText: 'Inténtalo de nuevo',
                        customClass: {
                            title: 'custom-font',
                            content: 'custom-font'
                        }
                    }).then(() => {
                        window.location.href = 'index.php';
                    });
                </script>";
            }
        } else {
            // Usuario no encontrado o no está activo
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Usuario no encontrado',
                    text: 'El email ingresado no está registrado o está inactivo.',
                    confirmButtonText: 'Regresar',
                    customClass: {
                        title: 'custom-font',
                        content: 'custom-font'
                    }
                }).then(() => {
                    window.location.href = 'index.php';
                });
            </script>";
        }

        // Cierra las declaraciones y la conexión
        $stmt->close();
        if (isset($stmt_persona)) $stmt_persona->close();
        if (isset($stmt_rol)) $stmt_rol->close();
        $conn->close();
    } else {
        echo "Método de solicitud no permitido.";
    }
    ?>
</body>
