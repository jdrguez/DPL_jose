<?php
$servername = "sql311.infinityfree.com"; // El servidor somos nosotros es el local
$username = "if0_36601523"; // El usuario
$password = "s3Kntre6cYpU"; // La contraseña para acceder al administrador. Esto no es seguro hacerlo pero no pasa nada si es solo una prueba
$dbname = "if0_36601523_mi_base_datos"; // Nombre de la base de datos


$conn = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET name='$nombre', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar: " . $conn->error;
    }

    $conn->close();
}
?>