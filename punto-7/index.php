<?php
$opcion = 0;
$firtsNumber = 0;
$secondNumber = 0;

  echo "BIENVENIDO" . "\n";

//numeros digitados por el usuario
  echo "digite el primero numero: \n";
  $firstNumber = readline ();

  echo "digite el segundo numero: \n";
  $secondNumber = readline ();

//operacion
echo "digite la operacion que quiere realizar de acuerdo a : \n";
echo "1 - SUMAR \n";
echo "2 - RESTAR \n";
echo "3 - MULTIPLICAR \n";
echo "4 - DIVIDIR \n";

$opcion = readline ();
  
switch ($opcion) {
  case 1:
  $result = $firstNumber + $secondNumber;
    break;
  case 2:
  $result = $firstNumber - $secondNumber;
    break;
  case 3:
  $result = $firstNumber * $secondNumber;
    break;
  case 4:
  $result = $firstNumber / $secondNumber;
    break;
  default:
  echo "digito una opcion incorrecta \n";  
}

echo "el resultado de la operacion es : " . $result . "\n";
?>