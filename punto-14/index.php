<?php
include "./passwordCheck.php";

//DATOS DE ENTRADA
$user = "";
$password = "";

//PROCESO
echo "Digite su usuario a registrar \n";
$user = readline ();

echo "Digite la contraseña a registrar \n";
$password = readline ();

if (hasSecurityLong ($password)) {
  if (hasUpperLetter ($password)) {
    if (hasNumber ($password)){
      echo "felicidades, contraseña segura \n";
    }else{
      echo "su contraseña no tiene numeros \n";
    }
  } else {
    echo "su contraseña no tiene letras mayusculas \n";
  }
} else {
  echo "la contraseña no cumple con la longitud segura \n";
}
?>