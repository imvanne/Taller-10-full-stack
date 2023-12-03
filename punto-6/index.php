<?php
//DATOS
$nombre = "";
$edad = 0;

echo "Digite su nombre, por favor:" . "\n";
$nombre = readline ();

echo "Digite su edad, por favor:" . "\n";
$edad = readline ();

if ($edad >= 18) {
  echo "hola " . $nombre . " usted es mayor de edad";
} else {
  echo "hola " . $nombre . " usted es menor de edad";
}
?>