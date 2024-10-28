<?php
include ('config/config.php'); // Asegúrate de que la ruta sea correcta

// Ahora puedes usar $conn para hacer consultas a la base de datos
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Usuario: " . $row["username"];
    }
} else {
    echo "0 resultados";
}
?>