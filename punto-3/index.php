<?php
//DATOS DE ENTRADA
$firstNumber = 0;
$secondNumber = 0;

//PROCESO
echo "digite el primer numero a sumar \n";
$firstNumber = readline ();
echo "digite el segundo numero a sumar \n";
$secondNumber = readline ();
$result = $firstNumber + $secondNumber;

//RESULTADO
echo "el resultado de la suma es =" . " $result \n";
echo $firstNumber . " + " . $secondNumber . " = " . $result;
?>