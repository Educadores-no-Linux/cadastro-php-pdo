<?php
$servername = "localhost";
$username = "admin";
$password = "root";
$dbname = "clientes";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida";
} catch(PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
