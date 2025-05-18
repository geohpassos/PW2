<?php
$periodo = $_POST ["periodo"];
if ($periodo == "m" || $periodo == "M") {
    echo"Bom dia ";
}else if($periodo=="v" || $periodo== "V") {
    echo "Boa Tarde";
}else if($periodo== "n"|| $periodo== "N") {
    echo "Boa Noite";
}else{
    echo"Périodo de aula invalida";
}
?>