<?php
$my_dicc = [
    "frutas" => ["Manzana", "Fresa"],
    "verduras"=> ["Cebolla","Puerro"],
    "proteinas"=> ["Pollo","Carne"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOREACH - Sample</title>
</head>
<body>
    <h1>FOREACH - Ejemplo</h1>
    <p>En este caso, vamos a enseñar los valores de un diccionario utilizando FOREACH</p>
        <?php
        foreach ($my_dicc as $key => $value) {
            echo "<p>".$key. "=>".implode(" - ", $value)."</p>\n";
        }
        ?>
</body>
</html>