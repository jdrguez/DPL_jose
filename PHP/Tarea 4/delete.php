<?php
$servername = "localhost";
$username = "Jose";
$password = "1234";
$dbname = "mi_base_de_datos";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar: " . $conn->error;
    }

    $conn->close();
}
?>