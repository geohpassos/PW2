<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$media = ($nota1 + $nota2)/2;
if($media ==10){
    echo"Aprovado com Distinção, sua nota foi: $media";
}else if($media >=7){
    echo"Aprovado, sua nota de média foi: $media";
}else if($media<7){
echo "Reprovado, sua nota de média foi: $media";
}else if($media >10){
    echo"Nota final invalida";
}

?>