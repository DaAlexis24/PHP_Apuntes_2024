<?php
$color = "blue";
$color_box = "";
$text_box = "";
if($color === "#8b8b8b") {
    $text_box = "<p>La página esta en un color hexadecimal</p>";
    $color_box = "bisque";
}else {
    $text_box = "<p>Esta página no tiene un color hexadecimal, y este párrafo no tiene fondo</p>";
} 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
           background-color: <?php echo $color; ?>
        }
        h1{
            text-decoration: wavy;
        }
        p{
            background-color: <?php echo $color_box ?>;
        }
    </style>
    <title>IF - ELSE - Sample</title>
</head>
<body>
    <h1>IF - ELSE: Ejemplo</h1>
    <?php
        echo $text_box;   
    ?>
</body>
</html>