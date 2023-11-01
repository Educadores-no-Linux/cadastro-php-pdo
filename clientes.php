<?php
require_once "conexao.php";

$sql = "SELECT * FROM cadastros";
$result = $conn->query($sql);

if ($result->rowCount() > 0) {
    echo "<h2>Lista de Clientes:</h2>";
    echo "<ul>";
    while ($row = $result->fetch()) {
        echo "<li>" . $row['nome'] . " - " . $row['email'] . " - " . $row['telefone'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum cliente cadastrado.";
}
?>