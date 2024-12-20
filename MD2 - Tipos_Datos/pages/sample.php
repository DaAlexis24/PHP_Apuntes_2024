<?php
// $1 -> incorrecto
$num_var =  12;
$str_var = "Allison";
$surname_var = "Soledad";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Variables</title>
</head>
<body>
    <div>
        <h2>Bienvenid@ <?php echo "$str_var $surname_var, felices $num_var años"; ?></h2>
    </div>
</body>

</html>