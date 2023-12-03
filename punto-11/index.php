<?php
$sum = 0;

for($numero=1; $numero <= 100; $numero = $numero + 2){
  echo $numero. "\n";
  $sum = $sum + $numero;
}
echo "la suma de todos los numeros hasta el 100 es: " . $sum;
?>