<?php
$ganhaHora = $_POST["GanhaHora"];
$mes = $_POST["mes"];
$salarioBruto=($ganhaHora *$mes);
$salarioLiquido;

if($salarioBruto<1500){
 $desconto = ($salarioBruto*0.075);
 echo"O desconto é $desconto";
 $salarioLiquido = $salarioBruto - $desconto;
 echo"O salario líquido atual é R$ $salarioLiquido";
}elseif($salarioBruto<2259.20){
    echo"Você está isento";
}elseif($salarioBruto>1500 && $salarioBruto<2500){
    $desconto = $salarioBruto*0.15;
    echo "O desconto é de $desconto";
    $salarioLiquido = $salarioBruto - $desconto;
    echo "O salario atual R$ $salarioLiquido";
}elseif($salario>2500){
    $desconto = $salarioBruto*0.224;
    echo "O desconto é de $desconto";
    $salarioLiquido = $salarioBruto - $desconto;
    echo "O salario atual e de $salarioLiquido";
}



?>