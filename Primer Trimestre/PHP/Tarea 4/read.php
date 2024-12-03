<?php
$servername = "sql311.infinityfree.com"; // El servidor somos nosotros es el local
$username = "if0_36601523"; // El usuario
$password = "s3Kntre6cYpU"; // La contraseña para acceder al administrador. Esto no es seguro hacerlo pero no pasa nada si es solo una prueba
$dbname = "if0_36601523_mi_base_datos"; // Nombre de la base de datos


$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Contraseña</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay registros en la tabla";
}

$conn->close();
?>