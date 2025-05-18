<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$media = ($nota1 + $nota2)/2;
if($media>9 && $media<10){
    echo"APROVADO, nota A, com a media de: $media";
}else if($media >7.5 && $media< 9){
    echo"APROVADO, Nota B, com a media de: $media";
}else if($media>6 && $media <7.5){
echo" APROVADO, NOta C, com a media de: $media";
}else if($media >4&& $media< 6){
    echo"REPROVADO, NOta D, com a media de: $media";
}else if($media >0&& $media< 4){
    echo" REPROVADO, NOta E, com a media de: $media";
}

?>