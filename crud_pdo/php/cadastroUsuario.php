<?php

    require_once 'Conexao.php';


    $nome = $_POST['nomeFormulario'];
    $email = $_POST['emailFormulario'];
    $senha = $_POST['senhaFormulario'];


    if(!empty($email) && !empty($nome) && !empty($senha)){
        //pegamos a senha digitada pelo usuario e realizamos uma criptografia nela
        //com base nisso, vamos armazenar o HASH(criptografia) no banco de dados.
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        //instrução DML
        $sql = "INSERT INTO usuarios (nome,email,senha) VALUES (:nome,:email, :senha)";

        //preparar a inserção de dados no banco
        $requisicao = $conexao->prepare($sql);

        $requisicao->bindParam(':nome',$nome);
        $requisicao->bindParam(':email',$email);
        $requisicao->bindParam(':senha',$senhaHash);

        try{
            $requisicao->execute();
            echo 'Usuário cadastrado com Sucesso!';

        }catch(PDOException $e){
            echo 'Erro ao Cadastrar: ' . $e->getMessage();
        }
    }else{
        echo '<p style="color:red"> PREENCHA TODOS OS CAMPOS!</p>';
    }

?>