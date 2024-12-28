<?php
$bg_color = "";
$font_family = "";
$img = "";
$menu = $_POST["plantilla"];
switch ($menu) {
    case "if":
        $bg_color = "#8b8b8b";
        $font_family = "'Courier New', Courier, monospace";
        $img = '<img src="../assets/if_estructure.png">';
        break;
    case 'if-else':
        $bg_color = "#a0a0a0";
        $font_family = "'Times New Roman', Times, serif";
        $img = '<img src="../assets/if_else_estructure.png">';
        break;
    case 'if-elseif-else':
        $bg_color = "#g5g5g5";
        $font_family = "Arial, Helvetica, sans-serif";
        $img = '<img src="../assets/if_elseif_else_estructure.png">';
        break;
    case 'switch':
        $bg_color = "#c4c5c6";
        $font_family = "Verdana, Geneva, Tahoma, sans-serif";
        $img = '<img src="../assets/switch_estructure.png">';
        break;
    default:
        $bg_color = 'bisque';
        $img = '<div class="tenor-gif-embed" data-postid="22954713" data-share-method="host" data-aspect-ratio="1" data-width="50%"><a href="https://tenor.com/view/rickroll-roll-rick-never-gonna-give-you-up-never-gonna-gif-22954713">Rickroll Never Gonna Give You Up GIF</a>from <a href="https://tenor.com/search/rickroll-gifs">Rickroll GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: <?php echo $font_family?>;
            background-color: <?php echo $bg_color?>;
        }
    </style>
    <title>SWITCH - Ejemplo</title>
</head>
<body>
    <h1>SWITCH - Ejemplo</h1>
    <form method="post">
        <label>Estructuras de Control</label>
        <select name="plantilla">
            <option value="default">-------------------</option>
            <option value="if">Estructura IF</option>
            <option value="if-else">Estructura IF - ELSE</option>
            <option value="if-elseif-else">Estructura IF - ELSEIF - ELSE</option>
            <option value="switch">Estructura SWITCH</option>
        </select>
        <input type="submit" value="Enviar">    
    </form>
    <br>
    <?php
        echo $img;
    ?>
</body>
</html>