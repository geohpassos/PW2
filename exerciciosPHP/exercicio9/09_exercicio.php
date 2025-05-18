<?php
$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];
$num3 = $_POST["numero3"];

if ($num1 < $num2 && $num1 < $num3 && $num2 > $num1 && $num2 < $num3 && $num3 > $num1 && $num3 > $num2) {
    echo"$num3, $num2, $num1";
} else if ($num1 < $num2 && $num1 < $num3 && $num3 > $num1 && $num3 < $num2 && $num2 > $num1 && $num2 > $num3) {
        echo"$num2, $num3, $num1";
} else if ($num2 < $num1 && $num2 < $num3 && $num1 > $num2 && $num1 < $num3 && $num3 > $num2 && $num3 > $num1) {
        echo"$num3, $num1, $num2";
} else if ($num2 < $num1 && $num2 < $num3 && $num3 > $num2 && $num3 < $num1 && $num1 > $num2 && $num1 > $num3) {
        echo"$num1, $num3, $num2";
} else if ($num3 < $num1 && $num3 < $num2 && $num2 > $num3 && $num2 < $num1 && $num1 > $num2 && $num1 > $num3) {
        echo"$num1, $num2, $num3";
}   {
    echo"$num2, $num1, $num3";
};

?>