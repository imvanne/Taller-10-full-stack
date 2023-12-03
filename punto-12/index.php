<?php
$number = 0;

echo "Digite el numero a multiplicar: ";
$number = readline ();

for ($i = 1; $i <= 30; $i++){
  $result = $number * $i;
  echo "$number x $i = $result \n";
}
?>