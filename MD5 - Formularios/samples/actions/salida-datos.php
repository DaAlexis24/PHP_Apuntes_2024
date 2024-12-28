<?php
$empresa = isset($_REQUEST["empresa"]) ? trim(htmlspecialchars($_REQUEST["empresa"], ENT_QUOTES, 'UTF-8')) : "";

$empresa == "" ? print("<p>No se ha recibido ningún dato</p>\n") :
print($empresa);