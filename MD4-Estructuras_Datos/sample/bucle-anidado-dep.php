<?php
$accumulator = "";
for ($i=0; $i < 5; $i++){  
    for ($i=0; $i < $i; $i++) { 
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
    <title>BUCLE ANIDADO DEPENDIENTE - SAMPLE</title>
</head>
<body>
    <h1>Ejemplo de un Bucle Anidado Dependiente</h1>
    <p>Vamos a ver como se aplica este tipo de bucle en estos párrafos</p>
    <?php
        echo $accumulator;
    ?>
</body>
</html>