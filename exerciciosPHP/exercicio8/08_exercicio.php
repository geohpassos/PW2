<?php
$produto1 = $_POST["Produto1"];
$produto2 = $_POST["Produto2"];
$produto3 = $_POST["Produto3"]; 

if ($produto1<$produto2 && $produto1<$produto3){
    echo"O primeiro produto que você deve comprar no preço de $produto1 reais";
}else if ($produto2<$produto1 && $produto2<$produto3){
    echo"O segundo produto que você deve comprar no preço de $produto2 reais";
}else if ($produto3<$produto1 && $produto3<$produto2){
    echo"O terceiro produto que você deve comprar no preço de $produto3 reais";
}else{
    echo "Poderá comprar o produto de preferencia todos os produtos estão no preço de R$ $produto2 reais";
}

?>