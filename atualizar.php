<?php
require_once "conexao.php";


if(isset($_POST['cadastro_id'])){
    var_dump($_POST['cadastro_id']);
    $cadastro_id = $_POST['cadastro_id'];
    $novo_nome = $_POST['novo_nome'];
    $novo_email = $_POST['novo_email'];
    $novo_telefone = $_POST['novo_telefone'];

    $sql = "UPDATE cadastros SET nome = :novo_nome, email = :novo_email, telefone = :novo_telefone WHERE id = :cadastro_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cadastro_id', $cadastro_id, PDO::PARAM_INT);
    $stmt->bindParam(':novo_nome', $novo_nome, PDO::PARAM_STR);
    $stmt->bindParam(':novo_email', $novo_email, PDO::PARAM_STR);
    $stmt->bindParam(':novo_telefone', $novo_telefone, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "Cliente atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o cliente.";
    }
}
?>
