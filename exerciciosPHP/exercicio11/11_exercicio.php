<?php
$salario = $_POST ["salario"];


if ($salario <280) {
    $aumento = ($salario*20);
    $novoSalario = ($salario + $aumento);
    echo"O salario antes do aumento R$ $salario ";
    echo"O  percentual de aumento foi de 20%";
    echo "O valor do adicionamento foi R$ $aumento";
    echo "O salario atual R$ $novoSalario";
} else if ($salario >280 && $salario<700) {
    $aumento =($salario*0.15);
    $novoSalario = ($salario + $aumento);
    echo"O salario antes do aumento R$ $salario";
    echo"O  percentual de aumento foi de 15%";
    echo "O valor do adicionamento foi R$ $aumento";
    echo "O salario atual R$ $novoSalario";
}
else if ($salario >700 && $salario<1500) {
    $aumento = ($salario*0.10);
    $novoSalario = ($salario + $aumento);
    echo"O salario antes do aumento R$ $salario";
    echo"O  percentual de aumento foi de 10%";
    echo "O valor do adicionamento foi R$ $aumento";
    echo "O salario atual R$ $novoSalario";
}else if ($salario >= 1500) {
    $aumento=($salario*0.5);
    $novoSalario=($salario + $aumento);
    echo"O salario antes do aumento R$ $salario";
    echo"O  percentual de aumento foi de 05%";
    echo "O valor do adicionamento foi R$ $aumento";
    echo "O salario atual R$ $novoSalario";
}

?>