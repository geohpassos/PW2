<?php
$letra = $_POST["letra"];

if($letra == "A" || $letra == "a" || $letra == "E" || $letra == "e" || $letra == "I" || $letra == "i" || $letra == "O" || $letra == "o" || $letra =="U" || $letra =="u") {

    echo"A letra $letra, é uma vogal";
}else{
    echo "A letra $letra, é uma consoante";
}

?>