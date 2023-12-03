<?php
echo "BIENVENIDOS A  LA BOLERA". "\n";
$afiliacion = readline ("ingrese el tipo de afiliacion (A o B):");
$personas = readline ("ingrese el numero de personas:");
$valor = 25000;

$costoTotal = $personas * $valor;

if ($afiliacion == "A" || $afiliacion == "B"){
  echo "el valor total con descuento es:" . ($costoTotal * 0.7);
} else {
  echo "el valor total es :" . $costoTotal;
}
?>
