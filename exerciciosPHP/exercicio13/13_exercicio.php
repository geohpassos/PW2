<?php  
$semana = $_POST["semana"];

if ($semana == "1"){
    echo"$semana - Domingo";
}
else if ($semana == "2"){
    echo"$semana - Segunda";
}
else if ($semana == "3"){
    echo"$semana - Terça-Feira";
}
else if ($semana == "4"){
    echo"$semana - Quarta- Feira";
}
else if ($semana == "5"){
    echo"$semana - Quinta-Feira";
}
else if ($$semana == "6"){
    echo"$semana - Sexta- Feira";
}
else if ($semana == "7"){
    echo"$semana - Sabado";
}
else{
    echo"Valor invalido";
}

?>