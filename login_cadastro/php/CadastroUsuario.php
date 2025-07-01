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
        echo' <!DOCTYPE html>
    <html>
    <head>
        <title>Cadastro</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script type="text/javascript">
            Swal.fire({
                title: "Cadastro Realizado",
                text: "Cadastro concluído com Sucesso.",
                icon: "success",
                confirmButtonText: "Login",
            }).then(function() {
                window.location = "http://localhost/login_cadastro/html/index.html";
            });
        </script>
    </body>
    </html>';
    }catch(PDOException $e){
        echo ' <!DOCTYPE html>
    <html>
    <head>
        <title>Cadastro</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script type="text/javascript">
              Swal.fire({
            title: "Erro!",
            text: "Erro na finalização",
            icon: "error",
            confirmButtonText: "Tente Novamente"

        })
        </script>
    </body>
    </html>'.$e ->getMessage();

    }
    
}else{
    echo'<p style="color: red">PREENCHA TODOS OS CAMPOS!!!!</p>';
}
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>