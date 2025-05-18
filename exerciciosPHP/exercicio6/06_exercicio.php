<?php
$numeroP = $_POST["numero1"];
$numeroS= $_POST["numero2"];
$numeroT = $_POST["numero3"];

if($numeroP>$numeroS && $numeroP>$numeroT){
    echo "O número maior é o primeiro número digitado, sendo ele: $numeroP";
}else if($numeroS>$numeroP && $numeroS>$numeroT){
    echo "O número maior é o segundo número digitado, sendo ele: $numeroS";
}elseif($numeroT>$numeroP && $numeroT>$numeroS){
    echo "O número maior é o terceiro número digitado, sendo ele: $numeroT";
}
else{
    echo "Todos os números digitados tem o mesmo valor de $numeroS, nenhum é maior que o outro";
}

?>