<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar </title>
</head>
<body>
    <h2>Atualizando o cadastro <?= $id ?></h2>
    <form method="post" action="atualizar.php">
        <input type="hidden" name="cadastro_id" value="<?=$id?>">
        <!-- ID do Cliente: <input type="text" name="cadastro_id"> <br> -->
        Novo Nome: <input type="text" name="novo_nome"> <br>
        Novo Email: <input type="text" name="novo_email"> <br>
        Novo Telefone: <input type="text" name="novo_telefone"> <br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
