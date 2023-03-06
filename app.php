<?php
// Conexión a la base de datos
$host = 'mydb.xxxxxxxxxxx.us-west-2.rds.amazonaws.com';
$dbname = 'my-db-instance';
$username = 'myuser';
$password = 'mypassword';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Consulta para obtener algunos datos de la tabla 'mytable'
    $stmt = $dbh->prepare("SELECT name, email FROM mytable");
    $stmt->execute();
    // Imprimir los resultados
    while ($row = $stmt->fetch()) {
        echo $row['name'] . " - " . $row['email'] . "<br/>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}
?>