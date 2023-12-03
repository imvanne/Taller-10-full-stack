<?php
$number = 0;
$numberTwo = 0;

echo "Digite el numero a multiplicar: \n";
$number = readline ();

while ($numberTwo <= 30){
  $numberTwo++;
  $result = $number * $numberTwo;
  echo $number. " x " . $numberTwo . " = " . $result . "\n";
}
?>