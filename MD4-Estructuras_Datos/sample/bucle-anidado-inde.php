<?php
$accumulator = "";
for ($i=0; $i < 5; $i++){  
    for ($i=0; $i < 6; $i++) { 
        $cad = "<p>Índice Exterior: ".$i." -- Índice exterior: ".$i."</p>\n";
        $accumulator .= $cad;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles Anidados Independientes - Sample</title>
</head>
<body>
    <h1>EJEMPLO - Bucle Anidado Independiente</h1>
    <p>Vamos a ver como funcionan este tipo de estructuras</p>
    <?php
     echo $accumulator;
    ?>
</body>
</html>