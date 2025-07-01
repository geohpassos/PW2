<?php

require_once 'Conexao.php'; //conecta no banco

$delete = $_POST["delete"];

if (!empty($delete)) {

    $sql = "DELETE FROM carrinho WHERE id = :id";

    //preparar a remocao de dados no banco
    $requisicao = $conexao->prepare($sql);

    //vamos pegar o email digitado no form e passar por parametro
    //isso fara que a consulta na variavel $sql, use o email que
    //o usuario digitou, o bindParam serve para evitar SQLInjection
    //e uma protecao da aplicacao no banco de dados

    $requisicao->bindParam('delete', $delete);

    try {
        $requisicao->execute();
        if ($requisicao->rowCount() > 0) {
            echo "Produto deletado com sucesso";
        } else {
            echo "Produto nao existe!!";
        }
    } catch (PDOException $e) {
        echo "Erro ao deletar: " . $e->getMessage();
    }
} 