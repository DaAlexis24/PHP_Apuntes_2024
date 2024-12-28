<?php
$acc = "";
$frutas = ["Piña", "Manzana", "Pera", "Fresa", "Plátano", "Kiwi"];
$i = 0;
do {
    $cad = '<option value="'. strtolower($frutas[$i]).'">'. $frutas[$i] .'</option>\n';
    $acc .= $cad;
    $i++;    
} while ($i < count($frutas));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DO WHILE - Sample</title>
</head>
<body>
    <h1>DO WHILE - Ejemplo</h1>
    <p>Vamos a hacer una lista desplegable utilizando una matriz y una estructura DO WHILE</p>
    <form action="#">
        <select name="fruta">
            <?php echo $acc;?>
        </select>
    </form>
</body>
</html>