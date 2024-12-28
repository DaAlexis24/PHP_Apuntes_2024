<?php
$acc = "";
$frutas = ["Piña", "Manzana", "Pera", "Fresa", "Plátano", "Kiwi"];
$i = 0;
while ($i < count($frutas)) {
    $cad = '<option value="'. strtolower($frutas[$i]).'">'. $frutas[$i] .'</option>\n';
    $acc .= $cad;
    $i++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHILE - Sample</title>
</head>
<body>
    <h1>WHILE - Ejemplo</h1>
    <p>Vamos a hacer una lista desplegable utilizando una matriz y una estructura WHILE</p>
    <form action="#">
        <select name="fruta">
            <?php echo $acc;?>
        </select>
    </form>
</body>
</html>