<?php
// Conexión a la base de datos
$host = 'deploywithtemplatelaunch-mydbinstance-e0l2shx56fuz.cgu0ljnmanau.us-east-1.rds.amazonaws.com';
$dbname = 'template';
$username = 'username';
$password = 'MyPassword';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Inserción de datos en la tabla 'mytable'
    $stmt = $dbh->prepare("CREATE TABLE mytable (
                                                id INT(11)AUTO_INCREMENT PRIMARY KEY,
                                                name VARCHAR(50) NOT NULL )");
    $stmt->execute();

    $stmt = $dbh->prepare("INSERT INTO mytable (name) VALUES ('Juan')");
    $stmt->execute();

    $stmt = $dbh->prepare("SELECT *  FROM mytable");
    $stmt->execute();

    // Imprimir los resultados
    while ($row = $stmt->fetch()) {
        echo "<h1>" . $row['name'] . "</h1>";
    }
   
    $stmt = $dbh->prepare("DROP TABLE mytable");
    $stmt->execute();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}
?>