<?php
$genero = $_POST["generos"];

if ($genero == "F" || $genero == "f") {
    echo"O seu gênero é $genero--(FEMININO)";
}else if($genero=="M" || $genero =="m") {

    echo"O seu gênero é $genero--(MASCULINO)";
}else{
    echo "Gênero informado invalido";
}
    

?>