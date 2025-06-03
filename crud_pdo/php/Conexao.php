<?php
//declarando as variáveis que vamos utilizar na conexao
$host = 'localhost';
$nomeBanco = 'crud_pdo';
$usuario = 'root';
$senha = '';

//criar um novo objeto que conecta no banco de dados
//vamos utilizar PDO para isso,passando as variáveis acima como parametro.
try{
    $conexao = new PDO(
        "mysql:host=$host; dbname = $nomeBanco;charset=UTF8",
        $usuario,
        $senha
    );
    //Define como o PDO vai tratar o erro,
    //  no caso, vai lançar uma exceção, 
    // que posteriormente será tratada no CATCH  
    $conexao -> setAttribute(PDO::ATTR_ERRMODE,
     PDO::ERRMODE_EXCEPTION);
     echo "Conexão realizada com Sucesso!! <br><hr><br>";

}catch(PDOException $e){
    echo "ERRO: " . $e->getMessage();
}
?>