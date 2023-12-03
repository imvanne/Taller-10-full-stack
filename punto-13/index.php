<?php
$numberArray = array(3,5,10,15,22);
$sum = 0;

foreach ($numberArray as $number){
  $sum = $sum + $number;
}
echo "la suma total del arreglo es: ". $sum;
?>