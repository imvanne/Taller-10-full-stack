<?php
include "./operationUtils.php";

$numberOne = 0;
$numberTwo = 0;
$option = "";

//llamar funcion numeros
$numberOne = getNumber ();
$numberTwo = getNumber ();

//llamar funcion menu
$option = showMenu ();

//llamar funcion operacion
$result = operate ($numberOne, $numberTwo, $option);

//resultado
echo "El resultado de la operacion es: " . $result;

?>