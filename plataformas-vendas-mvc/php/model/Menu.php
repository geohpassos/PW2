<?php
    class Menu{
        private $conn;
        
        public function __construct($db){
            $this->conn = $db;
        }

        //método que verifica se os menus e submenus estão conectados no banco
        public function getMenuCompleto(){
            $sql = "SELECT c.nome AS categoria, s.nome AS subcategoria
            FROM categoria c
            JOIN subcategoria s ON s.id_categoria = c.id
            ORDER BY c.nome, s.nome";

            $result = $this->conn-> query($sql);

            if($result === false){
                die("Erro na Consulta SQL " . $this->conn->error);
            }
            $menu = [];

            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $categoria = $row['categoria'];
                $subcategoria = $row['subcategoria'];
                $menu[$categoria] [] = $subcategoria;
            }
            return $menu;
        }
    }

?>