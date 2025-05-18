<?php
$numero1 = $_POST["num1"];
$numero2 = $_POST["num2"];

if($numero1>$numero2){
    echo "O primero número $numero1, é maior que o segundo número $numero2";
}else if($numero1 == $numero2){
    echo"Ambos os números sâo iguais, eles são o número: $numero1";
}else{
    echo"O segundo número $numero2, é maior que o primeiro número digitado $numero1";
}



?>
