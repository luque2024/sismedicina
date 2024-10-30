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
        $stmt = $conn->prepare("SELECT id, nombre, password FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica si el usuario existe
        if ($result->num_rows === 1) {
            $usuario = $result->fetch_assoc();

            // Verifica la contraseña
            if (password_verify($password, $usuario['password'])) {
                // Almacena información en la sesión
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['user_nombre'] = $usuario['nombre'];
                // Alerta de bienvenida y redirección
                echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Bienvenido al sistema',
                    text: 'Has iniciado sesión correctamente!',
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
                        title: 'custom-font', // Aplica la clase al título
                        content: 'custom-font' // Aplica la clase al texto del contenido
                    }
                }).then(() => {
                    window.location.href = 'index.php';
                });
            </script>";
            }
        } else {
            // Usuario no encontrado
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Usuario no encontrado',
                text: 'El email ingresado no está registrado.',
                confirmButtonText: 'Regresar',
                customClass: {
                    title: 'custom-font', // Aplica la clase al título
                    content: 'custom-font' // Aplica la clase al texto del contenido
                }
            }).then(() => {
                window.location.href = 'index.php';
            });
        </script>";
        }

        // Cierra la conexión
        $stmt->close();
        $conn->close();
    } else {
        echo "Método de solicitud no permitido.";
    }
    ?>
</body>
