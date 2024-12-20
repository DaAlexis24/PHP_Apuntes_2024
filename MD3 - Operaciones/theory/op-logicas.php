<?
//COMPARACIONES
// $name = 'Orion';
// if ($name == "Pepe") {
//     echo "Tu nombre es Pepe";
// } else {
//     echo "Tú no eres Pepe, eres $name";
// }

// $value1 = 10;
// $value2 = "10";
// if ($value1 === $value2) {
//     echo "Las variables son idénticas";
// } else {
//     echo "Las variables NO son idénticas";
// }

//LOGICOS
// $var1 = 'true';
// $var2 = 'false';
// if ($var1 && $var2) {
//     echo "Verdadero";
// } else {
//     echo "Falso";
// }

//EXPRESIONES REGULARES
// $cad1 = "1234567890";
// $cad2 = "abcdefghijk";
// $patron = "/^[[:digit:]]+$/";

// if(preg_match($patron, $cad1)){
//     echo "La cadena $cad1 SON solo números" . "\n";
// } else {
//     echo "La cadena $cad1 NO SON solo números" . "\n";
// }

// if(preg_match($patron, $cad2)){
//     echo "La cadena $cad2 SON solo números" . "\n";
// } else {
//     echo "La cadena $cad2 NO SON solo números" . "\n";
// }

// $cad = "aaAA";
// $patron1 = "/^[a-z]+$/";
// $patron2 = "/^[a-z]+$/i";

// if (preg_match($patron1, $cad)) {
//     echo "La cadena $cad solo tiene MINÚSCULAS". "\n";
// } else {
//     echo "La cadena $cad NO solo tiene MINÚSCULAS". "\n";
// }

// if (preg_match($patron2, $cad)) {
//     echo "La cadena $cad tiene MINÚSCULAS o MAYÚSCULAS". "\n";
// } else {
//     echo "La cadena $cad NO tiene MINÚSCULAS o MAYÚSCULAS". "\n";
// }

$cad = "Esta es una cadena de prueba";
$patron = "/es/i";
$encontrado = preg_match_all($patron, $cad, $coincidencia, PREG_OFFSET_CAPTURE);
if($encontrado){
    print_r($coincidencia)."\n";
    echo "Se han encontrado coincidencias.\n";
    foreach ($coincidencia[0] as $coincide){
        echo "Cadena: $coincide[0] - Posición: $coincide[1]"."\n";
    }
}else{
    echo "NO se han encontrado coincidencias\n";
}