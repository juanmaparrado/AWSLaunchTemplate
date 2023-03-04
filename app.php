<?php
// Conexión a la base de datos
$host = 'mydbinstance.c8qjvj6nk1kd.us-east-1.rds.amazonaws.com';
$port = 3306;
$dbname = 'mydatabase';
$user = 'admin';
$password = 'mypassword';

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

// Consulta a la base de datos
$sql = 'SELECT * FROM mytable';

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los resultados
    while ($row = $result->fetch_assoc()) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Nombre: ' . $row['nombre'] . '<br>';
        echo 'Correo electrónico: ' . $row['correo'] . '<br>';
        echo '<br>';
    }
} else {
    echo 'No se encontraron resultados.';
}

$conn->close();
?>
