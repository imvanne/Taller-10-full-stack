<?php
function getNumber(){
  echo "Ingrese un numero para operar: \n";
  return readline ();
}

function showMenu(){
  echo "Digite la opcion de la operacion: \n";
  echo "1 - SUMAR \n";
  echo "2 - RESTAR \n";
  echo "3 - MULTIPLICAR \n";
  echo "4 - DIVIDIR \n";

  return readline ();
}
function operate ( $numberOne, $numberTwo, $option){
  switch ($option){
    case 1:
      return $numberOne + $numberTwo;
    case 2:
      return $numberOne - $numberTwo;
    case 3:
      return $numberOne * $numberTwo;
    case 4:
      return $numberOne / $numberTwo;
    default:
      echo "Opcion no valida";
  }
}