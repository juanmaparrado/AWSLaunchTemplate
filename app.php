<?php
// Conexión a la base de datos
$host = 'testnew-mydbinstance-gppjc9ri2gnw.cgu0ljnmanau.us-east-1.rds.amazonaws.com';
$dbname = 'template';
$username = 'username';
$password = 'MyPassword';

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