<?php

require_once "conexao.php";

if(isset($_POST['cadstro_id'])){
    $cliente_id = $_POST['cadstro_id'];

   // echo $cliente_id;

   $sql = "DELETE FROM cadastros WHERE id = $cliente_id";

   $exec = $conn->prepare($sql);
   $exec->bindParam(':cliente_id', $cliente_id, PDO::PARAM_INT);

   if ($exec->execute()){
    echo "Cadastro removido";
   } else {
    echo "Erro ao excluir";
   }

}