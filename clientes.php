<?php
require_once "conexao.php";

$sql = "SELECT * FROM cadastros";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>

    <?php
    if ($result->rowCount() > 0) {
        echo "<h2>Lista de Clientes:</h2>";
        echo "<ul>";
        while ($row = $result->fetch()) {

            echo "<li>" . $row['nome'] . " - " . $row['email'] . " - " . $row['telefone'] . "<a href='edita.php?id=".$row['id'] ."'> editar </a>". "<form method='POST' action='delete.php'>".
            "<input type='hidden' name='cadstro_id' value='". $row['id']."'>
            <input type='submit' value='Excluir'>
        </form> </li>"
            ;

        }
        echo "</ul>";
    } else {
        echo "Nenhum cliente cadastrado.";
    }
?>
</body>
</html>