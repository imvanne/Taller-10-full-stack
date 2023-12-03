<?php
//DECLARACION DE DATOS
const TICKET_PRICE = 25000;
$membershipType = " ";
$personNumber = 0 ;
echo "BIENVENIDO"
//PROCESO
echo "digite el numero de personas que entraran en la bolera: \n";
$personNumber = readline ();
echo "digite el tipo de membresia: \n";
$membershipType = readline ();

$totalpay = $personNumber * TICKET_PRICE;

//SALIDA
switch (strtoupper ($membershipType) ) {
        case "A":
        $totalpay = $totalpay * 0.7;
echo "el valor a pagar es $" . $totalpay;
break;
        case "B":
        $totalpay = $totalpay * 0.75;
echo "el valor a pagar es $" . $totalpay;
break;
        case "C":
        $totalpay = $totalpay * 0.9;
echo "el valor a pagar es $" . $totalpay;
break;
       case "D":
        $totalpay = $totalpay * 0.95;
echo "el valor a pagar es $" . $totalpay;
break;
default:
echo " el valor a pagar es $" . number_format ($totalpay);
}
?>