<?php
$tableStructure = "";
$cols = 4;
$rows = 3;
$tableHeader = "<table border='1'>\n".
                "<caption>TABLA BUCLE</caption>\n".
                "<tbody>\n".
                "<tr>\n".
                "<th></th>\n";
$tableColumn = "";
$tableBody = "";

$tableStructure .= $tableHeader;
for ($i = 1; $i <= $cols; $i++) { 
    $tableColumn = "<th>$i</th>\n";
    $tableStructure .= $tableColumn;
}
$tableStructure .= "</tr>\n";
for ($i=1; $i <= $rows ; $i++) { 
    $tableStructure .= "<tr>"."<th>$i</th>";
    for ($j= 1; $j <= $cols; $j++){
        $tableBody = "<td>$i - $j</td>\n";
        $tableStructure .= $tableBody;
    }
    $tableStructure .= "</tr>\n";
}

$tableStructure .= "</tbody>\n";
$tableStructure .= "</table>\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO - Tablas</title>
</head>
<body>
    <h1>EJERCICIO - Creación de tablas utilizando bucles</h1>
    <br>
    <?php 
        echo $tableStructure;
    ?>
</body>
</html>