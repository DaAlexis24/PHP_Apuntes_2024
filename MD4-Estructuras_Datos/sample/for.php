<?php
$acc = "";
$frutas = ["Piña", "Manzana", "Pera", "Fresa", "Plátano", "Kiwi"];
for ($i=0; $i < count($frutas); $i++) {
    $cad = '<option value="'.strtolower($frutas[$i]).'">'.$frutas[$i].'</option>\n';
    $acc .= $cad;
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR - Sample</title>
</head>
<body>
    <h1>FOR - Ejemplo</h1>
    <p>Vamos a hacer una lista desplegable utilizando una matriz y una estructura FOR</p>
    <form action="#">
        <select name="fruta">
            <?php echo $acc;?>
        </select>
    </form>
</body>
</html>