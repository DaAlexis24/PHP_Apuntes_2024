<?
// ASI SE DECLARA UN ARRAY
$nombres = ["Daniel", "Alexis", "Joaquin"];
// print_r($nombres);
print($nombres[1]."\n");
print($nombres[0]."\n");  
// Se pueden utilizar los elementos individuales del array como variables independientes, para ello hay que indicar su índice correspondiente, hasta se pueden modificar
$nombres[2] = "Matías";
print_r($nombres);
// Podemos crear una matriz vacia y añadirle valores
$apellidos = [];
print_r($apellidos)."\n";
$apellidos[1] = "Soledad";
print_r($apellidos)."\n";
// print($apellidos[0]."\n");  -- DA ERROR PORQUE NO SE DEFINIO ESA POSICION EN EL ARRAY

// Matrices asociativas o Diccionarios
// Declaracion, los índices se deben de escribir sin comillas
$my_dicc = [3 => 9, 5 => 25, 10 => 100];
print "El cuadrado de 5 es: $my_dicc[5]\n";
// Cuando son índices string, no es necesario de encomillarlas a la hora de referenciarlas
$continentes = ["Togo" => "África", "España" => "Europa", "Brasil" => "América"];
echo "Brasil queda en $continentes[Brasil]\n";

// Matrices multidimensionales
$my_personalInfo = [
    ["nombre" => "Daniel", "edad" => 25, "peso" => 80],
    ["nombre" => "María", "edad" => 32, "peso" => 55]
];
// En este caso, como estos arrays estan compuestos por múltiples arrays es necesario encomillar los índices a los que hacemos referencia.
// A la par, esta combinación de arrays se debe de escribir entre paréntesis
print("{$my_personalInfo[0]["nombre"]} tiene {$my_personalInfo[0]["edad"]} años y pesa {$my_personalInfo[0]["peso"]} kilos\n");
print("{$my_personalInfo[1]["nombre"]} tiene {$my_personalInfo[1]["edad"]} años y pesa {$my_personalInfo[1]["peso"]} kilos\n");

// COMO MEJORAR LA LEGIBIILIDAD
$my_clients[1]["nombre"] = "Diego Sánchez";
$my_clients[1]["password"] = "cetrion";
$my_clients[2]["nombre"] = "Romina Gallego";
$my_clients[2]["password"] = "shalala";
print "<pre>";
print_r($my_clients);
print "</pre>";

// Añadir elementos en una matriz
$frutas = ["Manzana", "Piña"];
// con esta declaraciñon, se añade Coco al final del array
$frutas[] = "Coco";
echo $frutas[2]."\n";
print_r($frutas);

// Borrar elementos en una matriz
$paises = ["Palestina", "Ucrania", "Israel"];
print_r($paises). "\n";
unset($paises[2]);
print_r($paises). "\n";

// Copiar una matriz
$primer_version = ["Luis", "Ana"];
$copia_primer_version = $primer_version;
$primer_version[] = "Renato";
print("Primera matriz:\n");
print_r($primer_version)."\n";
print("Copia de la primera matriz:\n");
print_r($copia_primer_version)."\n";

// Contar los elementos de una matriz
$sistemas_transportes_Madrid = ["Metro", "Renfe", "EMT", "Interurbanos"];
$elementos = count($sistemas_transportes_Madrid);
print("La matriz 'sistemas_transportes_Madrid' tiene $elementos elementos\n");
// Contar elementos de una matriz multidimensional
$data_jugadores["Messi"]["equipo"] = "Inter de Miami";
$data_jugadores["CR7"]["equipo"] = "Al Nassr";
$data_jugadores["Messi"]["nacionalidad"] = "Argentina";
$data_jugadores["CR7"]["nacionalidad"] = "Portguesa";
$data_jugadores["Messi"]["posicion"] = "Extremo Derecho";
$data_jugadores["CR7"]["posicion"] = "Delantero Centro";
$djugadores_elementos = count($data_jugadores,COUNT_RECURSIVE);
print("La matriz 'data_jugadores' tiene $djugadores_elementos elementos\n");
print_r($data_jugadores);
// Si queremos hacerlo en una matriz bidimensional 
$djugadores_bidi = count($data_jugadores,COUNT_RECURSIVE) - count($data_jugadores);
print("La matriz 'data_jugadores' tiene $djugadores_bidi elementos\n");

// Máximo y mínimo
$numeros = [10, -10, 4, 100, 8, -2];
$max_numero = max($numeros);
$min_numero = min($numeros);
print("El número máximo de la matriz es: $max_numero\n");
print("El número mínimo de la matriz es: $min_numero\n");

// Ordenar una matriz
$values = [5 => "cinco", 10 => "diez", 1 => "uno"];
print("Matriz inicial:\n");
print_r($values)."\n";
// sort($values);
// print("Matriz ordenada con 'sort':\n");
// print_r($values)."\n";
// rsort($values);
// print("Matriz ordenada con 'rsort':\n");
// print_r($values)."\n";
// Con este ordena los indices por orden alfanumerico creciente
// ksort($values);
// print("Matriz ordenada con 'ksort':\n");
// print_r($values)."\n";
// Con este ordena los indices por orden alfanumerico decreciente
krsort($values);
print("Matriz ordenada con 'krsort':\n");
print_r($values)."\n";

// Recorrer una matriz para encontrar un valor
$sample = [3, 15, 2, 5];
print_r($sample);

if (in_array(15, $sample)) {
    echo "15 esta en la matriz \$sample \n";
} else {
    echo "15 NO esta en la matriz \$sample \n";
}

if (in_array(4, $sample)) {
    echo "4 esta en la matriz \$sample \n";
} else {
    echo "4 NO esta en la matriz \$sample \n";
}

// Encontrar un valor repetido
$repetidos = [10, 40, 25, 10, 22, 40, 10, 15];
print_r($repetidos);
$encontrado = array_search(15,$repetidos);
print("El primer valor se encuentra en la posición: $encontrado\n");   
$encontrados = array_keys($repetidos, 10);
print_r($encontrados)."\n";

// Reindexear una matriz
$names = ["a" => "Ana", "b" => "Beltrán", "c" => "Camila", "d" => "Daniel"];
print_r($names) ."\n";
$reindex = array_values($names);
echo "Matriz reindexeada con 'array_values':\n";
print_r($reindex);

// Barajear los elementos de una matriz
$baraja_Poker = ["A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K"];
print_r($baraja_Poker). "\n";
shuffle($baraja_Poker);
print("Baraja Poker barajeada\n");
print_r($baraja_Poker). "\n";

// Extraer al azar un elemento de la matriz
$cubos = [2 => 8, 3 => 27, 5 => 125, 10 => 1000];
$indice = array_rand($cubos);
print("$indice - $cubos[$indice]") . "\n";