<?php
$primeiroNumero = $_POST["primeiroNumero"];
$segundoNumero = $_POST["segundoNumero"];
$terceiroNumero = $_POST["terceiroNumero"];
 if($primeiroNumero>$segundoNumero && $primeiroNumero>$terceiroNumero){
    echo "O número maior é o primeiro número digitado, sendo ele: $primeiroNumero ";
}else if($segundoNumero>$primeiroNumero && $segundoNumero>$terceiroNumero){
    echo "O número maior é o segundo número digitado, sendo ele: $segundoNumero";
}elseif($terceiroNumero>$primeiroNumero && $terceiroNumero>$segundoNumero){
    echo "O número maior é o terceiro número digitado, sendo ele: $terceiroNumero";
}
else{
    echo "Todos os números digitados tem o mesmo valor de $tercceiroNumero, nenhum é maior que o outro";
}
if($primeiroNumero<$segundoNumero && $primeiroNumero<$terceiroNumero){
    echo "O número menor é o primeiro número digitado, sendo ele: $primeiroNumero";
}else if($segundoNumero<$primeiroNumero && $segundoNumero<$terceiroNumero){
    echo "O número menor é o segundo número digitado, sendo ele: $segundoNumero";
}elseif($terceiroNumero<$primeiroNumero && $terceiroNumero<$segundoNumero){
    echo "O número menor é o terceiro número digitado, sendo ele: $terceiroNumero";
}
else{
    echo "Todos os números digitados tem o mesmo valor de $tercceiroNumero, nenhum é menor que o outro";
}
?>