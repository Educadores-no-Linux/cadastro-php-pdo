<?php

require_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO cadastros (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

if ($conn->exec($sql)){
    echo "Cliente cadastrado";
} else {
    echo "Erro, não foi cadastrado o cliente";
}