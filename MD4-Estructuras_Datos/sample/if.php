<?php
$color = 'bisque';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: <?php echo $color; ?>;
        }
    </style>
    <title>IF - ELSEIF - ELSE - Sample</title>
</head>
<body>
    <h1>
        <?
        if ($color = 'bisque') {
            echo "El fondo de esta página es BISQUE";
        };
        ?>
    </h1>
</body>
</html>