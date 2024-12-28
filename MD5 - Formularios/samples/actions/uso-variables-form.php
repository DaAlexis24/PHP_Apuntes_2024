<?php
isset($_REQUEST['nacionalidad']) ?
$nationality = trim(strip_tags($_REQUEST['nacionalidad'])) :
$nationality = "" ;

$nationality = "" ? 
print("<p>NO HA INGRESADO NINGÚN DATO</p>\n") : 
print("<p>El usuario es: $nationality</p>\n"); 