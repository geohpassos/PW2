<?php
require_once 'Conexao.php';

$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];

if(!empty($email) && !empty($telefone) && !empty($senha)){
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios(email,telefone,senha) VALUES
    (:email,:telefone,:senha)";

    $requisicao = $conexao -> prepare($sql);

    $requisicao->bindParam("email", $email);
    $requisicao->bindParam(":telefone", $telefone);
    $requisicao->bindParam(":senha",  $senha_hash);

    try{
        $requisicao->execute();
        echo"Usuario cadastrado com sucesso!";
    }catch(PDOException $e){
        echo"Erro ao cadastrar usuario" .$e ->getMessage();

    }
    
}else{
    echo'<p style="color: red">PREENCHA TODOS OS CAMPOS!!!!</p>';
}
?>