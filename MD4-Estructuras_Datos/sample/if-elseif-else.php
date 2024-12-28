<?php
$style = "";
$img = "";
if ($_POST['plantilla'] == "if") {
    $style = 'background-color: blue';
    $img = '<img src="../assets/if_estructure.png">';      
} elseif ($_POST['plantilla'] == "if-else"){
    $style = 'background-color: yellow';
    $img = '<img src="../assets/if_else_estructure.png">';
}elseif ($_POST['plantilla'] == "if-elseif-else"){
    $style = 'background-color: green';
    $img = '<img src="../assets/if_elseif_else_estructure.png">';
}else{
    $style = 'background-color: bisque';
    $img = '<iframe width="560" height="315" src="https://www.youtube.com/embed/xvFZjo5PgG0?si=mfl1JuJhnmW92CtC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay muted; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: auto;
            <?php echo $style;?>
        }
    </style>
    <title>IF - ELSEIF - ELSE</title>
</head>
<body>
    <h1>Ejemplo con IF - ELSEIF - ELSE</h1>
    <form method="post" action="">
        <label>Plantillas de Estructuras de control</label>
        <select name="plantilla" id="pln">
            <option value="sample">-----------------</option>
            <option value="if">Estructura IF</option>
            <option value="if-else">Estructura IF - ELSE</option>
            <option value="if-elseif-else">Estructura IF - ELSEIF - ELSE</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
        echo $img;
    ?>
</body>
</html>