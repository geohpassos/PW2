<?php

    class Conexao{
        private $host;
        private $usuario;

        private $senha;
        private $nomeBanco;
        

        //Costrutor da class
        //é um metodo que utilizamos para inicializar a class.
        // sempre tem o mesmo nome da classe e não possui return e tambem não é void.
        //Chamamos um construtor quando instanciamos a classe, atraves do new.
        public function __construct(
            $host = "localhost",
            $usuario = "root",
            $senha = "",
            $nomeBanco = "autopecas_tanaka"
        ){
            $this->host = $host;
            $this->usuario = $usuario;
            $this->senha = $senha;
            $this->nomeBanco = $nomeBanco;

            $this->connect();
        }

        public function connect(){
            try{
                //criar um novo objeto que conecta no banco de dados
                //vamos utilizar o PDO para isso, passando as variaveis (construtor) acima como parametro.
            $dsn = "mysql:host={$this->host}; dbname={$this->nomeBanco}; charset=utf8";
            $this-> conn = new PDO($dsn, $this->usuario, $this->senha);
            //define como o pdo vai tratar o erro
            //no caso, vai lançar uma exceção, que posteriormente será tratada do catch
            $this-> conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
            return $this->conn;
            }catch(PDOException $e){
                die("Erro ao conectar com o banco de dados" .$e->getMessage());
            }
           
        }
        
    }
?>