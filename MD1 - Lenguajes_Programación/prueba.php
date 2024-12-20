<?php

/*
Esto
es
un
comentario
*/

// se usa \n para los saltos de línea o tabulacion
echo "Hola php \n";

// Variables. Ejemplos:
// OJO: php es un lenguaje de tipado DINÁMICO, así que CUIDADO con el uso de las variables

$my_string = "Esto es una cadena";
$my_string = "Aquí cambio el valor de mi cadena de texto";
echo $my_string . "\n";
echo gettype($my_string). "\n";

$my_string = 6; //aca se cambia el valor de la variable
echo $my_string . "\n";
echo gettype($my_string). "\n";

$my_string = "Esto es una cadena de texto";
$my_int = 7;
$my_int = $my_int + 4;

echo $my_int. "\n";
echo $my_int - 1 . "\n";
echo $my_int. "\n";

$my_double = 6.5;
echo gettype($my_double). "\n";
echo $my_int + $my_double . "\n";

// echo $my_int + $my_double + $my_string . "\n"; -> DARA ERROR, porque php puede unir variables de tipo numérico, sin meter a las de tipo cadena como string

// TRUE = 1 / FALSE = espacio vacío
$my_bool = false;
echo $my_bool . "\n";
$my_bool = true;
echo $my_bool . "\n";
echo gettype($my_bool). "\n";

echo "El valor de mi integer es $my_int y el de mi boolean es $my_bool.\n";

// Constantes
const MY_CONSTANT = "Valor de la constante";
echo MY_CONSTANT . "\n";

// Estructura Array
$my_array = [$my_string, $my_int, $my_double];
echo gettype(value: $my_array). "\n";
echo $my_array[0] . "\n";
echo $my_array[2] . "\n";

// PUSH: Para añadir elementos en el array
array_push($my_array, $my_bool);
print_r ($my_array);

// Estructura Diccionario (clave:valor) (es un array)
$my_dict = array("string" => $my_string, "int" => $my_int, "bool" => $my_bool);
echo gettype(value: $my_dict). "\n";
print_r($my_dict);
echo $my_dict["int"] . "\n";

// Estructura SET
array_push($my_array, "Daniel");
array_push($my_array, "Daniel");
print_r($my_array);
//Para evitar valores repetidos
print_r(array_unique($my_array));

//Flujos de datos
for ($index = 0; $index <= 10; $index ++) {
    echo $index . "\n";
};

foreach ($my_array as $my_item) {
    echo $my_item . "\n"; 
}

$index = 0;
while ($index <= sizeof($my_array)-1) {
    echo $my_array[$index]. "\n";
    $index++;
}

$my_int = 13;
$my_string = "Hola";

if($my_int === 11 && $my_string === "Hola") {
    echo "El valor es 11\n";
} elseif ($my_int === 12 || $my_string === "Hola") {
    echo "El valor es 12\n";
} else {
    echo "El valor no es 13\n";
}

// Funciones
function printName (int $my_number) {
    echo $my_number . "\n";
}

printName(5.6);
printName(11);
printName(12);

// Objetos tipo clases
class MyClass {
    public $name;
    public $age;

    // constructor
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
$my_class = new MyClass("Daniel",20);
print_r($my_class);
echo $my_class->name . "\n";
$my_class->name = "Alexis";
echo $my_class->name . "\n";
print_r($my_class);
echo gettype($my_class) . "\n";