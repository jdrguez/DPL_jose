<?php
$servername = "localhost";
$username = "Jose";
$password = "1234";
$dbname = "mi_base_de_datos";

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