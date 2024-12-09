<?
// Funciones útiles en los arrays
// count() cuenta los elementos que están dentro del array, si este no tiene elementos nos dará 0.
echo "El array cuenta con ". count(array(1,2,3)) . " elementos\n";
// in_array($element, $array) busca el $e dentro del $array
var_dump(in_array("naranja", array("a" => "naranja", "b" => "plátano", "c" => "manzana"))) . "\n"; //bool(true)
// OJO: var_dump() nos ayuda a mostrar información sobre una expresión
// array_key_exists($key, $array): Busca la $k (clave) entre las distintas keys del $a
var_dump(array_key_exists("d", array("a" => "naranja", "b" => "plátano", "c" => "manzana"))) . "\n"; // bool(false)
// reset($array): Posiciona el puntero del array en primera posición
// current($array): Devuelve el elemento actual
// next($array) y prev($array): Mueven el puntero hacia DELANTE (next) o hacia ATRÁS (prev)
// end($array): Posiciona el puntero del array en la última posición
// Para recorrer el array es mejor utilizar:
//  foreach(array/objeto as $valor) sentencias
//  foreach(array/objeto as $CLAVE => $valor) sentencias
// Funciones para el tratamiento de cadenas
// explode($del, $cad): Divide la cad en función del del (delimitador)
// implode($sep, $array_trozos): Une las cadenas del array_trozos con el separador $sep

// Invertir un array sin necesidad de usar bloques de control
// array_reverse() es la respuesta
$num = [1,2,3,4,5,6,7];
$reverse_num = array_reverse($num);
print_r($num) . "\n";
print_r($reverse_num);
