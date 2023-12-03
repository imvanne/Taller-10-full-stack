<?php
const TICKET_PRICE = 25000;
$membershipType ="";
$personNumber= 0;

//proceso
echo "digite el numero de personas que van a entrar a la bolera: \n";
$personNumber = readline ();

echo "digite el tipo de membresia: \n";
$membershipType = readline ();

$totalPay = $personNumber * TICKET_PRICE;

if ($membershipType  ==  "A"|| "a" || $membershipType == "B" ||"b") {
  $totalPay = $totalPay * 0.7;
}
//RESULTADO FINAL

echo "El Total a pagar es $" . number_format ($totalPay);
?>